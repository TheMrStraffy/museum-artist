<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;

class Museum extends Model
{
    use HasFactory;
    public static function generateSlug($string){

        $slug = Str::slug($string, '-');

        $new_slug = $slug;
        $c=1;
        $museum_exists = Museum::where('slug', $slug)->first();
        while($museum_exists){
            $slug = $new_slug . '-' .$c;
            $museum_exists = Museum::where('slug', $slug)->first();
            $c++;


        }
        return $slug;

    }
}
