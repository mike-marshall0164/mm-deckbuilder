<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {

    protected $fillable = [
        "name", "description", "extra_info", "card_type",
        "rarity", "mana_cost", "crafting_cost", "unit_type",
        "unit_count", "unit_health", "unit_speed", "unit_range",
        "damage", "target_count", "attack_speed", "attack_delay",
        "can_target_air", "radius", "duration", "delay", "img_url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "description" => "required",
        "card_type"=> "required|in:UNIT,SPELL,BUILDING",
        "unit_count"=> "nullable",
        "unit_type"=> "in:GROUND,AIR",
        'img_url' => 'url|required'
    ];

    // Relationships
    public function decks()
    {
        return $this->belongsToMany(Deck::class, 'card_deck', 'card_id', 'deck_id');
    }
}
