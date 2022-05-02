<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Lost;
use App\Models\Found;
use Illuminate\Support\Facade,\Hash;
use DB;

class MainController extends Controller
{
    function index(){

        $items = DB::select('select * from founds');
         $losts = DB::select('select * from losts');
        return view('lnf.index',['items'=>$items,'losts'=>$losts]);
    // 
        // $items=Found::all();
        // return view('lnf.index')->with('items','$items');
    }
    function login(){
         return view('lnf.login');
       
    }
    function register(){
        return view ('lnf.register');

    }
    function lost(){
        return view('lnf.lost');

    }
     function found(){
        return view('lnf.found');

    }
    function details(){
        return view('lnf.details');
    }
    //saving lost item information into the database
    function savelost(Request $request){
        $lost= new Lost;
        $lost->description=$request->description;
        $lost->national_id=$request->IDno;
        $lost->driving_licence_id=$request->dlicense;
        $lost->insurance_id=$request->insurance;
        $lost->employee_id=$request->EmpNo;
        $lost->student_id=$request->studNo;
        $lost->first_name=$request->fname;
        $lost->last_name=$request->lname;
        $lost->passport_number=$request->passport;
        $lost->road=$request->road;
        $lost->phone=$request->phone;
        $lost->email=$request->email;
        $lost->month=$request->lost_month;
        $lost->day=$request->lost_day;
        $lost->year=$request->lost_year;
        $save= $lost->save();
         if($save){
   return back()->with ('success','lost item info has been added to the system');
    }
    else{
        return back()->with('fail','something went wrong,try again later');
    }

}
function savefound(Request $request){
    //validate request
    $request ->validate([
        
        'phone'=>'required',
        'description'=>'required|max:20'
        ]);
    //saving found items into the database
    $found= new Found;
    $found->names=$request->names;
    $found->description=$request->description;
    $found->phone=$request->phone;
    $found->national_id=$request->idnumber;
    $found->driving_licence_id=$request->dlicense;
    $found->insurance_id=$request->insurance;
    $found->employee_id=$request->empcard;
    $found->student_id =$request->studcard;
    $found->passport_number=$request->passport;
   $save= $found->save();
        if($save){
   return back()->with ('success','lost item info has been added to the system');
    }
    else{
        return back()->with('fail','something went wrong,try again later');
    }


}
    
    function save(Request $request){

     // validate request

        $request ->validate([
        'email'=>'required|email|unique:admins',
        'phone'=>'required|unique:admins',
        'password'=>'required|min:5|max:12' 
        ]);
        //insert data into database
        $admin = new Admin;
        $admin->email =$request->email;
        $admin->phone =$request->phone;
        $admin->password = Hash::make($request->password);
        $save= $admin->save();
    
    if($save){
   return back()->with ('success','news user has been added to the system');
    }
    else{
        return back()->with('fail','something went wrong,try again later');
    }

}
    function check(Request $request){
        $request->validate([
   'phone'=>'required|numeric',
    'password'=>'required|min:5|max:12']);

   $userInfo= Admin::where('phone','=',$request->phone)->first();
  //if no  user with such email is found
    if (!$userInfo) {
       return back()->with('fail','your phone number is not recognised');
    }
    else{
        //check password
        if (Hash::check($request->password,$userInfo->password)) {
            $request->session()->put('LoggedUser',$userInfo->phone);
            return view('lnf.found');
            
        }
        else{
return back()->with('fail','incorrect password');
        }
    }
    }}

