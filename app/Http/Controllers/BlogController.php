<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function BlogPage()
    {
        // $blogs = Blog::with('contents')->orderBy('id', 'desc')->get(); // Ensure latest post comes first
        return view('pages.blog-page');
    }
    public function show($id): JsonResponse
    {
        $blog = Blog::findOrFail($id);

        $formattedBlog = [
            'title' => $blog->title,
            'date' => $blog->created_at->format('M d, Y'),
            'content' => $blog->content, // full HTML content
        ];


        // Get recent posts (excluding current blog)
        $recent = Blog::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($b) {
                return [
                    'id' => $b->id,
                    'title' => $b->title,
                    'date' => $b->created_at->format('M d, Y'),
                ];
            });

        return response()->json([
            'blog' => $formattedBlog,
            'recent' => $recent,
        ]);
    }


    public function recent()
{
    $blogs = Blog::orderBy('created_at', 'desc')->limit(10)->get();

    $formatted = $blogs->map(function ($blog) {
        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'date' => $blog->created_at->format('M d, Y'), // e.g. "May 04, 2025"
        ];
    });

    return response()->json($formatted);
}

public function list()
{
    $blogs = Blog::latest()->get();

    $formatted = $blogs->map(function ($blog) {
        $firstImage = null;

        // Try to extract first <img src="..."> using regex
        if (preg_match('/<img[^>]+src="([^">]+)"/i', $blog->content, $matches)) {
            $firstImage = $matches[1];
        }

        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'image_url' => $firstImage,
            'date' => $blog->created_at->format('M d, Y'),
        ];
    });

    return response()->json($formatted);
}


public function create()
{
    return view('admin.blog-create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
    ]);

    Blog::create([
        'title' => $request->title,
        'content' => $request->content,
        'date' => now()->toDateString(),
    ]);

    return redirect()->back()->with('success', 'Blog created successfully!');
}

public function uploadImage(Request $request)
{
    if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Store the image in storage/app/public/blog-images
        $path = $request->file('image')->store('blog-images', 'public');

        // Return the accessible URL (via storage link)
        return response()->json([
            'url' => asset('storage/' . $path)
        ]);
    }

    return response()->json(['error' => 'No image uploaded'], 400);
}


public function index(Request $request)
{
    $search = $request->input('search');
    $blogs = Blog::when($search, function ($query, $search) {
        return $query->where('title', 'like', '%' . $search . '%');
    })->orderBy('created_at', 'desc')->paginate(10);

    if ($request->ajax()) {
        return view('admin.blog-table', compact('blogs'))->render();
    }

    return view('admin.blog-index', compact('blogs'));
}


public function edit($id)
{
    $blog = Blog::findOrFail($id);
    return view('admin.blog-edit', compact('blog'));
}

public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id);
    $blog->title = $request->title;
    $blog->content = $request->content; // content contains TinyMCE HTML
    $blog->save();

    return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
}

public function destroy($id)
{
    $blog = Blog::findOrFail($id);
    $blog->delete();

    return redirect()->route('admin.blogs')->with('success', 'Blog deleted.');
}

}
