<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
       return view('index');
   }

   public function inscription(request $request){
       
    $member= new users;
    $member->name = $request->name;
    $member->forname = $request->forname;
    $member->email = $request->email;
    $member->programme = $request->programme;
    $member->message = $request->message;
    $member->save();
    
    return redirect('knowledge')->with('post_register', 'votre adhésion a été un succès.');  
}

}