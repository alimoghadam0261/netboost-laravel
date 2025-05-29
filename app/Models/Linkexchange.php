<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linkexchange extends Model
{
    protected $fillable = ['name', 'content','img','category','social','user_id'];
}
