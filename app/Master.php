<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model 
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'extra_data', 'range', 'attack_damage',
        'target_count', 'attack_speed', 'attack_delay', 'aoe_size', 'can_hit_air', 'img_url'
    ];

    protected $dates = [];

    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'extra_data' => '',
        'range' => 'required',
        'attack_damage' => 'required',
        'target_count' => '',
        'attack_speed' => '',
        'attack_delay' => '',
        'aoe_size' => '',
        'can_hit_air' => '',
        'img_url' => 'url|required'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
