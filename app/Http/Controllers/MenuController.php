<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
   

    public function showMenu()
    {
       $menu['menu'] = DB::table('menu')->get();
        if(count($menu) > 0)
            return view('menu',$menu);
        else return view('menu');
    }

}
