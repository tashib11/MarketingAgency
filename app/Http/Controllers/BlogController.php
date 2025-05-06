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

    // Normalize content: convert relative src to full URLs
    $content = preg_replace_callback(
        '/<img[^>]+src="(uploads\/blogs\/[^">]+)"/i',
        function ($matches) {
            return str_replace(
                $matches[1],
                asset($matches[1]),
                $matches[0]
            );
        },
        $request->content
    );

    Blog::create([
        'title' => $request->title,
        'content' => $content,
        'date' => now()->toDateString(),
    ]);

    return redirect()->back()->with('success', 'Blog created successfully!');
}


public function uploadImage(Request $request)
{
    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Validate image type and size
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Unique filename
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        // Store in public/uploads/blogs/
        $file->move(public_path('uploads/blogs'), $filename);

        // Return URL
        return response()->json([
            'url' => asset('uploads/blogs/' . $filename)
        ]);
    }

    return response()->json(['error' => 'No image uploaded'], 400);
}

}
