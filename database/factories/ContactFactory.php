<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory for generating fake Contact data for testing and seeding.
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            // Generate a fake name
            'name' => $this->faker->name(),
            // Generate a unique 9-digit contact number
            'contact' => $this->faker->unique()->numerify('#########'),
            // Generate a unique safe email
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
