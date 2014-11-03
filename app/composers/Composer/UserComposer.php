<?php

namespace composers\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserComposer
{
    function compose(View $view)
    {
        if(Auth::check()) {
            $view->with([
                'email'      => Auth::user()->email,
                'first_name' => Auth::user()->first_name,
                'last_name'  => Auth::user()->last_name,
                'last_login' => Auth::user()->last_login,
                'id'         => Auth::user()->id,
                'admin'      => Auth::user()->admin,
                'su'         => Auth::user()->superuser,
                'builder'    => Auth::user()->builder
            ]);
        }
    }
}