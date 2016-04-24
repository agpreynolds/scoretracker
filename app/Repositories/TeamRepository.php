<?php

namespace App\Repositories;

use App\User;
use App\Team;

class TeamRepository
{
    public function get()
    {        
        return Team::get();
    }
}