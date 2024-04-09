<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class teamController extends Controller
{
    //
    public function getAllTeam(){
        return (Team::all());
    }
}
