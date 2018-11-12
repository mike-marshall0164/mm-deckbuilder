<?php

use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cards')->insert([
          "name" => "Wall",
          "description" => "Plenty of health, no attack. A perfect distraction for building haters",
          "mana_cost" => 2,
          "unit_health" => 600,
          "duration" => 20,
          "unit_range" => "",
          "damage" => "",
          "attack_speed" => "",
          "attack_delay" => "",
          "unit_production_speed" => "",
          "rarity" => "Common",
          "crafting_cost" => 50,
          "can_target_air" => "",
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Ghost Turret",
          "description" => "Defensive building with good damage and attack speed.",
          "mana_cost" => 3,
          "unit_health" => 250,
          "duration" => 30,
          "unit_range" => 6,
          "damage" => 50,
          "attack_speed" => 0.8,
          "attack_delay" => 0.4,
          "unit_production_speed" => "",
          "rarity" => "Common",
          "crafting_cost" => 50,
          "can_target_air" => false,
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Healing Shrine",
          "description" => "Heals all nearby friendly minions over time",
          "mana_cost" => 3,
          "unit_health" => 50,
          "duration" => 12,
          "unit_range" => 8,
          "damage" => "",
          "attack_speed" => 1,
          "attack_delay" => "",
          "unit_production_speed" => "",
          "rarity" => "Rare",
          "crafting_cost" => 125,
          "can_target_air" => "",
          "extra_info" => "The healing is an ability so Stormbringer doesn't increase the shrine's range",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Bridge Shrine",
          "description" => "Generates 15 XP over 60 sec - regards, XP INC. When in Mana Frenzy the shrine overheats and takes triple decay damage.",
          "mana_cost" => 4,
          "unit_health" => 250,
          "duration" => 60,
          "unit_range" => "",
          "damage" => "",
          "attack_speed" => "",
          "attack_delay" => "",
          "unit_production_speed" => 4,
          "rarity" => "Rare",
          "crafting_cost" => 125,
          "can_target_air" => "",
          "extra_info" => "For reference, a regular bridge generates 1 XP per 4 sec. aswell.",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Magma Cannon",
          "description" => "This cannon fires flaming balls of magma at any enemies in range. For when you need more firepower.",
          "mana_cost" => 4,
          "unit_health" => 300,
          "duration" => 30,
          "unit_range" => 8,
          "damage" => 75,
          "attack_speed" => 1.2,
          "attack_delay" => 0.6,
          "unit_production_speed" => "",
          "rarity" => "Rare",
          "crafting_cost" => 125,
          "can_target_air" => true,
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Dragon Nest",
          "description" => "Summons a Flightless Dragon Whelp whenever its Master plays a Spell. Because dragons love magic.",
          "mana_cost" => 5,
          "unit_health" => 300,
          "duration" => 45,
          "unit_range" => "",
          "damage" => "",
          "attack_speed" => "",
          "attack_delay" => "",
          "unit_production_speed" => "",
          "rarity" => "Legendary",
          "crafting_cost" => 2000,
          "can_target_air" => "",
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Laser Turret",
          "description" => "When staying on the same target, it fires faster and faster.",
          "mana_cost" => 5,
          "unit_health" => 350,
          "duration" => 30,
          "unit_range" => 11,
          "damage" => 40,
          "attack_speed" => 1.4,
          "attack_delay" => 1,
          "unit_production_speed" => "",
          "rarity" => "Common",
          "crafting_cost" => 50,
          "can_target_air" => true,
          "extra_info" => "Reduces its attack speed by 300 ms every time it attacks the same target. (Max's out at a minimum of 100,ms)",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Scrat Launcher",
          "description" => "Massive range, always shoots at the nearest enemy building. Scrats go in; screaming, rocket-powered balls of fur come out.",
          "mana_cost" => 5,
          "unit_health" => 300,
          "duration" => 30,
          "unit_range" => 25,
          "damage" => 100,
          "attack_speed" => 3,
          "attack_delay" => 0.4,
          "unit_production_speed" => "",
          "rarity" => "Common",
          "crafting_cost" => 50,
          "can_target_air" => "",
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Swarmer Totem",
          "description" => "Summons a lot of Swarmers over time.",
          "mana_cost" => 5,
          "unit_health" => 350,
          "duration" => 60,
          "unit_range" => "",
          "damage" => "",
          "attack_speed" => "",
          "attack_delay" => "",
          "unit_production_speed" => 6.6,
          "rarity" => "Common",
          "crafting_cost" => 50,
          "can_target_air" => "",
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
          "name" => "Crossbow Guild",
          "description" => "Place a guild of jolly Crossbowmen, try to give them enough time to start a community.",
          "mana_cost" => 6,
          "unit_health" => 350,
          "duration" => 60,
          "unit_range" => "",
          "damage" => "",
          "attack_speed" => "",
          "attack_delay" => "",
          "unit_production_speed" => 4.2,
          "rarity" => "Rare",
          "crafting_cost" => 125,
          "can_target_air" => "",
          "extra_info" => "",
          "created_at" => date("Y-m-d H:i:s"),
          "updated_at" => date("Y-m-d H:i:s")
        ]);
  }
}
