<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $title;
    public $breadcrumbHome;
    public $breadcrumbCurrent;

    // Constructor untuk menerima data dari luar
    public function __construct($title, $breadcrumbHome, $breadcrumbCurrent)
    {
        $this->title = $title;
        $this->breadcrumbHome = $breadcrumbHome;
        $this->breadcrumbCurrent = $breadcrumbCurrent;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb');
    }
}
