<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $fillable = ['content', 'catcalender_id','title'];

    public function category()
    {
        return $this->belongsTo(Catcalender::class, 'catcalender_id');
    }
}
