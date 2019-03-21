<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Member_type;
use App\Bazar;
use App\Meal;


class MealController extends Controller
{
    public function index(Request $request,$id)
    {
        $member=Member::find($id);
    	return view('user.meal')->with('member',$member);
    }
    public function meal(Request $request,$id)
    {
        $id=Member::find($id);
    	$meal=new Meal();
    	$meal->date=$request->date;
        $meal->quantity=$request->quantity;
        $meal->mem_id=$request->id;
    	$meal->save();
    	$request->session()->flash('message','Meal added sucessfully');
    	return back();


    }
    public function showMeal(Request $request)
    {
        /*
    	$diff=DB::table('meals')
            ->join('members','meals.mem_id','=','members.mem_id')
            ->selectRaw('date, SUM(quantity) as total')
            ->groupBy('date')
            ->orderBy('date')         
            ->get();
            */
            
        $meal=DB::table('meals')
            ->join('members','meals.mem_id','=','members.mem_id')
            ->selectRaw('date,mem_Name,SUM(quantity) as total')
            ->groupBy('date') 
            ->groupBy('mem_Name')        
            ->orderBy('date')           
            ->get();
        
            // print_r($meal);
    	return view('member.mealShow')->with('meal',$meal);
    }
}
