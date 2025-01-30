<?php

namespace App\Listeners;

use App\Events\BlogPublished;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class BlogPublishedAdminListener implements ShouldQueue
{
    public function handle(BlogPublished $event): void
    {
        Mail::raw("A new blog has been created. Title: {$event->blog->title} and Description: {$event->blog->description}", function ($message) {
            $message->to('admin@admin.com')->subject('New Post Published');
        });
    }
}
