<?php

namespace Deminua\Safenote\Models;

use Illuminate\Database\Eloquent\Model;

class Safen extends Model {

    protected $fillable = [
        'name', 'description',
    ];

    public $timestamps = false;

    #protected $user_id2;

    public function __construct()
    {
        $this->user_id = auth()->user()->id;
    }

    public function safenlogins()
    {
        return $this->morphedByMany('Deminua\Safenote\Models\SafenLogin', 'safengable');
    }

}
