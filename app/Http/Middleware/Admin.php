<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
//            if ($user->admin == 1) {
//                print_r("sdfasdfasdf");
//                die();
                return $next($request);
//            }
//            Session::flash('message', trans('general/message.not_have_permission'));
//            Session::flash('type', 'error');
//            Session::flash('title', trans('general/message.per_not_grant'));
//            return redirect()->route('login');
        }
        return redirect()->route('login');
    }
}
