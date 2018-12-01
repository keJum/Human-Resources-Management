<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password' ,'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * one-to one с таблице developer
     */
    public function developer(){
        return $this->hasOne('App\Developer');
    }
    /**
     * one to many с таблицей task
     */
    public function task(){
        return $this->hasMany('App\Task');
    }

    /**
     * Возращаем роль 
     */
    public function hasRole($role)
    {
        return User::where('role', $role)->get();
    }
}
