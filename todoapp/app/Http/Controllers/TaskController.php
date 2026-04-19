<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(){
        return "task stored using controller";
    }
    public function store25(Request $request){
        $request->validate(['title'=>'required']);
        return "task stored using validation";
    }
     public function store26(Request $request){
        $request->validate(['title'=>'required']);
        return "task stored using validation and error title";
    }
    public function store27(Request $request){
        $request->validate(['title'=>'required',
        'description'=>'required']);
        return "task stored using validation and error all";
    }
     public function store28(Request $request){
        $request->validate(['title'=>'required',
        'description'=>'required']);
        return "task stored using any error";
    }
    public function store29(Request $request){
        $request->validate(['title'=>'required','description'=>'required']);
        session()->flash('success','Task added successfully');
        return redirect()->back();  
    }
    public function store30(Request $request){
        $request->validate(['title'=>'required','description'=>'required']);
        session()->flash('success','added task with help of 30');
        return redirect()->back();
    }
}
