<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'descripcion' => $this->faker->sentence(20),
            'imagen' => $this->faker->randomElement([
                '6d7e5f5f-27c9-4b3a-9e3d-cefb0ec90df8.png',
                '796b4bf6-0ceb-4315-b366-f542e2e88fed.jpg',
                '71341c37-84e1-4718-84a5-6ab24a871351.jpg',
                '04835257-1e02-4991-a246-775161490855.jpg',
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '6.jpg',
                '13.jpg',
                '6d7e5f5f-27c9-4b3a-9e3d-cefb0ec90df8.png',
                '796b4bf6-0ceb-4315-b366-f542e2e88fed.jpg',
                '71341c37-84e1-4718-84a5-6ab24a871351.jpg',
                '04835257-1e02-4991-a246-775161490855.jpg',
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '6.jpg',
                '13.jpg',
            ]),

            'user_id' => $this->faker->randomElement([1, 1, 1]),
        ];
    }
}
