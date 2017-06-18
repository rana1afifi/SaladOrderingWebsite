<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  crocodicstudio\crudbooster\helpers\CRUDBooster;

class RateController extends Controller
{
   
    //Show the menu to rate
    public function showMenu()
    {
       $menu['menu'] = DB::table('menu')->orderBy('step','asc')->get();
        if(count($menu) > 0)
            return view('rate',$menu);
        else return view('rate');
    }
    
    //Order of the salad
    public function rate(Request $request)
    { 
        if(auth()->user()->blocked == 0 && auth()->user()->confirmationcode == null)
        {
            $Top1 = $request->Step1;
            $Top2 = $request->Step2;    
            $Top3 = $request->Step3;
            $Top4 = $request->Step4;
            $Top5 = $request->Step5;
            
            if($Top1 != null)
                DB::table('menu')->where('name', $Top1)->increment('rate');
            if($Top2 != null)
                DB::table('menu')->where('name', $Top2)->increment('rate');
            if($Top3 != null)
                DB::table('menu')->where('name', $Top3)->increment('rate');
            if($Top4 != null)
                DB::table('menu')->where('name', $Top4)->increment('rate');
             if($Top5 != null)
                DB::table('menu')->where('name', $Top5)->increment('rate');
                 
            
            if(auth()->user()->id == null)  //if logout
                return redirect('/login');
            return redirect('/');
        }
        else return redirect('/blocked');
    }

}
