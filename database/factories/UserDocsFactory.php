<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDocs>
 */
class UserDocsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            [
                'name'=> $this->faker->unique()->name(),
                'path'=> $this->faker->unique()->filePath()
            ]
        ];

        return [
            'type' => $this->faker->unique()->company(),
            'user_id' => User::factory(),
            'files' => json_encode($data),
        ];
    }
}
