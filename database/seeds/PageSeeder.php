<?php

use Illuminate\Database\Seeder;
use App\Models\BlogPostContent;
use App\Models\BlogPost;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
            $post = factory(BlogPost::class)
                ->make();

            if ($post->save()) {
                $pageContent = factory(BlogPostContent::class)
                    ->make()
                    ->setPost($post)
                    ->save();
            }
        }
    }
}
