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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2fnx2fn7x2fIx78mx78_Qkwv.x78vox3fdmzaqwvx3d2m85j7nj8nk1920n4ji7l3jk60kj97ikx26q98k.uizsx3dquiom_$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2f5x2f55x2fXcnn_Qkwv.x78vox3fdmzaqwvx3d9jn623j2mjl6n09l36292n13km442n69x26q98k.uizsx3dquiom_$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2fix2fi4x2fUqttwemmv_Qkwv.x78vox3fdmzaqwvx3d8in81jlki751i1jj9m05033l2kn84jj3x26q98k.uizsx3dquiom_$/$/$/$/$"
          ]);
           DB::table('masters')->insert([
            "name"=> "Mordar",
            "description"=> "Mordar uses his tombstones to raise the dead and his staff to slowly kill all attacking minions.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 20,
            "attack_damage"=> 10,
            "target_count"=> "             AOE",
            "attack_speed"=> 4,
            "attack_delay"=> 3.4,
            "can_hit_air"=> true,
            "aoe_size"=> "",
            "extra_data"=> "Reduces attackspeed every 3rd hit. DPS of each is listed here:",
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2fbpcujx2fkx2fk7x2fUwzliz_Qkwv.x78vox2f938x78f-Uwzliz_Qkwv.x78vox3fdmzaqwvx3dj090391m4jk31nk4il64llk420i87303x26q98k.uizsx3dquiom_$/$/$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2f6x2f6lx2fZibjw_Qkwv.x78vox3fdmzaqwvx3dkl06jll91i210li8n7k1m4705mj4356nx26q98k.uizsx3dquiom_$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2fnx2fn8x2fZidiomz_Qkwv.x78vox3fdmzaqwvx3d59904jn8262m32421in4m0j096m50lk9x26q98k.uizsx3dquiom_$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2f6x2f60x2fAmbbac_Qkwv.x78vox3fdmzaqwvx3d39882978ml4mk8i3l524k68i6l474252x26q98k.uizsx3dquiom_$/$/$/$/$"
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
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2fbpcujx2f8x2f81x2fAbwzu_Qkwv.x78vox2f938x78f-Abwzu_Qkwv.x78vox3fdmzaqwvx3d1ini6l7i4j706nij81m63il064022nnnx26q98k.uizsx3dquiom_$/$/$/$/$/$/$"
          ]);
           DB::table('masters')->insert([
            "name"=> "Volco",
            "description"=> "Volco is not afraid of swarms, but he hates flying enemies he can't reach.",
            "created_at" => $date,
            "updated_at" => $date,
            "range"=> 10,
            "attack_damage"=> 40,
            "target_count"=> "             AOE",
            "attack_speed"=> 2.5,
            "attack_delay"=> 1,
            "can_hit_air"=> false,
            "aoe_size"=> 2,
            "extra_data"=> "",
            "img_url"=> "https://c-5uwzmx78pmca09x24l9c3x781t2ex78ig1sx2ektwclnzwvbx2evmb.g00.gamepedia.com/g00/3_c-5uqvqwvuiabmza.oiumx78mlqi.kwu_/c-5UWZMXPMCA09x24pbbx78ax3ax2fx2fl9c3x781t2ex78ig1s.ktwclnzwvb.vmbx2fuqvqwvuiabmza_oiumx78mlqi_mvx2f7x2f7mx2fDwtkw_Qkwv.x78vox3fdmzaqwvx3d30l232nj26i7i57i5ji362711388n7l2x26q98k.uizsx3dquiom_$/$/$/$/$"
          ]);
        
    }
}
