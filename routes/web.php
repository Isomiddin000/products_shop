<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;






Route::get('/', function () {
    // $users = DB::table('users')->get();
    //  $users = DB::table('users')->where('status', 'active')->get();
    // $users = DB::table('users')->where('age', '>', 25)->get();
    // $users = DB::table('users')->orderBy('created_at')->get();
    // $users = DB::table('users')
    // ->orderBy('created_at', 'desc')
    // ->limit(5)
    // ->get();

    // $users = DB::table('users')->insert([
    //     'name' => 'isomididin',
    //         'email' => 'isomididin@gmail.com',
    //         'age' => 48,
    //         'status' => 'active',
    //         'password' => bcrypt('Im poor') 
    // ]);

    // $users = DB::table('users')
    // ->where('id', 1) 
    // ->update([
    //     'name' => 'Isomididin',
    //     'email' => 'Isomiddin@gamil.com',
      
    // ]);
    // DB::table('users')->where('id', 10)->delete();

    return view('welcome',compact('users'));
   

    
});
Route::resource('products', ProductController::class);