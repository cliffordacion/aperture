<?php

namespace Database\Factories;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LogFactory extends Factory
{

    protected $model = Log::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'params' => [
                "mobileMode" => true,
                "to Search" => [
                    "url" => fake()->url(),
                    "name" => fake()->sentence(3),
                ],
                "geolocation" => [
                    "display" => fake()->country(),
                    "language" => [
                        "lang" => "en-GB",
                        "accept-language" => "en-GB,en-US;q=0.8,en;q=0.6"
                    ],
                    "timezone" => 0,
                    "mobile" => [
                        "android" => 50,
                        "ios" => 50
                    ],
                    "countryCode" => "gb",
                    "region" => "all",
                    "city" => "all"
                ]
            ],
            'position' => fake()->unique()->randomNumber(5),
            'ended_at' => Carbon::now(),
            'ended_date' => Carbon::now()->format('Y-m-d')
        ];
    }
}
