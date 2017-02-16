<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sun extends Model
{
    /**
     * Get the planets of this sun.
     */
    public function planet()
    {
        return $this->hasMany('App\Planet');
    }

    /**
     * Get the solar system of this sun.
     */
    public function solar_system()
    {
        return $this->hasOne('App\SolarSystem');
    }
}
