<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller {

    public function all()
    {
        return $this->respond(Response::HTTP_OK, User::all());
    }

    public function get($id)
    {
        $model = User::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

    public function add(Request $request)
    {
        $this->validate($request, User::$rules);
        return $this->respond(Response::HTTP_CREATED, User::create($request->all()));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, User::$rules);
        $user = User::find($id);
        if(is_null($user)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $user->update($request->all());
        return $this->respond(Response::HTTP_OK, $user);
    }

    public function remove($id)
    {
        if(is_null(User::find($id))){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        User::destroy($id);
        return $this->respond(Response::HTTP_NO_CONTENT);
    }

    public function getDecks(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        return $this->respond(Response::HTTP_OK, $user->decks()->get());
    }
}
