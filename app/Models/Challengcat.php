<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challengcat extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function challenges()
    {
        return $this->hasMany(Challeng::class, 'challengcat_id');
    }
}
