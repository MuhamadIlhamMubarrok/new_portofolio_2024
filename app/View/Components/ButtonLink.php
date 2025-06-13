<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $href;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($href = '#', $text = 'LEARN MORE')
    {
        $this->href = $href;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.button-link');
    }
}
