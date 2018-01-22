<?php

use Illuminate\Database\Seeder;

use Orchid\Platform\Core\Models\Post;
//use Orchid\Platform\Core\Models\Comment;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		$pages = ["demo-page"];
		foreach ($pages as $page) {
			factory(Post::class)->create(['type' => 'page','slug' => $page]);
		}
    }
}
