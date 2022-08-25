<?php

namespace Database\Factories;
namespace Database\Factories\timestamp;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    // @var string

    protected $model = Product::class;
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
            'kate_id' => mt_rand(1,10),
            'name' => $this->faker->sentence(mt_rand(8,50)),
            'slug' => $this->faker->slug(),
            'small_deskripsi' => $this->faker->sentence(mt_rand(25, 200)),
            'deskripsi' => $this->faker->paragraphs(2, true),
            'original_price' => $this->faker->numberBetween(10000, 50000),
            'selling_price' => $this->faker->numberBetween(51000, 150000),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'qty' => $this->faker->numberBetween(5, 25),
            'tax' => 0,
            'status' => 1,
            'trending' => 1,
            'meta_title' => $this->faker->sentences(2),
            'meta_deskripsi' => $this->faker->sentence(mt_rand(50, 200)),
            'meta_keywords' => $this->faker->sentences(10),
            'created_at' => timestamp(),
            'updated_at' => timestamp(),
        ];
    }
}
