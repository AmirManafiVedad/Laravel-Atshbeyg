<?php

namespace App\listeners;

use App\Events\PostViewEvent;
use App\Post;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostViewCount implements ShouldQueue
{
    private $post;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  PostViewEvent  $event
     * @return void
     */
    public function handle(PostViewEvent $event)
    {
        $this->post = $event->post;
        $this->post->views +=1;
        $this->post->save();
    }
}
