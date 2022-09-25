@extends('layouts.helloapp')

@section('title', 'show')

@section('menubar')
    @parent
    Todo詳細ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>id: </th>
            <td>{{$todo->id}}</td>
        </tr>
        <tr>
            <th>content: </th>
            <td>{{$todo->content}}</td>
        </tr>
    </table>
    <form action="/todos/{{ $todo->id }}" method="post">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit">削除</button>
    </form>
@endsection

@section('footer')
    copyright 2017 hirakawa.
@endsection