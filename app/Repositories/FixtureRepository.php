<?php

namespace App\Repositories;

use App\User;
use App\Fixture;

class FixtureRepository
{
    public function get()
    {        
        return Fixture::get();
    }
}