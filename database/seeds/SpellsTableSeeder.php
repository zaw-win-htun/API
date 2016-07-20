<?php

use Illuminate\Database\Seeder;

use App\Spell;

class SpellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spell = new Spell();
      
        // $spell->hero_id = 3;
        // $spell->spell_name = 'Mee Dote';
        // $spell->spell_image = 'mee dote.png';
        // $spell->spell_overview = 'shay shay G';
        // $spell->create();

        DB::table('spells')->insert([
            "hero_id"=> 13,
            "spell_name" => "zawwinhtun",
            "spell_image" => 'hero-image',
            "spell_overview" => 'hero-overview',
            "created_at" => Carbon\Carbon::now(),
            "updated_at" => Carbon\Carbon::now()
        ]);

        DB::table('spells')->insert([
            "hero_id"=> 13,
            "spell_name" => "zawwinhtun",
            "spell_image" => 'hero-image',
            "spell_overview" => 'hero-overview',
            "created_at" => Carbon\Carbon::now(),
            "updated_at" => Carbon\Carbon::now()
        ]);

        DB::table('spells')->insert([
            "hero_id"=> 13,
            "spell_name" => "zawwinhtun",
            "spell_image" => 'hero-image',
            "spell_overview" => 'hero-overview',
            "created_at" => Carbon\Carbon::now(),
            "updated_at" => Carbon\Carbon::now()
        ]);

        DB::table('spells')->insert([
            "hero_id"=> 13,
            "spell_name" => "zawwinhtun",
            "spell_image" => 'hero-image',
            "spell_overview" => 'hero-overview' ,
            "created_at" => Carbon\Carbon::now(),
            "updated_at" => Carbon\Carbon::now()
        ]);
    }
}
