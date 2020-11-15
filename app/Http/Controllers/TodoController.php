<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Carbon;



class todoController extends Controller
{
   public function alltodo(){

    $todos=todo::latest()->paginate(5);
     return view('admin.todo.index', compact('todos'));
   }

   public function Edit($id){

    $todos=todo::find($id);
     return view('admin.todo.edit', compact('todos'));
   }
   public function delete($id){

    $delete=todo::find($id)->forcedelete();
    return redirect()->back()->with('success','todo deleted successfuly') ;
   }

   public function Update(Request $request, $id){

    $update=todo::find($id)->Update([
        'todo_desc'=>$request->todo_desc,
        
        
    ]);
    
    return redirect()->route('all.todo')->with('success','todo updated successfuly') ;  
   }


   public function addtodo(Request $request){
       $validatedData=$request->validate([
           'todo_desc'=>'required'
       ]);

       todo::insert([
           'todo_desc'=>$request->todo_desc,
           'created_at'=>carbon::now()
           
       ]);
return redirect()->back()->with('success','todo added successfuly') ;   
    
}
}
