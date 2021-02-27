<?php

namespace Kict\FpxMultimediaComponentsLaravel\App\View\Components;

use Illuminate\View\Component;

class AnimatedLoader extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('kict/fpx_multimedia_components_laravel/views::components.animated-loader');
    }
}
