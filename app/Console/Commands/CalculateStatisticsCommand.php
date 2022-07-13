<?php

namespace App\Console\Commands;

use App\Models\Log;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CalculateStatisticsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculateStatistics:country-logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate logs statistics per country';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {        
        $key = Log::getCountryStatCacheKey();


        $countryStatisticsCached = Cache::rememberForever($key, function() {
            $this->info('DB Hit');
            // Normally I'd place this on a repository class, but to make it simple, I just used the Query builder here
            $countryStatistics = Log::query()
                ->select('params->geolocation->display as country')
                ->addSelect(DB::raw('count(id) as total'))
                ->groupBy('country')
                ->get();

            return $countryStatistics->toArray();
        });

        // We can store this on the database if we need this for a longer period of time and if we do want to track it more consistently
        // For this test purpose, Cache storage is enough
        dump($countryStatisticsCached);
    }
}
