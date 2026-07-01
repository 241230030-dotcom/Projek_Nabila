<?php

namespace Database\Factories;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedFactory extends Factory
{
    protected $model = Feed::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'statusFeed' => $this->faker->text(120),
            'likeFeed' => $this->faker->numberBetween(500, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}