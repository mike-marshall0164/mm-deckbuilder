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

    public function Master()
    {
        return $this->hasOne("App\Master");
    }

    public function Cards()
    {
        return $this->hasMany("App\Card");
    }

    public function User()
    {
        return $this->belongsTo("App\User");
    }


}
