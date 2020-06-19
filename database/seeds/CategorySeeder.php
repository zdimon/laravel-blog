<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
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
        DB::table('category')->delete();
        foreach($data->categories as $item){
            echo "Inserting ".$item->name."\n";
            DB::table('category')->insert([
                'name' => $item->name
            ]);
        }
    }
}
