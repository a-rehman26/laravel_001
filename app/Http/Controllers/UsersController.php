<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('users')->where('u_age', '>=', 30)->get();
        // return $users;
        // dd($users);
        // dump and dd diff is after dd your code don't show  below in web page but in dump work
        // dump($users);
        return view('users.getUsers', ['data' => $users]);
    }
}
