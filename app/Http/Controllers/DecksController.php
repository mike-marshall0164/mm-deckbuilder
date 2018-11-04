<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Deck;

class DecksController extends Controller {
    public function all()
    {
        return $this->respond(Response::HTTP_OK, Deck::all());
    }

    public function get($id)
    {
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $deck);
    }

    public function add(Request $request)
    {
        $this->validate($request, Deck::$rules);
        return $this->respond(Response::HTTP_CREATED, Deck::create($request->all()));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Deck::$rules);
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $deck->update($request->all());
        return $this->respond(Response::HTTP_OK, $deck);
    }

    public function remove($id)
    {
        if(is_null(Deck::find($id))){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        Deck::destroy($id);
        return $this->respond(Response::HTTP_NO_CONTENT);
    }

    public function addCards(Request $request, $id)
    {
        /** @var Deck|null $deck */
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $deckCards = $deck->cards();
    }

    public function removeCards(Request $request, $id)
    {
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
    }
}
