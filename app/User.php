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

    public function add($username,$password,$fullname,$phonenumber,$email)
    {
        $this->username=$username;
        $this->password=$password;
        $this->fullname=$fullname;
        $this->phonenumber=$phonenumber;
        $this->role=0;
        $this->email=$email;
        $this->save();
    }

    public function edit($password,$fullname,$phonenumber,$email)
    {
        $this->password=$password;
        $this->fullname=$fullname;
        $this->phonenumber=$phonenumber;
        $this->email=$email;
        $this->update();
    }
}
