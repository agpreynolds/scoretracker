<?php

namespace App\Repositories;

use App\User;
use App\Competition;

class CompetitionRepository
{
    public function get()
    {        
        return Competition::get();
    }
}