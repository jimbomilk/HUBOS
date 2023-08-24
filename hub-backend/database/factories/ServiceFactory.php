<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //columns: name, description, host, port, protocol, path, enum status.

            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'host' => $this->faker->ipv4(),
            'port' => $this->faker->numberBetween(1, 65535),
            'protocol' => $this->faker->randomElement(['http', 'https']),
            'path' => $this->faker->url(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
