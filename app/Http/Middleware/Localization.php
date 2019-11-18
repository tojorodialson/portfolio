<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }else{
            App::setLocale('en');
            Session::put('locale', 'en');
        }
        return $next($request);
    }
}