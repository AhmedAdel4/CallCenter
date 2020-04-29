<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sources extends Model
{
    protected $fillable = [
        'name'
    ];
    public function calles()
    {
        return $this->hasMany(Calls::class);
    }
}
