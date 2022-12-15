<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Games;

class GamesController extends Controller
{
    public function creategame()
    {
        $user=User::create([
            'name'=>"User one",
            'email'=>'userone@gmail.com',
            'password'=>'123456'
        ]);

        $user->games()->create([
            "user_id"=>$user->id,
            "game"=>"Football league",
            "level"=>"EPL",
            "continent"=>"Europe"
        ]);
    }
    public function getgames()
    {
        $games=Games::all();
        return view("games.epl", compact("games"));
    }
}
