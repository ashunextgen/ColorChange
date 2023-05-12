<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Theme;

class ColorController extends Controller
{
    public function index(){

        return view('front');
    }

    public function change_color(){

        return view('color-form');
    }

    public function post_change_color(Request $request){

     

        $color = new Theme();
        $color->hcolor = $request->hcolor;
        $color->fcolor = $request->fcolor;
        $color->save();

    }
}
