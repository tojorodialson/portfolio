<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
use Session;
use Redirect;

class LangController extends Controller
{
    public function index(Request $request){
        $lang = $request->lang;
        
        App::setLocale($lang);
        Session::put('locale', $lang);
        return Redirect::back();
    }
}
