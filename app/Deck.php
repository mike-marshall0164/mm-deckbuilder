<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model {

    protected $fillable = ["name", "description", "upvotes", "wins", "losses", "user_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "upvotes" => "min:0",
        "wins" => "min:0",
        "losses" => "min:0",
        "user_id" => "required|numeric",
    ];

    public function Master()
    {
        return $this->hasOne("App\Master");
    }

    public function Card()
    {
        return $this->hasMany("App\Card");
    }

    public function User()
    {
        return $this->belongsTo("App\User");
    }


}
