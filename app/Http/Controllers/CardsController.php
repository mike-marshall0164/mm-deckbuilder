<?php namespace App\Http\Controllers;

use App\Card;
use Laravel\Lumen\Routing\Controller as BaseController;

class CardsController extends BaseController {

    const MODEL = Card::class;

    use RESTActions;
}
