<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task ;

class TasksController extends Controller
{
    //
    function __construct(){
        $this->middleware('auth');
    }
    function index() {

        $tasks = Task::all() ;

        return view('tasks.index', ['tasks' => $tasks]) ;

    }
    function show($id){
        $tasks = Task::find($id);
        //select * from where id=$id
        // dd($tasks);
        return view('tasks.show',[
            'tasks' => $tasks
        ]);
    }
    function delete($id){
        $tasks =Task::find($id)->delete();
        return redirect('/tasks');
    }
}
