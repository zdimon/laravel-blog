<?php

use Illuminate\Database\Seeder;
use App\Page;
class PageSeeder extends Seeder
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
        Page::truncate();
        foreach($data->pages as $item){
            echo "Inserting ".$item->title."\n";
            DB::table('page')->insert([
                'title' => $item->title,
                'alias' => $item->alias,
                'content' => $item->content,
                'image' => $item->image
            ]);
            $file_path = base_path().'/fixture-data/images/pages/'.$item->image;
            $destination = base_path().'/public/storage/pages/'.$item->image;
            \File::copy($file_path,$destination);
        }

    }
}
