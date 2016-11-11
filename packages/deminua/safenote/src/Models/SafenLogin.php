<?php

namespace Deminua\Safenote\Models;

use Illuminate\Database\Eloquent\Model;

class SafenLogin extends Model
{
    protected $fillable = [
        'address', 'port', 'login', 'pass',
    ];

    public $timestamps = false;
}
