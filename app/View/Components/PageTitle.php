<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageTitle extends Component
{
    public $page;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $page = '',
        string $icon = ''
    )
    {
        $this->page = $page;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-title');
    }
}
