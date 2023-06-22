<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    public function index()
    {
        $todos=Todo::orderByDesc("id")->get();
        return view("welcome", compact("todos"));
    }

    public function store(Request $request){
        $data = $request->all();
        if (!$data["todo"]){
           return redirect()->back()->withErrors(['message' => 'Informe o nome da tarefa.']);
        }

        Todo::create([
            "name" => $data["todo"],
            "status" => false
        ]);
        return redirect('/');
    }

    public function show($id){
        $todos = Todo::find($id);
        return view('edit', ['task' => $todos]);
    }


    public function update(Request $request, $id ){
        
        $todos = Todo::find($id);
        Todo::find($id)->update(["status" => ($todos->status == 0 ? 1 : 0)]);
        return redirect('/');
    }   

    public function destroy($id){
        Todo::findOrFail($id)->delete();

        return redirect('/');
    } 
}