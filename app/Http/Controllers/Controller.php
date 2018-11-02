<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
     
    protected function respond($status, $data = [])
    {
        return response()->json($data, $status);
    }
}
