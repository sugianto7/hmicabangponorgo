<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
class KategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kategori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kategori_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($kategori_name);
        return [
            'name' =>$kategori_name,
            'slug' =>$slug
        ];
    }
}
