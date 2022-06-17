<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $post_type = $this->faker->randomElement([
            Post::TYPE_ARTICLE,
            Post::TYPE_RECIPE,
        ]);

        if ($post_type === Post::TYPE_ARTICLE) {
            $body = $this->faker->paragraphs(3, true);
        } else {
            $body = $this->faker->paragraphs(5, true);
        }

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $body,
            'post_type' => $post_type,
            'user_id' => 1,
            'image' => "https://picsum.photos/400/250",
            'image_thumb' => "https://picsum.photos/400/250/?blur=2",
            'bg_code' => 'blue',
        ];
    }
}
