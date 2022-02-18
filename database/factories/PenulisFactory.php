<?php

namespace Database\Factories;

use App\Models\Penulis;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
class PenulisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penulis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $penulis_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($penulis_name);
        return [
            'name' =>$penulis_name,
            'slug' =>$slug
        ];
    }
}
