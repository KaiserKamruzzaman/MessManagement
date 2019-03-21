<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Bazar;
use App\Meal;
use App\Member_type;
use App\Http\Requests\MemberRequest;


class MemberController extends Controller
{
    public function index(Request $request)
    {
        
        //$members=Member::all();
       // $demo=Member_type::all();
        //$request->session()->put('demo', $demo);
    	$members=Member::orderBy('mem_Name', 'asc')->get();
    	return view('member.index')
    		->with('members', $members);
    }

    public function create(Request $request)
    {
    	return view('member.create');
    }

    public function store(MemberRequest $request)
    {
        $file=$request->file('pic');
        $fileName=date('YmdHis').$file->getClientOriginalName();

        if($file->getMimeType()=='image/jpeg')
        {
            $file->move('uploads',$fileName);

            $new_mem = new Member();
            $new_mem->mem_Name= $request->mem_Name;
            $new_mem->user_Name= $request->user_Name;
            $new_mem->password= $request->password;
            $new_mem->type_id= $request->type_id;
            $new_mem->phone_no= $request->phone_no;
            $new_mem->imgPath= $fileName;

            $new_mem->save();

            return redirect()->route('member.index');
        }
        else{
            $request->session()->flash('image', 'Invalid image!!');
            return redirect()->back();
        }

    	


    }

    public function show( $id)
    {
    	$mem=Member::find($id);
    	return view('member.details')
    		->with('member', $mem);
    }
     public function edit( $id)
    {
    	$mem=Member::find($id);
    	return view('member.edit')
    		->with('member', $mem);
    }

    public function update(MemberRequest $request, $id)
    {
    	//$new_id= $request->mem_id;
    	//$update=Member::find($new_id);
    	$update=Member::find($id);

    	$update->mem_Name= $request->mem_Name;
    	$update->user_Name= $request->user_Name;
    	$update->password= $request->password;
        $update->type_id= $request->type_id;
    	$update->phone_no= $request->phone_no;
    	$update->save();

    	return redirect()->route('member.show',$update->mem_id);


    }

    public function delete($id)
    {
        $member=Member::find($id);
        return view('member.delete')
            ->with('member',$member);
    }
    
    public function confirmDelete($id)
    {
        Member::destroy($id);
        return redirect()->route('member.index');
        
    }
    
    /*
    public function confirmDelete(Request $request)
    {
        $id=$request->mem_id;
        Member::destroy($id);
        return redirect()->route('member.index');
        
    }
    */
    public function showBazar(Request $request)
    {
        $bazar=DB::table('bazars')
            ->join('members','bazars.mem_id','=','members.mem_id')
            ->get();
            // var_dump($bazar);
        return view('member.bazar')->with('bazar',$bazar);
    }
    public function summary(Request $request)
    {
        $member=Member::all();
        /*
        $bazar=DB::table('bazars')
            ->join('members','bazars.mem_id','=','members.mem_id')
            ->select(DB::raw('DISTINCT mem_Name'))
            ->select(DB::raw('SUM ('cost')'))
            ->get();
            */
        $bazar=DB::table('bazars')
            ->join('members','bazars.mem_id','=','members.mem_id')
            ->selectRaw('mem_Name, SUM(cost) as total')
            ->groupBy('mem_Name')        
            ->get();
        $total=DB::table('bazars')->SUM('cost');
        // print_r($total);        
        return view('member.bazar_summary')
                ->with('total',$total)
                ->with('bazar',$bazar);
    }

    public function calculate(Request $request)
    {
         $bazar=DB::table('bazars')
            ->join('members','bazars.mem_id','=','members.mem_id')
            ->selectRaw('mem_Name, SUM(cost) as total')
            ->groupBy('mem_Name')        
            ->get();
        $meal=DB::table('meals')
            ->join('members','meals.mem_id','=','members.mem_id')
            ->selectRaw('mem_Name, SUM(quantity) as khana')
            ->groupBy('mem_Name')        
            ->get();
        $member = DB::table('members')->count();
        


        // print_r($member);

        return view('member.summary')
                ->with('bazar',$bazar)
                ->with('meal',$meal)
                ->with('member',$member);
    }
}
