<?php

namespace App\Http\Controllers;

class MasterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function showAllMasters() {
        return response()->json(Master::all());
    }
    //
}
