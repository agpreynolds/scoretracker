<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
