<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BazarRequest;
use App\Bazar;
use App\Member;

class BazarController extends Controller
{
    public function index(Request $request,$id)
    {
    	$member=Member::find($id);
    	$bazr=DB::table('bazars')
    		->where('mem_id','=',$member->mem_id)
    		->get();
    	// var_dump($bazr);
    	return view('bazar.index')
    		->with('bazar',$bazr);
    }
    public function create(Request $request,$id)
    {
    	$member=Member::find($id);
    	return view('bazar.create')
    		->with('member',$member);
    }
    public function submit(BazarRequest $request,$id)
    {
    	$member=Member::find($id);
    	$new_baz=new Bazar();
    	$new_baz->mem_id=$request->mem_id;
    	$new_baz->date=$request->date;
    	$new_baz->items=$request->items;
    	$new_baz->cost=$request->cost;

    	$new_baz->save();
    	return redirect()->route('bazar.index',[$member->mem_id]);

    }

    // public function calculation(Request $ewquest)
    // {
    //     $bazar=Bazar::all();
    //     return view('member.bazar_calculation');
    // }

    

   
}
