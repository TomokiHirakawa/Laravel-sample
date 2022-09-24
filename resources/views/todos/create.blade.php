@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    Todo作成ページ
@endsection

@section('content')
    <table>
        <form action="/todos" method="post">
            {{ csrf_field() }}
            <tr>
                <th>content: </th>
                <td><input type="text" name="content"></td>
            </tr>
                <th></th>
                <td><input type="submit" value="作成"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2017 hirakawa.
@endsection