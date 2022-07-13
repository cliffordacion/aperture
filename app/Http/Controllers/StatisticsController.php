<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StatisticsController extends Controller
{
    public function index()
    {
        $value = Cache::get(Log::getCountryStatCacheKey());

        // If no cache is stored, return an empty json
        // We can add a condition to run the CalculateStatisticsCommand if no value found if needed to return data 
        return response()->json($value);
    }
}
