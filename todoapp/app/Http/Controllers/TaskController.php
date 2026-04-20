<?php

namespace App\Http\Controllers;
use App\Models\Task;
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
    public function index(){
        return "task 32 by controller";
    }

    public function store32(Request $request){
        return "task 32 stored by controller";
    }

    public function index33()
{
    $tasks = ['Buy Milk', 'Do Laundry', 'Study Laravel'];
    return view('task33', compact('tasks'));
}
public function create34()
{
    return view('task34');
}
public function store35(Request $request)
{
    $tasks = session()->get('tasks', []);
    $tasks[] = $request->title;
    session()->put('tasks', $tasks);
    return redirect()->back()->with('success', 'Task added!');
}

public function store36(Request $request)
{
    $request->validate(['title' => 'required']);
    return redirect()->back()->with('success', 'Task added!');
}
public function show37($id)
{
    $tasks = ['Buy Milk', 'Do Laundry', 'Study Laravel'];
    return view('task37', compact('id', 'tasks'));
}
public function store45(Request $request)
{
    $request->validate(['title' => 'required', 'description' => 'required']);
    Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'status' => 'pending',
         'user_id' => 1
    ]);
    return redirect()->back()->with('success', 'Task saved to DB!');
}
public function index46()
{
    $tasks = Task::all();
    return view('task46', compact('tasks'));
}
public function edit47(Task $task)
{
    return view('task47', compact('task'));
}

public function update47(Request $request, Task $task)
{
    $task->update([
        'title' => $request->title,
        'description' => $request->description
    ]);
    return redirect('/task46')->with('success', 'Task updated');
}
public function destroy48(Task $task)
{
    $task->delete();
    return redirect('/task46')->with('success', 'Task deleted!');
}
}
