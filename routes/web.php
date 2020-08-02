<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    $user = App\User::first();

//    $user->notify(new SubscriptionRenewalFailed);

//    return 'Done';
// });

// Route::get('/', function () {

//    return session('name');
//    session(['name' => 'JohnDoe']);

//    return view('welcome');
// });

// Route::get('/', function(Request $request)) {

// 	return $request->session()->get('foobar');

// 	// return view('welcome');
// });

function flash($message) {

	session()->flash('message', $message);
}

Route::get('/', function(){
	return view('welcome');
});



Route::get('project/create', function(){
	return view('projects.create');
});

Route::post('projects', function() {

	flash('Your project has been created');

	return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
