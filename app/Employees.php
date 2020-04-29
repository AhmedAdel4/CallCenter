<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employees extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email' , 'password'
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function calles()
    {
        return $this->hasMany(Calls::class);
    }
}
