<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    
});
Route::get('/about', function () {
    return view('about');
    
});
Route::get('/contact', function () {
    return view('contact');
    
});
Route::get('/projects', function () {
    return view('projects');
    
});
Route::get('/services', function () {
    return view('services');
    
});
Route::get('/work', function () {
    return view('work');
    
});