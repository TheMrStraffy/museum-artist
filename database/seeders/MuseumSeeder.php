<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Museum;

class MuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_museum = config('paintings');
        foreach($array_museum['museums'] as $museum_item){
            $new_museum = new Museum();
            $new_museum->name = $museum_item['name'];
            $new_museum->slug = Museum::generateSlug($new_museum->name);
            $new_museum->nation = $museum_item['nation'];
            $new_museum->save();
        }


        }
    }

