<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model {

    protected $fillable = ["username", "email", "auth0_id", "password"];

    protected $dates = [];

    public static $rules = [
        // Validation rules
        "email" => "email|unique:User,email_address",
        
    ];

    protected $hidden = ['password'];

    public function decks()
    {
        return $this->hasMany(Deck::class);
    }
}
