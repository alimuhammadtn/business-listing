<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Users');
    }
}
