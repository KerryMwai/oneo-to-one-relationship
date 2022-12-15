<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;



Route::get("/",[GamesController::class, "getgames"])->name("games");
Route::get("/creategame",[GamesController::class, "creategame"])->name("creategame");
