<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    // Allow users to custom their own fields
    protected $fillable = [
        "name",
        "email",
        "password",
    ];
}
