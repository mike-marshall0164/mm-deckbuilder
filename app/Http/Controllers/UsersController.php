<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class UsersController extends BaseController {

    const MODEL = User::class;

    use RESTActions;

    public function getDecks(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        return $this->respond(Response::HTTP_OK, $user->decks()->get());
    }
}
