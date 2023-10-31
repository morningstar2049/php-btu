<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $quizName = "test";
    $photo = "https://media.istockphoto.com/id/1332502196/vector/quiz-in-comic-pop-art-style-quiz-brainy-game-word-vector-illustration-design.jpg?s=612x612&w=0&k=20&c=q0dfOCpzcSMf6ZKbFKYYHEcocNMzz57nvHoD8xBf3UU=";
    $status = "active";
    $data = [
        ["quizName" => $quizName,
        "photo" => $photo,
        "status" => $status],
    ];
    return view("home", compact('data'));
});

Route::get("/name", function(){
    return "Vakho";
});

Route::get("/lastname", function() {
    return "Daraselia";
});

Route::get("/age", function(){
    return "23";
});

Route::get("/hobby", function(){
    return "Watching sports";
});

Route::get("/occupation", function(){
    return "React.js Developer";
});

Route::post("/post", function(){
    $array = ["message" => "წარმატებით დაემატა"];
    return response()->json($array);
});

Route::put("/put", function() {
    $array = ["message" => "წარმატებით განახლდა"];
    return response()->json($array);
});

Route::delete("/delete", function() {
    $array = ["message" => "წარმატებით წაიშალა"];
    return response()->json($array);
});