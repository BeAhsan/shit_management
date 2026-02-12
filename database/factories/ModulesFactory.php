<?php

namespace Database\Factories;

use App\Models\Modules;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModulesFactory extends Factory
{
    protected $model = Modules::class;

    public function definition(): array
    {
        return [
            'module_name' => $this->faker->unique()->word(),
            'module_prefix' => $this->faker->unique()->lexify('???'),
            'is_active' => $this->faker->boolean(),
            'is_landing_dashboard' => $this->faker->boolean(),
        ];
    }
}
