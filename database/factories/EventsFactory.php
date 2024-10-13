<?php

namespace Database\Factories;

use App\Models\organisators;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'location' => fake('hu_HU')->city(),
            'org_id' => organisators::factory()
        ];
    }
}
