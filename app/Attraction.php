<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = ['name'];

    public function service() {
        return $this->morphMany('App\Service', 'serviceable');
    }
}
