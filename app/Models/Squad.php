<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    protected $table = "squad";
    protected $primary_key = "user_id,player_id";
    
    protected $connection = 'mysql';
}
