<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Regmodel;

class RegisterController extends Controller
{

    public function index(){
        return view('login');
    }

    public function check(Request $request){
        $email=$request->email;
        $Password=$request->Password;

        if (auth()->attempt(array('email' => $email, 'Password' => $Password)))
        {
            return view('task');
        }
        else
        {
            session()->flash('error','Invalid Credentials');
            return redirect()->route('login');
        }
    }


    public function store(Request $request){


        $this->validate($request,[
            'fname'=>'required|max:100|min:1',
            'lname'=>'required|max:100|min:1',
            'contact'=>'required|max:100|min:10',
            'email'=>'required|max:100|min:5',
            'Password'=>'required|max:50|min:5',

        ]);

        $regmodel= new Regmodel;

        $regmodel->fname=$request->fname;
        $regmodel->lname=$request->lname;
        $regmodel->contact=$request->contact;
        $regmodel->email=$request->email;
        $regmodel->Password=$request->Password;
        $regmodel->save();

        return view('login');
    }
}
