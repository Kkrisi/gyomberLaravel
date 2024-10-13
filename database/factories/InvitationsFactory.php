<?php

namespace Database\Factories;

use App\Models\events;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invitations>
 */
class InvitationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => events::factory(),
            'user_id' => User::factory(),
            'appeader' => fake()->boolean()
        ];
    }
}
