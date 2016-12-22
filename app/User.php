<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = [
         
    ];

      //create mutator in model
      public function setEmailAttribute($value)
      {
        $this->attributes['email'] = strtolower($value);
      }
      public function getEmailAttribute($value)
      {
        return strtoupper($value);
      }

        public function getRouteKeyName(){
            return 'username';
        }
      public function address()
      {
        return $this->hasOne('App\Address');
      }
      public function posts()
      {
        return $this->hasMany('App\Post');
      }

      public function roles()
      {
        return $this->belongsToMany('App\Role','user_roles');
      }
}
