<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_city','user_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function files(){
        return $this->hasMany('App\Files');

    }

    public function invoices(){
        return $this->hasMany('App\Invoices');

    }

    public function emails(){
        return $this->hasMany('App\Emails');

    }

    public function isAdmin(){

        if($this->role_id=='1'){
            return true;
        }

        return false;
    }
    public function isClient(){

        if($this->role_id=='0'){
            return true;
        }

        return false;
    }




}
