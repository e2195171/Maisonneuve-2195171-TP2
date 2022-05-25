<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ForumArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ForumArticle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, 
            'body' => $this->faker->paragraph(30),
            'user_id' => User::factory()
        ];
    }
}
