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
        $blogs = Blog::with('contents')->orderBy('id', 'desc')->get(); // Ensure latest post comes first
        return view('pages.blog-page', compact('blogs'));
    }


    public function getBlog($id)
    {
        $blog = Blog::with('contents')->findOrFail($id);
        return response()->json($blog);
    }
    public function BlogList()
    {
        $data = Blog::with('contents')->orderBy('id', 'desc')->get();
        return response()->json($data);
    }



}
