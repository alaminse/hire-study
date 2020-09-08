<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Model
{
    use Notifiable;

        protected $guard = 'student';

        public function sendPasswordResetNotification($token)
	    {
	        $this->notify(new StudentPasswordResetNotification($token));
	    }

        protected $fillable = [
            'email', 'password'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
