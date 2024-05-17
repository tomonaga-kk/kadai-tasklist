<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status_list = ['未着手', '対応中', '完了'];
        
        return [
            'user_id' => rand(1, 10),
            'content' => $this->faker->realText(50),
            'status' => $status_list[array_rand($status_list)],
        ];
    }
}
