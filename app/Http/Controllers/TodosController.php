<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index(Request $request)
    {
        // ログインチェック
        $user = Auth::user();
        $todos = Todo::all();
        $param = [
            'todos' => $todos,
            'user' => $user,
        ];
        return view('todos.index', $param);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    // public function post(HelloRequest $request)
    // {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['msg'=>'正しく入力されました！']);
    // }

    public function create(Request $request)
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/todos');
    }

    public function check(Request $request, $id)
    {
        if ($request->check == 0)
        {
            // $param = [
            //     'check' => 1,
            // ];
            $check = 1;
        }
        else
        {
            // $param = [
            //     'check' => 0,
            // ];
            $check = 0;
        }
        // DB::table('todos')
        //     ->where('id', $id)
        //     ->update($param);
        $todo = Todo::find($id);
        $todo->check = $check;
        $todo->save();
        return redirect('/todos');
    }

    public function edit($id)
    {
        // $item = DB::table('todos')->where('id', $id)->first();
        $todo = Todo::find($id);
        return view('todos.edit', ['form' => $todo]);
    }

    public function update(Request $request, $id)
    {
        // $param = [
        //     'content' => $request->content,
        // ];
        // DB::table('todos')
        //     ->where('id', $request->id)
        //     ->update($param);
        $this->validate($request, Todo::$rules);
        $todo = Todo::find($id);
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/todos');
    }

    // public function del(Request $request)
    // {
    //     $item = DB::table('people')->where('id', $request->id)->first();
    //     return view('hello.del', ['form' => $item]);
    // }

    // public function remove(Request $request)
    // {
    //     DB::table('people')->where('id', $request->id)->delete();
    //     return redirect('/hello');

    public function getAuth(Request $request)
    {
        $param = [
            'message' => 'ログインして下さい。'
        ];
        return view('todos.auth', $param);
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}