<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ["username", "email", "auth0_id", "password"];

    protected $dates = [];

    public static $rules = [
        // Validation rules
        "email" => "email|unique:User,email_address",
        
    ];

    protected $hidden = ['password'];

    public function Decks()
    {
        return $this->hasMany("App\Deck");
    }


}
