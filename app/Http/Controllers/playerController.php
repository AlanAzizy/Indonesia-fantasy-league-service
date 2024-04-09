<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class playerController extends Controller
{
    //
    public function getAllPlayer(){
        return (Player::all());
    }
}
