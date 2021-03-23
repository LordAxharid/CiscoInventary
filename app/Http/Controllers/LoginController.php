<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Login;
use Auth;
use Session;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
            $adminCount = Login::where(['username' => $data['username'],'password'=>md5($data['password']),'status'=>1])->count();
            if($adminCount > 0){
                //echo "Success"; die;
                Session::put('adminSession', $data['username']);
                return redirect('/Developers');
        	}else{
                //echo "failed"; die;
                return redirect('/')->with('flash_message_error','Usuario O Clave Incorrectas');
        	}
    	}
    	return view('login.index');
    }
}
