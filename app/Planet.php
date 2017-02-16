<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    /**
     * Get the sun of this planet.
     */
    public function sun()
    {
        return $this->hasOne('App\Sun');
    }

    /**
     * Get the solar system of this planet.
     */
    public function solar_system()
    {
        return $this->hasOne('App\SolarSystem');
    }
}
