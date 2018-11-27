<?php namespace App\Http\Controllers;

use App\Master;
use Laravel\Lumen\Routing\Controller as BaseController;

class MastersController extends BaseController{

    const MODEL = Master::class;

    use RESTActions;

}
