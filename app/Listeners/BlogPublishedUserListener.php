<?php

namespace App\Listeners;

use App\Events\BlogPublished;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class BlogPublishedUserListener implements ShouldQueue
{
    public function handle(BlogPublished $event): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::raw("Hey {$user->name}, a new blog has been created. Title: {$event->blog->title}, Description: {$event->blog->description}.", function ($message) use ($user) {
                $message->to($user->email)->subject('New Post');
            });
        }
    }
}
