<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    /**
     * Get the planets of this solar system.
     */
    public function planet()
    {
        return $this->hasMany('App\Planet');
    }

    /**
     * Get the sun of this solar system.
     */
    public function sun()
    {
        return $this->hasOne('App\Sun');
    }


}
