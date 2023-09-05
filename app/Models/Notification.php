<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Notification extends Authenticatable
{

    protected $table = 'modules';

    protected $fillable = [
        'id',
        'title',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'id', 'id');
    }
}
