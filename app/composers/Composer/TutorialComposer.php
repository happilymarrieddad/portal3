<?php

namespace composers\Composer;

use Illuminate\View\View;
use ComputerEngineering;
use SoftwareEngineering;

class TutorialComposer
{
    function compose(View $view)
    {
        $view->with([
            'ce'      => ComputerEngineering::all(),
            'se'      => SoftwareEngineering::all()
        ]);
    }
}