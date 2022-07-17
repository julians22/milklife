<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    protected string $post_type;
    public int $perPage = 3;

    public function mount($post_type)
    {
        $this->post_type = $post_type;
    }

    public function render()
    {
        return view('livewire.frontend.post-component', [
            'posts' => Post::where('post_type', $this->post_type)->orderBy('post_date', 'desc')->paginate($this->perPage),
            'post_type' => $this->post_type,
        ]);
    }

    public function loadMore($post_type)
    {
        $this->post_type = $post_type;
        $this->perPage = $this->perPage + 3;
    }
}
