<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request) {
        $data = [
            'msg'=>'これはBladeを利用したサンプルです。',
            'id'=>$request->id,
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request) {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、'.$msg.'さん',
        ];
        return view('hello.index', $data);
    }
}
