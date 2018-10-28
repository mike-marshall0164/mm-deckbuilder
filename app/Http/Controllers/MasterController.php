<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Master;
use Illuminate\Http\Request;

class MasterController extends BaseController
{
    public function create(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'description' => 'required',
        //     'extra_data' => '',
        //     'range' => '',
        //     'attack_damage' => 'required',
        //     'target_count' => '',
        //     'attack_speed' => '',
        //     'attack_delay' => '',
        //     'aoe_size' => '',
        //     'can_hit_air' => ''
        // ]);

        $master = Master::create($request->all());

        return response()->json($master, 201);
    }

    public function showAllMasters()
    {
        return response()->json(Master::all());
    }

    public function showOneMaster($id)
    {
        return response()->json(Master::find($id));
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
