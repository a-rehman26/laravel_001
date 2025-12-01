<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function Home()
    {
        return view('controllersFiles.home');
    }

    public function Users(string $id)
    {
        // return view('controllersFiles.users', compact('id'));
        return view('controllersFiles.users', ['id' => $id]);
    }
}
