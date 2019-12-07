<?php

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

Route::get('/', function () {
    return view('welcome');
});

//**********middleware***************
// Route::get('/','PostController@api')->middleware('check_token');
// Route::post('/login','PostController@api')->middleware('check_token');
// Route::get('/login',function(){
// 	return view('login');
// });

Route::get('diem','myController@diem')->middleware('checkdiem')->name("diem");
Route::get('loi',function(){
	echo "chua co diem";
})->name('loi');
Route::get('nhapdiem','myController@nhapdiem');
Route::post('nhapdiem','myController@nhapdiem')->name('nhapdiem');
// *******SESSION**********

Route::get('insert',function(){
	$user=new App\user();
	$user->name='ngoc anh';
	$user->email='anh@gmail.com';
	$user->password='anh123';
	$user->save();
	echo "da save.";
});
route::get('query',function(){
	$user=App\User::where('id',2)->get()->toArray();
	foreach ($user as $value) {
		# code...
		echo $value['name'];
		echo "<br>";
		echo $value['email'];
	}
	
	
});
Route::get('insert_posts',function(){
	$post=new App\ModelPosts();
	$post->title ="hoc laravel";
	$post->content="day la noi dung cua khoa hoc laravel";
	$post->save();
	echo "da save hoc laravel";
});
Route::get('lienket',function(){
	$data=App\user::find(1)->posts->toArray();
	var_dump($data);
});
Route::get('themcot',function(){
	Schema::table('posts',function($table){
		$table->integer('user_id')->after('content');
	});
});


//********** bai tap ************
Route::get('login','LoginController@dangnhap');
Route::get('trangchu',function(){
	return view('trangchu');
});
Route::post('login','LoginController@login')->name('login');
Route::get('dangky','LoginController@dangky');

//*********validation*************
Route::get('check','ValController@check')->name('show');
Route::post('check','ValController@checknam')->name('check');
Route::post('checka','ValController@validateyear')->name('checknam');
// Route::get('nam',);