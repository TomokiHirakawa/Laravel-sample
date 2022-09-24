<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
Route::post('/hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

// Route::get('/todos', 'TodosController@index');

// Route::get('todos/add', 'TodosController@add');
// Route::post('todos/add', 'TodosController@create');

Route::post('todos/{id}/check', 'TodosController@check');

// Route::get('todos/edit/{id}', 'TodosController@edit');
// Route::post('todos/edit', 'TodosController@update');

Route::resource('todos', 'TodosController');