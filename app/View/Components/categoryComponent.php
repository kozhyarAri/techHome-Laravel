<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categoryComponent extends Component
{
    public $category;
    public function __construct($categorys)
    {
        $this->category = $categorys;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-component');
    }
}
