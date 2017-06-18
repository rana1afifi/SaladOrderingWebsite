<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfirmationController extends Controller
{
   
    
    public function showConfirmationForm()
    {
        return view('auth.confirmation');
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, [
            'confirmation' => 'required|string|max:5',
        ]);
        
        if(auth()->user()->confirmationcode == $request->confirmation)
        {
            DB::table('users')
            ->where('id', auth()->user()->id)
            ->update(['confirmationcode' => null]);
            return redirect('/');
        }
            
        return redirect('/confirmation');   
    }

}
