<?php

namespace Database\Factories;

use App\Models\DaftarAnime;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarAnimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DaftarAnime::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,10)),
            'genre' => $this->faker->sentence(mt_rand(2,10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(5)),
            'body' => collect($this->faker->paragraphs(mt_rand(4,8)))->map(fn($p) => "<p class='indents'>$p</p>")->implode(''),
            'user_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,5)
        ];
    }
}
