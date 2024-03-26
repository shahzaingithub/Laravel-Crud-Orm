<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    public function insert(Request $req){
        $std=new student();
        $std->name=$req->name;
        $std->title=$req->title;
        $std->description=$req->description;
        $std->save();
        return redirect('student');
    }
  
    public function showdata(){
        $std = student::all();
        return view('student', compact('std'));
    }

    public function updatestd(string $id){
        $std = student::find($id);
        return view('updatestudent', compact('std'));
    }


    public function updateins(string $id,Request $req){
        $std=student::find($id);
        $std->name=$req->name;
        $std->title=$req->title;
        $std->description=$req->description;
        $std->save();
        return redirect('student');
    }

    public function delete(string $id){
        $std=student::find($id);
        $std->delete();
        return redirect('student');
    }

}
