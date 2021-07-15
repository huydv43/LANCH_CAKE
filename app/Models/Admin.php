<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuids;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    // use Uuids;

    protected $table = 'admins';

    protected $guarded = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
