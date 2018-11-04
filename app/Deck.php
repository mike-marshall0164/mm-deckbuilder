<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model {

    protected $fillable = ["name", "description", "upvotes", "wins", "losses", "user_id", "master_id", "difficulty"];
    // protected $cards;
    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "upvotes" => "min:0",
        "wins" => "min:0",
        "losses" => "min:0",
        "user_id" => "required|numeric",
        "difficulty" => "in:BEGINNER,INTERMEDIATE,ADVANCED,EXPERT,MEME"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class, 'card_deck', 'deck_id', 'card_id');
    }

    public function cardsCount()
    {
        return $this->belongsToMany(Cards::class)->selectRaw('count(*) as aggregate');
    }
}
