<?php

namespace WriteMv\Themes\Components\Layouts;

use WriteMv\Themes\Components\BladeComponent;

class ThemeLayout extends BladeComponent
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('themes::layouts.guest');
    }
}
