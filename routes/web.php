<?php

use App\Models\City;
use App\Models\Comment;
use App\Models\Room;
use App\Models\User;
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
//    $results = DB::table('users')->whereExists(function ($query) {
//        $query->select('id')->from('reservations')->whereRaw('reservations.user_id=users.id')->where('check_in', '=', '2020-05-30')->limit(1);
//    })->get();
//    dump($results);

//    Result: select * from `comments` limit 3 offset 0
//    $result = DB::table('comments')->paginate(3);
//    dump($result);

//    Result: select * from `comments` where `content` like '%Voluptatem%'
//    $result = DB::table('comments')->where("content", 'like',"%Voluptatem%")->get();
//    dump($result);

    //    Result: elect * from `comments` where content LIKE '%Voluptatem%'
//    $result = DB::table('comments')->whereRaw("content LIKE '%Voluptatem%'")->get();
//    dump($result);

//    $result = DB::table('comments')->selectRaw('count(user_id) as number_of_comments, users.name')
//        ->join('users', 'users.id', '=', 'comments.user_id')->groupBy('user_id')->get();
//    dump($result);

//    Result: select * from `users` order by `name` desc
//    $result = DB::table('users')->orderBy('name', 'desc')->get();
//    dump($result);

    //    Result: select * from `users` order by `name` desc
//    $result = DB::table('comments')->selectRaw('count(id) as num_of_5stars_comments, rating')
//        ->groupBy('rating')->having('rating', '=', 5)->get();
//    dump($result);

//    Result: select * from `reservations` where `room_id` = 1
//    $room_id = 1;
//    $result = DB::table('reservations')->when($room_id, function ($query, $room_id) {
//        return $query->where('room_id', $room_id);
//    })->get();
//    dump($result);

//    Result: select * from `rooms` order by `room_number` asc
//    $sortBy = 'room_number';
//    $result = DB::table('rooms')->when($sortBy, function ($query, $sortBy) {
//        return $query->orderBy($sortBy);
//    })->get();
//    dump($result);

//    $result = DB::table('comments')->orderBy('id')->chunk(2, function ($comments) {
//        foreach ($comments as $comment) {
//            if ($comment->id == 5) return false;
//        }
//    });

//    Result: select * from `reservations` inner join `rooms` on `reservations`.`room_id` = `rooms`.`id` inner join `users` on `reservations`.`user_id` = `users`.`id` where `rooms`.`id` > 3 and `users`.`id` > '1'
//    $result = DB::table('reservations')
//        ->join('rooms', 'reservations.room_id', '=', 'rooms.id')
//        ->join('users', 'reservations.user_id', '=', 'users.id')
//        ->where('rooms.id', '>', 3)
//        ->where('users.id', '>', '1')
//        ->get();
//    dump($result);

//  Result: select * from `rooms` where `room_size` = 3
//    Room::get(); get all records
//    Room::all(); get all records, common way
//    $result = Room::where('room_size', 3)->get();
//    dump($result);

//    Result: select * from `rooms` where `price` < 400
//    $result = Room::where('price', '<', 400)->get();
//    dump($result);

//    Result: select `users`.*, (select `rating` from `comments` where `user_id` = `users`.`id` order by `rating` asc limit 1) as `worst_rating` from `users` where `name` = 'email'
//    $result = User::where('name', 'email')->addSelect(['worst_rating' => Comment::select('rating')
//        ->whereColumn('user_id', 'users.id')->orderBy('rating', 'asc')->limit(1)])->get();
//    dump($result);

//    $result = User::find(1);
//    dump($result->address);

//    select * from `users` where `users`.`id` = 1 limit 1
//    select * from `comments` where `comments`.`user_id` = 1 and `comments`.`user_id` is not null
//    $result = User::find(1);
//    dump($result->comments);

//    select * from `cities` where `cities` . `id` = 1 limit 1
//    select `rooms` .*, `city_room` . `city_id` as `pivot_city_id`, `city_room` . `room_id` as `pivot_room_id` from `rooms` inner join `city_room` on `rooms` . `id` = `city_room` . `room_id` where `city_room` . `city_id` = 1
    $result = City::find(1);
    dump($result->rooms);
    return view('welcome');
});
