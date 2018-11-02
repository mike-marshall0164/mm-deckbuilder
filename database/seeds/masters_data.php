<?php

use Illuminate\Database\Seeder;

class masters_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:i:s"); 
        DB::table('masters')->insert([
            "name"=> "Apep",
            "description"=> "Apep isss a sssnaky bassstard.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 30,
            "target_count"=> 1,
            "attack_speed"=> 2.5,
            "attack_delay"=> 0.6,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "For each card that costs 5 or more in his hand, Apep gains 35% attack speed.  1st stack is 1.9, then 1.5, then 1.2, and finally 1",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Apep_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "King Puff",
            "description"=> "King Puff is a trickster, he loves to confuse his opponents and keep bridge control just as he loves kingdom control.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 8,
            "attack_damage"=> 75,
            "target_count"=> 1,
            "attack_speed"=> 2.5,
            "attack_delay"=> 1.8,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/RoyalPuff_Portrait.png"
          ]);
           DB::table('masters')->insert([
            "name"=> "Milloween",
            "description"=> "After years of pining for a Master she's had a crush on, Milloween joined Minion Masters to impress him with her superior magic. But so far King Puff hasn't shown any interest.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 8,
            "target_count"=> 3,
            "attack_speed"=> 2,
            "attack_delay"=> 1.4,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "For each spell in hand, Milloween fires an additional spark",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Millowen_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Mordar",
            "description"=> "Mordar uses his tombstones to raise the dead and his staff to slowly kill all attacking minions.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 20,
            "attack_damage"=> 10,
            "target_count"=> "AOE",
            "attack_speed"=> 4,
            "attack_delay"=> 3.4,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "Reduces attackspeed every 3rd hit. DPS of each is listed here:",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Mordar_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Ratbo",
            "description"=> "Ratbo is among the most famous Scrat leaders. Scrats will gladly follow him blindly and in great numbers - they have a Minigun insurance...",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 5,
            "target_count"=> 1,
            "attack_speed"=> 0.3,
            "attack_delay"=> 0,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Ratbo_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Ravager",
            "description"=> "Ravager is a fierce Master, able to quickly tear through close combat minions, but if they have a gun, he has a problem and that's where he needs Brutus!",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 4.5,
            "attack_damage"=> 10,
            "target_count"=> 1,
            "attack_speed"=> 0.3,
            "attack_delay"=> 0.3,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Ravager_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Settsu",
            "description"=> "Settsu is a bad-ass ex-soldier that never plays by the rules. She can enter the Arena herself to annihilate enemies with superior firepower.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 40,
            "target_count"=> 1,
            "attack_speed"=> 1,
            "attack_delay"=> 0.3,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "After 5 Shots She Has To Reload Over A 5 Second Duration.",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Settsu_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Stormbringer",
            "description"=> "Stormbringer excels in everything that has to do with range!",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 20,
            "attack_damage"=> 35,
            "target_count"=> 1,
            "attack_speed"=> 4,
            "attack_delay"=> 1.7,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Stormbringer_Portrait.jpg"
          ]);
           DB::table('masters')->insert([
            "name"=> "Volco",
            "description"=> "Volco is not afraid of swarms, but he hates flying enemies he can't reach.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 40,
            "target_count"=> "AOE",
            "attack_speed"=> 2.5,
            "attack_delay"=> 1,
            "can_hit_air"=> false,
            "aoe_size"=> 2,
            "extra_data"=> "",
            "img_url"=> "https://s3-us-west-2.amazonaws.com/mm-deckbuilder-resources/images/Volco.jpg"
          ]);
        
    }
}
