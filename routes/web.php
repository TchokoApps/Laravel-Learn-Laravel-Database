<?php

use Illuminate\Support\Facades\Route;

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
//    $result = DB::select('select * from users where id = ? and name = ?', [1, 'charles']);
//    DB::table('users')->select()->get();
//    dump($result);


//    Result: select * from `users`
//    $users = DB::table('users')->get();
//    dump($users);

//    Result: select `email` from `users`
//    $users = DB::table('users')->pluck('email');
//    dump($users);

//    Result: select * from `users` where `name` = 'Dr. Dillon Marvin' limit 1
//    $users = DB::table('users')->where('name','Dr. Dillon Marvin')->first();
//    dump($users);

//    Result: select `email` from `users` where `name` = 'Dr. Dillon Marvin' limit 1
//    $users = DB::table('users')->where('name', 'Dr. Dillon Marvin')->value('email');
//    dump($users);

//    Result: select distinct `user_id` from `comments`
//    $results = DB::table('comments')->select('user_id')->distinct()->get();
//    dump($results);

//    Result: select count(*) as aggregate from `comments`
//    $results = DB::table('comments')->count();
//    dump($results);

//    Result: select max(`user_id`) as aggregate from `comments`
//    $results = DB::table('comments')->max('user_id');
//    dump($results);

//    Result: select sum(`user_id`) as aggregate from `comments`
//    $results = DB::table('comments')->sum('user_id');
//    dump($results);

    //    Result: select exists(select * from `comments` where `content` = 'test') as `exists`
//    $results = DB::table('comments')->where('content', 'test')->exists();
//    dump($results);

    //    Result: select * from `rooms` where `price` < 200
//    $results = DB::table('rooms')->where('price', '<', 200)->get();
//    dump($results);

    //    Result: select * from `rooms` where (`room_size` = '2' and `price` < '400')
//    $results = DB::table('rooms')->where([['room_size', '2'], ['price', '<', '400']])->get();
//    dump($results);

    //    Result: select * from `rooms` where `room_size` = '2' or `price` < '40'
//    $results = DB::table('rooms')->where('room_size', '2')->orWhere('price', '<', '40')->get();
//    dump($results);

    //    Result: select * from `rooms` where `price` < '400' or (`room_size` > '1' and `room_size` < '4')
//    $results = DB::table('rooms')->where('price', '<', '400')->orWhere(function ($query) {
//        $query->where('room_size', '>', '1')->where('room_size', '<', '4');
//    })->get();
//    dump($results);

    //    Result: select * from `rooms` where `room_size` between 1 and 3
//    $results = DB::table('rooms')->whereBetween('room_size', [1, 3])->get();
//    dump($results);

    //    Result: select * from `rooms` where `id` not in (1, 2, 3)
//    $results = DB::table('rooms')->whereNotIn('id', [1, 2, 3])->get();
//    dump($results);

    //    Result: select * from `users` where exists (select `id` from `reservations` where reservations.user_id=users.id and `check_in` = '2020-05-30' limit 1)
    $results = DB::table('users')->whereExists(function ($query) {
        $query->select('id')->from('reservations')->whereRaw('reservations.user_id=users.id')->where('check_in', '=', '2020-05-30')->limit(1);
    })->get();
    dump($results);


    return view('welcome');
});
