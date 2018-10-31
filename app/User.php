<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ["username", "email", "auth0_id"];

    protected $dates = [];

    public static $rules = [
        // Validation rules
        "email" => "email|unique:User,email_address",
    ];

    public function Decks()
    {
        return $this->hasMany("App\Deck");
    }


}
