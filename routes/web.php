<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('about', function () {
    $name = 'Ahmad';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }

    //3 طرق لارسال متغير
    // return view('about',['name' => $name]);
    //return view('about')->with('name', $name);
    return view('about', compact('name'));
});

Route::get('about', function () {
    $name = 'Ahmad';
    
    return view('about', compact('name'));
});

Route::get('tasks', function(){
    $tasks = ['Task1', 'Task2', 'Task3'];

    return view('tasks', compact('tasks'));
});