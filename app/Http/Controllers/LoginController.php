<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }

    public function check(LoginRequest $request)
    {
    	$members=DB::table('members')
    		->where('user_Name', $request->user_Name)
    		->where('password', $request->password)
    		->first();
    	$request->session()->put('members', $members);

    	if($members !=null)
    	{
    		//return redirect()->route('home.index');
            if($members->type_id==1)
            {
                return redirect()->route('member.index');
            }
            else{
                return redirect()->route('user.index',[$members->mem_id]);
            }
    	}
    	else{
            $request->session()->flash('message','Invalid UserName or Password');
    		return redirect()->route('login.index');
    	}
    }
}
