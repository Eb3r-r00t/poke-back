<?php

namespace App\Services;

use App\Models\Pokemon;

class DashboardService
{
    public function dashboardData()
    {
       return Pokemon::all();
    }
}
