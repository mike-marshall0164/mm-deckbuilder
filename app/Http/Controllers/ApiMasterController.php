<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Master

class ApiMasterController extends BaseController
{
    public function showAllMasters()
    {
        return response()->json(Author::all());
    }

    public function showOneMaster($id)
    {
        return response()->json(Master::find($id));
    }

    public function create(Request $request)
    {
        $master = Master::create($request->all());

        return response()->json($master, 201);
    }

    public function update($id, Request $request)
    {
        $master = Master::findOrFail($id);
        $master->update($request->all());

        return response()->json($master, 200);
    }

    public function delete($id)
    {
        Master::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
