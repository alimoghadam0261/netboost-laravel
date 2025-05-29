<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoryimage extends Model
{
    protected $fillable = ['name', 'parent_id'];


    public function parent()
    {
        return $this->belongsTo(Categoryimage::class, 'parent_id');
    }


    public function children()
    {
        return $this->hasMany(Categoryimage::class, 'parent_id');
    }
}
