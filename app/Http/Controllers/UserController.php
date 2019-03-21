<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(Request $request,$id)
    {
        $user=Member::find($id);
        return view('user.index')
            ->with('usr',$user);
    }
    public function profile(Request $request,$id)
    {
    	$user=Member::find($id);
    	return view('user.profile')
    		->with('usr',$user);
    }
    public function edit( $id)
    {
    	$user=Member::find($id);
    	return view('user.edit')
    		->with('user', $user);
    }

    public function update(UserRequest $request, $id)
    {
    	//$new_id= $request->mem_id;
    	//$update=Member::find($new_id);

    	
        $file=$request->file('pic');
        $fileName=date('YmdHis').$file->getClientOriginalName();
        if($file->getMimeType()=='image/jpeg')
        {
            $file->move('uploads',$fileName);
            $update=Member::find($id);
            $update->mem_Name= $request->mem_Name;
            $update->user_Name= $request->user_Name;
            $update->password= $request->password;
            $update->phone_no= $request->phone_no;
            $update->imgPath=$fileName;
            $update->save();

            return redirect()->route('user.profile',[$update->mem_id]);

        }
        else{
            return redirect()->back();
        }


       


    }
}
