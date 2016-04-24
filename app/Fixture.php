<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{        
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class);
    }
}
