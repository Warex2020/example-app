<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Trending extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $trendings = collect([
            ["title" => "Trending 1", "id" => 1],
            ["title" => "Trending 2", "id" => 2],
            ["title" => "Trending 3", "id" => 3],
            ["title" => "Trending 4", "id" => 4],
            ["title" => "Trending 5", "id" => 5],
        ]);

        return view('components.post.trending', compact('trendings'));
    }
}
