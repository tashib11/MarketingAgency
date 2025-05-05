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

        // Decode the content (assumes it's a JSON array of blocks)
        $contentBlocks = json_decode($blog->content, true);

        // Format the blog
        $formattedBlog = [
            'title' => $blog->title,
            'date' => $blog->created_at->format('M d, Y'),
            'content' => array_map(function ($block) {
                return [
                    'type' => $block['type'],
                    'value' => $block['data'] ?? '', // make sure this matches your structure
                ];
            }, $contentBlocks ?? []),
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
        $content = json_decode($blog->content, true);
        $firstImage = null;

        foreach ($content as $block) {
            if ($block['type'] === 'image' && !empty($block['data'])) {
                $firstImage = $block['data'];
                break;
            }
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


}
