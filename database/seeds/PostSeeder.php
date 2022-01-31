<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            // $post->image = 'post-img/' . $faker->image('storage/app/public/post-img', 640, 480);
            $post->image = $faker->imageUrl();
            $post->title = $faker->sentence();
            $post->subtitle = $faker->sentence(8);
            $post->body = $faker->paragraphs(20, true);
            $post->save();
        }
    }
}