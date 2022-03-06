<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Taskmodel;

class TaskController extends Controller
  
{

    
    public function storetodo(Request $request){


        $this->validate($request,[
            'task'=>'required|max:100|min:5',
            'ddate'=>'required|min:5',

        ]);

        $taskmodel=new Taskmodel;

        $taskmodel->task=$request->task;
        $taskmodel->ddate=$request->ddate;
        $taskmodel->save();

        $data=Taskmodel::all();
        //dd($data);
        return view('task')->with('taskmodels',$data);

    }

    public function UpdateTaskAsCompleted($id){
        $taskmodel=Taskmodel::find($id);
        $taskmodel->iscompleted=1;
        $taskmodel->save();
        return redirect()->back();
    }

    public function UpdateTaskAsNotCompleted($id){
        $taskmodel=Taskmodel::find($id);
        $taskmodel->iscompleted=0;
        $taskmodel->save();
        return redirect()->back();
    }

    public function deletetask($id){
        $taskmodel=Taskmodel::find($id);
        
        $taskmodel->delete();
        return redirect()->back();
    }

    public function updatetaskview($id){
        $taskmodel=Taskmodel::find($id);

        return view('update')->with('taskdata',$taskmodel);

    }

    public function updatetask(Request $request){
        //dd($request);

        $id=$request->id;
        $task=$request->task;
        $ddate=$request->ddate;
        $data=Taskmodel::find($id);
        $data->task=$task;
        $data->save();

        $datas=Taskmodel::all();

        return view('task')->with('taskmodels',$datas);
    }
}
