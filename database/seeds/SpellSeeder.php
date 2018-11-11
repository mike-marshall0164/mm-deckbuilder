<?php

use Illuminate\Database\Seeder;

class SpellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
        DB::table('cards')->insert([
            "name" => "Black Hole",
            "description" => "Sucks up ALL minions in an area, removing them from the board for the rest of the spell's duration",
            "mana_cost" => 2,
            "unit_count" => "",
            "radius" => 5,
            "damage" => "",
            "duration" => 6,
            "delay" => 1,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "Black Holed units do not count towards conditional cards' activation requirements.",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Bridge Buddies",
            "description" => "Summon a Scrat on each bridge. If the bridge is under your control, summon an Armored Scrat instead.",
            "mana_cost" => 2,
            "unit_count" => 2,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 2,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Call To Arms",
            "description" => "Replace each of your buildings with a Warrior.",
            "mana_cost" => 2,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 2,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "There's a slight delay. Any buildings destroyed during the delay will not be replaced by Call To Arms.",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Combustion",
            "description" => "Each affected Friendly Minion explodes after 3 seconds, dealing 150 damage to itself and any nearby Enemies.",
            "mana_cost" => 2,
            "unit_count" => "",
            "radius" => 3,
            "damage" => 150,
            "duration" => 3,
            "delay" => 1.5,
            "rarity" => "Legendary",
            "crafting_cost" => 2000,
            "extra_info" => "Hits ALL enemies around the Combustion'd Minion. ",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Shock Rock",
            "description" => "Drop a stunning stone on your enemies, which stuns and damages them.",
            "mana_cost" => 2,
            "unit_count" => "",
            "radius" => 3,
            "damage" => 40,
            "duration" => 2,
            "delay" => 1.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Cheese Date",
            "description" => "Spawn a random 3 mana scrat card and give it Rage",
            "mana_cost" => 3,
            "unit_count" => 1,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 1.35,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "Possible minions: Scrat Horde, Sniper Scrat, Bazooka Scrat, Armored Scrats",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Clear Skies",
            "description" => "A soothing wind clears the arena healing all minions and masters 250 health and removes rage and shields.",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => "",
            "damage" => 100,
            "duration" => "",
            "delay" => 0,
            "rarity" => "Legendary",
            "crafting_cost" => 2000,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Daggerfall",
            "description" => "Great against hordes of low health enemies, such as Scrats!",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 8,
            "damage" => 80,
            "duration" => "",
            "delay" => 2,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Gambler's Ball",
            "description" => "Casts either a Healing Fireball or a Fireball at the targeted area. Like a certain serpent once said; Luck iss a ssskill",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 2.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "Stats of this card are decided by which spell it casts. Refer to Healing Fireball(3 Mana) and Fireball(4 Mana) for detailed statistics.",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Gor'Rakk Sacrifice",
            "description" => "Disables a random friendly Minion for 5 seconds, then kills it to spawn a Cleaver. Keep the sacrifice alive or lose it!",
            "mana_cost" => 3,
            "unit_count" => 1,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Healing Fireball",
            "description" => "Heals all friendly minions by 400. Yes, it is a HEALING fireball...",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 6,
            "damage" => -400,
            "duration" => "",
            "delay" => 2.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Netherstep",
            "description" => "Teleports friendly Minions in the area along the path to the enemy Master. The Shars'Rakk love sharing their magic - and other things...",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 3,
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Legendary",
            "crafting_cost" => 2000,
            "extra_info" => "Teleport Distance: 10",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Rampage",
            "description" => "Gives friendly Minions Rage! +50%",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 8,
            "damage" => "",
            "duration" => "",
            "delay" => 2.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Stun Blast",
            "description" => "A large stun explosion, that leaves your enemies vulnerable.",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 5,
            "damage" => "",
            "duration" => 5,
            "delay" => 1.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Sun Burn",
            "description" => "Deal 10 damage 10 times to all units in a small area and give them Rage (+50% Damage)",
            "mana_cost" => 3,
            "unit_count" => "",
            "radius" => 3,
            "damage" => "",
            "duration" => 1,
            "delay" => 1,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "Can hit your own minions and masters!",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Blind Date",
            "description" => "Play a random 5 mana minion card.",
            "mana_cost" => 4,
            "unit_count" => 1,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 1.35,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Chain Lightning",
            "description" => "Fires a ball of lightning at target location before bouncing to the nearest enemies, damaging them and stunning them for 0.5 seconds, until there are none within range.",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => 8,
            "damage" => 100,
            "duration" => 0.5,
            "delay" => 2.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Fireball",
            "description" => "Great against groups of low to medium health enemies.",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => 4.5,
            "damage" => 150,
            "duration" => "",
            "delay" => 2.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Future Past",
            "description" => "When used, it permanently replaces itself with another random card of cost 1 or higher and reduces that card's mana cost by 1.",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "Can not draw Future Past or Future Present",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Hypnotize",
            "description" => "After a short delay, enemy minions caught in the area are hypnotized and join your side for 5 seconds.",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => 4.5,
            "damage" => "",
            "duration" => 5,
            "delay" => 2.5,
            "rarity" => "Legendary",
            "crafting_cost" => 2000,
            "extra_info" => "Hypnotised units count towards conditional card' activation requirements.",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Lightning Bolt",
            "description" => "Destroys one random enemy Minion or Building.",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.999,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Raging Reinforcements",
            "description" => "Summons a Dragon Whelp or a Warrior or 3 Crossbow Dudes and gives them Rage! +50% Damage",
            "mana_cost" => 4,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Spirit Infusion",
            "description" => "Summons 3 Spirits over 9 seconds. Each Spirit flies to a random friendly Minion giving it 100 extra health",
            "mana_cost" => 4,
            "unit_count" => 3,
            "radius" => "",
            "damage" => "",
            "duration" => 9,
            "delay" => 1.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Dragon Ball",
            "description" => "It's a fireball, but if the last card you played was a 3-mana minion, it also spawns a Dragon Whelp where it lands!",
            "mana_cost" => 5,
            "unit_count" => 1,
            "radius" => 4.5,
            "damage" => 150,
            "duration" => "",
            "delay" => 2.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Infiltration",
            "description" => "Summon 4 Plasma Marines wherever you want!",
            "mana_cost" => 5,
            "unit_count" => 4,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 1.5,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Magma Storm",
            "description" => "Calls down 10 magma rocks in an area over 5 sec. Each rock deals 200 damage to ANYTHING in a small area (but only 10% to Masters)",
            "mana_cost" => 5,
            "unit_count" => "",
            "radius" => 9,
            "damage" => 200,
            "duration" => 5,
            "delay" => 1.5,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "Summons 2 rocks per second that deal 200 Damage each in a radius of 3.5 range each, only 20 damage each to Masters. Can hit your own minions and master!",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Beam of DOOM!",
            "description" => "A popular UFO weapon, deals massive damage in a small area over a few seconds, Double damage against minions.",
            "mana_cost" => 7,
            "unit_count" => "",
            "radius" => 3,
            "damage" => 300,
            "duration" => 2.8,
            "delay" => 1.2,
            "rarity" => "Common",
            "crafting_cost" => 50,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Last Stand",
            "description" => "Summons 5 Legionnaires, but 7 if your opponent controls both bridges!",
            "mana_cost" => 7,
            "unit_count" => 6,
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Rare",
            "crafting_cost" => 125,
            "extra_info" => "",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('cards')->insert([
            "name" => "Future Present",
            "description" => "When used, it permanently replaces itself with another random card of cost 2 or higher and reduces that card's mana cost by 2.",
            "mana_cost" => 8,
            "unit_count" => "",
            "radius" => "",
            "damage" => "",
            "duration" => "",
            "delay" => 0.5,
            "rarity" => "Supreme",
            "crafting_cost" => 500,
            "extra_info" => "Can not draw Future Past or Future Present",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
            ]);

    }
}
