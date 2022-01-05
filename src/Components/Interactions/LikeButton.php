<?php

namespace WriteMv\Themes\Components\Interactions;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use WriteMv\Themes\Components\LivewireComponent;
use Ramsey\Uuid\Uuid;
use App\Models\Post;

class LikeButton extends LivewireComponent
{

    public Post $post;

    public ?string $likerUuid = null;

    public bool $isLiked = false;

    protected static $assets = ['alpine'];

    public function mount()
    {
        $this->isLiked = $this->post->isLikedBy(request()->cookie('liker_id'));

        if (!$this->likerUuid) {
            $this->likerUuid = Cookie::get('liker_id') ?? Uuid::uuid4();

            Cookie::queue('liker_id', $this->likerUuid, 60 * 365 * 10);
        }
    }

    public function render(): View
    {
        return view('themes::components.interactions.like-button');
    }

    public function like()
    {
        if ($this->post->isLikedBy($this->likerUuid)) {
            $this->post->removeLikeBy($this->likerUuid);
            $this->isLiked = false;
        } else {
            $this->post->addLikeBy($this->likerUuid);
            $this->isLiked = true;
        }
    }
}
