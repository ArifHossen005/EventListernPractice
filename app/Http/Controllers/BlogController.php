<?php 
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Events\BlogPublished;

class BlogController extends Controller
{
    public function welcomePage()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Create the blog post
        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->slug
        ]);

        // Dispatch the event
        BlogPublished::dispatch($blog);

        return back()->with('message', 'Post has been created');
    }
}
