<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challeng extends Model
{
    protected $fillable = ['content', 'challengcat_id','title'];

    public function category()
    {
        return $this->belongsTo(Challengcat::class, 'challengcat_id');
    }

}
