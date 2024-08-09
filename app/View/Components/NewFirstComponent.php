<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewFirstComponent extends Component
{
    public $name;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-first-component', [
            'tags' => $this->getTags()
        ]);
    }
    private function getTags() {
        return[
            'UEFA',
            'FIFA',
            'CAF'
        ];
    }
}
