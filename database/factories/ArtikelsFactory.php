<?php

namespace Database\Factories;

use App\Models\Artikels;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtikelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artikels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $artikel_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($artikel_name);
        return [
            'name' => $artikel_name,
            'slug' => $slug,
            'short_description'=> $this->faker->text(200),
            'description' => $this->faker->text(1000),
            'editor'=> $this->faker->text(11),
            'status' => $this->faker->numberBetween(100,200),
            'image' => 'artikel-' . $this->faker->unique()->numberBetween(1,22).'.jpg',
            'penulis_id' => $this->faker->numberBetween(1,5),
            'kategory_id' => $this->faker->numberBetween(1,5)
        ];
    }
}

