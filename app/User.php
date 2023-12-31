<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
    'name','first_name','last_name', 'email','adress', 'birthDate', 'specialty', 'image',
    ];
    protected $visible = [
      'id','name','first_name','last_name', 'email','adress', 'birthDate', 'specialty', 'image'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  /*  protected $hidden = [
        'password', 'remember_token','role','valid'
    ];*/
}
