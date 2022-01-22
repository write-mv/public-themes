<?php

namespace WriteMv\Themes\Components;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;

class LastSeen extends BladeComponent
{
    public Post $post;

    private ?Carbon $lastSeen;

    public function __construct(Post $post)
    {
        $this->post = $post;

        $this->lastSeen = Carbon::make(request()->cookie("last_seen_{$this->post->slug}"));

        Cookie::queue("last_seen_{$this->post->slug}", now()->toDateTimeString());
    }

    public function render()
    {
        return view('themes::components.last-seen', [
            'lastSeen' => $this->lastSeen,
        ]);
    }
}
