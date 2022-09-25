@extends('layouts.helloapp')
@section('title', 'Todos')

@section('menubar')
    @parent
    Todos
@endsection

@section('new')
    <a href="/todos/create">新規作成</a>
@endsection

@section('content')
    @if (Auth::check())
        <p>USER: {{$user->name . '(' . $user->email .')'}}</p>
    @else
        <p>※ログインしていません。(<a href="/login">ログイン</a>)｜
        <a href="/regster">登録</a>)</p>
    @endif
    <h1>未完了</h1>
    @foreach ($todos as $item)
        @if ($item->check == 0)
            {{$item->getData()}}
            <form action="todos/{{ $item->id }}/check" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="check" value="{{$item->check}}">
                <button type="submit">完了</button>
            </form>
            <a href="/todos/{{ $item->id }}/edit">変更</a><br><br>
        @endif
    @endforeach
    <h1>完了</h1>
    @foreach ($todos as $item)
        @if ($item->check == 1)
            {{$item->getData()}}
            <form action="todos/{{ $item->id }}/check" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="check" value="{{$item->check}}">
                <button type="submit">戻す</button>
            </form>
            <a href="/todos/{{ $item->id }}/edit">変更</a><br><br>
        @endif
    @endforeach
@endsection

@section('footer')
copyright 2022 hirakawa.
@endsection