<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_db = config('paintings');
        foreach($data_db['artists'] as $artists){
            $new_artist = new Artist();
            $new_artist->name = $artists['name'];
            $new_artist->slug = Artist::generator_slug($new_artist->name);
            $new_artist->save();
        }
    }
}
