<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectionHeader extends Component
{
    public $smallTitle;
    public $bigTitle;

    public function __construct($smallTitle, $bigTitle)
    {
        $this->smallTitle = $smallTitle;
        $this->bigTitle = $bigTitle;
    }

    public function render()
    {
        return view('components.section-header');
    }
}
