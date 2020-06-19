<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path().'/fixtures.json';
        $content = file_get_contents($path);
        $data = json_decode($content);
        Post::truncate();
        foreach($data->posts as $item){
            echo "Inserting ".$item->title."\n";
            $cat = DB::table('category')->where('name', $item->category)->first();
            
            DB::table('post')->insert([
                'title' => $item->title,
                'content' => $item->content,
                'image' => $item->image,
                'category_id' => $cat->id
            ]);
        }
    }
}
