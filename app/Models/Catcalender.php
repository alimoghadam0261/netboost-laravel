<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catcalender extends Model
{
    protected $fillable = ['name'];


    public function challenges()
    {
        return $this->hasMany(Catcalender::class, 'catcalender_id');
    }
}
