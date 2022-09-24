@extends('layouts.helloapp')

@section('title', 'edit')

@section('menubar')
    @parent
    Todo変更ページ
@endsection

@section('content')
    <table>
        <form action="/todos/{{$form->id}}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>content: </th>
                <td><input type="text" name="content" value="{{$form->content}}"></td>
            </tr>
                <th></th>
                <td><input type="submit" value="変更"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2017 hirakawa.
@endsection