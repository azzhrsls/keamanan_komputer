<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Akun as Authenticatable;


class Akun extends Authenticatable
{
    public $table = 'akuns';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
}
