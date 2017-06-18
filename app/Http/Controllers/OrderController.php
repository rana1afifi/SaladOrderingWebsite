<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  crocodicstudio\crudbooster\helpers\CRUDBooster;

class OrderController extends Controller
{
   
    //Show the menu to order
    public function showMenu()
    {
       $menu['menu'] = DB::table('menu')->orderBy('rate','desc')->get();
        if(count($menu) > 0)
            return view('order',$menu);
        else return view('order');
    }
    
    //Order of the salad
    public function order(Request $request)
    { 
        if(auth()->user()->blocked == 0 && auth()->user()->confirmationcode == null)
        {
            $this->validate($request, [
                'Step1' => 'required|array|max:1',
                'Step2' => 'required|array|min:3|max:3',
                'Step3' => 'required|array|max:1',
                'Step4' => 'required|array|max:1',
                'Step5' => 'required|array|max:1',
                'pickUpTime' => 'required',
            ]);
            foreach($request->Step1 as $step)
                $components1 .= $step . ' ';

            foreach($request->Step2 as $step)
                $components2 .= $step . ' ';

            foreach($request->Step3 as $step)
                $components3 .= $step . ' ';

            foreach($request->Step4 as $step)
                $components4 .= $step . ' ';

            foreach($request->Step5 as $step)
                $components5 .= $step . ' ';
            
            if(auth()->user()->id == null)  //if logout
                return redirect('/login');

            DB::table('orders')->insert([
                        ['customerID' => auth()->user()->id , 'step1' => $components1, 'step2' => $components2, 'step3' => $components3, 'step4' => $components4, 'step5' => $components5, 'pickUpTime' => $request->pickUpTime]
                        ]);
            $config['content'] = "New Order";
            $config['to'] = CRUDBooster::adminPath('orders');
         
            $config['id_cms_users'] = [4]; //This is an array of id users
           
            CRUDBooster::sendNotification($config);
            return redirect('/');
        }
        else return redirect('/blocked');
    }

}
