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

use App\Http\Controllers\DatatablesController;
use App\Post;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $user = App\User::first();
    $user->image()->create(['url'=>'user_image']);

    dd(App\Image::find(2));
});

Route::get('/transaction', function () {

//     DB::beginTransaction();

// try {
//         DB::table('posts')->insert([
//         'title'=>'hello',
//        'body'=>'hello body'
//     ]);

//     DB::table('tags')->insert([
//         'na'=>'hello'
//     ]);

//     DB::commit();
//     // all good
// } catch (\Exception $e) {
//     DB::rollback();
//     // something went wrong
// }
//    DB::transaction(function () {

//     DB::table('posts')->insert([
//         'title'=>'hello',
//        'body'=>'hello body'
//     ]);

//     DB::table('tags')->insert([
//         'nam'=>'hello'
//     ]);

    


    //    Video::create([]);

    //    Post::create([
    //        'title'=>'hello',
    //        'body'=>'hello body'
    //    ]);

//    });
});


Route::get('/ajax',function(Request $request){
return view('gender');
});


Route::post('/ajax',function(Request $request){

        $input = $request->all();

        $gender = $request->gender;

        if($gender == 'male'){
            $gender = 0;
        $users =    User::where('gender',$gender)->get();

        }else if($gender == 'female'){
            $gender = 1;

            $users =    User::where('gender',$gender)->get();
        }else if($gender == 'all'){


            $users =    User::all();
        }



        return response()->json(['success'=>$users]);
 
});
Route::get('css1',function(){
    return view('css/css1');
});

Route::get('datatables', 'DatatablesController@index')->name('get.users');