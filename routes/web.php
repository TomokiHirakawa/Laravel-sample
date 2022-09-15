<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| プロジェクトのファイルを全検索かけたらRouteServiceProvider.phpのboot()に
| $this->namespaceを'routes/web.php'に設定している箇所があるんですが、
| この$namespaceの宣言がコメントアウトになっていて、'App\Http\Controllers'が設定されていました。
| コメントを外したら、パスなしのコントローラー名だけで行けるようになりました。
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
Route::post('/hello', 'HelloController@post');