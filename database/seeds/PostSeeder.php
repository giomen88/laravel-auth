<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Category;
use App\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $category_ids = Category::pluck('id')->toArray();

        for($i = 0; $i < 10; $i++) {
            $new_post = new Post();

            $new_post->title = $faker->text(20);
            $new_post->slug = Str::slug($new_post->title. '-');
            $new_post->content = $faker->paragraphs(2, true);
            $new_post->image = $faker->imageUrl(250, 250);
            $new_post->category_id = Arr::random($category_ids); 
            $new_post->user_id = 5;

            $new_post->save();
        }
    }
}
