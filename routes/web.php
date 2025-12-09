<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\testController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

// parameter routing
Route::get('/test_page/{id?}/{comment?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>id is: " . $id . " " . $comment . " </h1>";
    } else {
        return "<h1> No id found </h1>";
    }
    // return view('testing');
})->whereNumber('id')->whereAlphaNumeric('comment');

// 2nd way routing
// 1st route name 2nd view file name 
// Route::view('test_page', '/testing');

Route::get('/nested/test_page01', function () {
    return view('test01');
    // return "<h1>Hello page 2 </h1>";
});

// named routing
Route::get('/pages/About-US', function () {
    return view('about');
})->name('about_page');


// if user saved my website page name xyz and in future i change me file name xyz1 then used redirect function
// 301 permanent redirect for seo purpose 302 port for temp 
Route::get('/re-direct', function () {
    return view('redirect');
});

Route::redirect('/re_direct', '/re-direct');


// group routes
Route::prefix('pages')->group(function () {
    Route::get('/product_page01', function () {
        return view('product_page01');
    })->name('product_page1');

    Route::get('/product_page02', function () {
        return view('product_page02');
    })->name('product_page2');
});


// if any files not found then custom page error handling 

// Route::fallback(function () {
//     return "<h1>Page Not Found<h1>";
// });

// blade template 01 practice file route 
Route::get('/blade_template', function () {
    return view('blade_template01');
});


// include file work 
Route::get('/home', function () {
    return view('home');
})->name('Home_Page');

Route::redirect('xyz', '/home');


// extend yield section 
Route::prefix('/web_pages')->group(function () {
    Route::get('/Home', function () {
        return view('pages.home');
    })->name('Home_Page01');
    Route::get('/About', function () {
        return view('pages.about');
    })->name('About_Page01');
    Route::get('/Contact', function () {
        return view('pages.contact');
    })->name('Contact_Page01');
});


// data route to view pass ways 

// Route::get('data_route_to_view', function () {
//     return view('route_to_view_data', ['name' => 'Ali', 'age' => 22]);
// });

// Route::get('data_route_to_view', function () {
//     return view('route_to_view_data')
//         ->with('name', 'Ali')
//         ->with('age', 25)
//     ;
// });

function users()
{
    return [
        ["id" => 1, "name" => "Alice", "age" => 25, "city" => "New York"],
        ["id" => 2, "name" => "Bob", "age" => 30, "city" => "Los Angeles"],
        ["id" => 3, "name" => "Charlie", "age" => 22, "city" => "Chicago"],
        ["id" => 4, "name" => "Diana", "age" => 28, "city" => "Houston"]
    ];
}

Route::get('data_route_to_view', function () {
    $names = users();
    return view('route_to_view_data', ['data' => $names]);
});

Route::get('users{id}', function ($id) {
    $getUsers = users();
    abort_if(!isset($getUsers[$id]), 404);
    $user = $getUsers[$id];
    // return "<h1>User id is: </h1>" . $id;
    return view('Show_users', ['id' => $user]);
})->name('show_users');

// controllers 

// Route::get('/Controller/home', [UserController::class, 'Home'])->name('/Controller/home');
// Route::get('/Controller/users', [UserController::class, 'Users'])->name('/Controller/users');

// 2nd way 

Route::controller(UserController::class)->group(function () {
    Route::get('/Controller/home', 'Home')->name('Controller_Home');
    Route::get('/Controller/users/{id?}', 'Users')->name('Controller_Users');
});

// invoke class and methods auto call when class call method also call
Route::get('/invoke_test01', testController::class);
Route::get('/invoke_test02', [testController::class, 'test']);

// routes for controller model get data 

Route::get('/showUsers', [UsersController::class, 'showUsers']);
