<?php

use App\Models\Url;  
use Illuminate\Database\Seeder;

class UrlTableSeeder extends Seeder  
{
    public function run()
    {
        Url::create([
            'short_url' => 'wiki',
            'full_url' => 'http://wiki.springbox.local/index.php?title=Main_Page'
        ]);

        Url::create([
            'short_url' => 'shrek',
            'full_url' => 'https://vimeo.com/97688364'
        ]);
    }
}