<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resetTokens extends Model
{
      protected $fillable = [
        'token',
        'userId',
        'name'
    ];
}
