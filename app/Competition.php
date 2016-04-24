<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{    
    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
