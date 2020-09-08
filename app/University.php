<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class University extends Model
{
    use Notifiable;

        protected $guard = 'university';

        public function sendPasswordResetNotification($token)
	    {
	        $this->notify(new UniversityPasswordResetNotification($token));
	    }

        protected $fillable = [
            'email', 'password'
        ];

        protected $hidden = [
            'password' , 'remember_token',
        ];
}
