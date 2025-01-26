<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    public function welcomePage(){
        return view('create');
    }

    public function store(Request $request){
        //Post::create($request->all());
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->slug
        ]);

        //notify admin
        Mail::raw("A new blog has been created title is {$request->title} and description is {$request->description}", function($message){
            $message->to('admin@admin.com')
                    ->subject('New Post');
        });


        //notify  all-user
        $users = User::all();
        foreach($users as $user){
            Mail::raw('Hey '.$user->name.' A new blog has been created title is '.$request->title.' and description is '.$request->description.'', function($message) use ($user) {
                $message->to($user->email)
                        ->subject('New Post');
            });
        }
       

        return back()->with('message', 'Post has been created');
    }
}
