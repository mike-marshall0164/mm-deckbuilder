<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class BaseController extends Controller {

    protected function respond($statusCode, $data = [])
    {
        return response()->json($data, $statusCode);
    }
}
