<?php

use Illuminate\Database\Seeder;

use App\Hero;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('heroes')->insert([
    	"hero_name" => "Ko Ko Nyan",
		"hero_image" => 'hero-image',
        "hero_overview" => 'hero-overview',
        "hero_detail" => "hero-detail",
        "created_at" => Carbon\Carbon::now(),
        "updated_at" => Carbon\Carbon::now()  		
    	]);
    	
    }
}
