<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    public $timestamps = false;

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
