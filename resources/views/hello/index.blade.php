<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <h1>Index</h1>
        <p>{{$msg}}</p>
        <form method="POST" action="/hello">
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>