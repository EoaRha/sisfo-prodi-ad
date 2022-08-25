<?php

namespace Database\Factories;
namespace Database\Factories\timestamp;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    // @var string

    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        // function imageUrl(
        //     int $width = 640,
        //     int $height = 480,
        //     ?string $category = null,  used as text on the image 
        //     bool $randomize = true,
        //     ?string $word = null,
        //     bool $gray = false
        // ): string;

        static $number = 1;

        return [
            'id' => $number++,
            'name' => $this->faker->sentence(mt_rand(4,12)),
            'slug' => $this->faker->slug(),
            'deskripsi' =>$this->faker->paragraph(mt_rand(5,10)),
            'status' => 1,
            'popular' => 1,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'meta_title' => $this->faker->sentences(2),
            'meta_deskripsi' => $this->faker->sentence(mt_rand(50, 200)),
            'meta_keywords' => $this->faker->sentences(10),
            'created_at' => timestamp(),
            'updated_at' => timestamp(),
        ];
    }
}
