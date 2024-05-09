<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//This is what i added at the new commit
// testing new branch
Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
});

Route::get('/admin', function (){
    return view('admin.dashboard');
});

Route::get('/login', function (){
    return view('admin.login');
});

Route::get('/admin/votes', function (){
    return view('admin.votes');
}); 

Route::get('/admin/voters', function (){
    return view('admin.voters');
}); 

Route::get('/admin/positions', function (){
    return view('admin.positions ');
}); 

Route::get('/admin/candidates', function (){
    return view('admin.candidates');
}); 

Route::get('/admin/ballots', function (){
    return view('admin.ballots');
}); 
