<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('comics');
        
        for($i=0; $i<count($data); $i++){
            $new_comic = new Comic;
            $new_comic->title = $data[$i]['title'];
            $new_comic->thumb = $data[$i]['thumb'];
            $new_comic->description = $data[$i]['description'];
            $new_comic->price = $data[$i]['price'];
            $new_comic->series = $data[$i]['series'];
            $new_comic->sale_date = $data[$i]['sale_date'];
            $new_comic->type = $data[$i]['type'];
            $new_comic->save();
        }
    }
}
