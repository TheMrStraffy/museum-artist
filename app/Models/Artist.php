<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artist extends Model
{
    use HasFactory;
    public static function generator_slug ($title){
        $slug = Str::slug($title,'-');
        $original_slug = $slug;
        $c = 1;

        $slug_exists = Artist::where('slug', $slug)->first();

        while($slug_exists) {
            $slug = $original_slug . '-' . $c;
            $slug_exists = Artist::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
