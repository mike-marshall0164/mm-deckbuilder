<?php namespace App\Http\Controllers;

use App\Deck;
use App\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DecksController extends BaseController {

    public function all()
    {
        return $this->respond(Response::HTTP_OK, Deck::all());
    }

    public function get($id)
    {
        $deck = Deck::with('cards', 'master')->find($id);
    
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $deck);
    }

    public function add(Request $request)
    {
        $this->validate($request, Deck::$rules);
        $deck = Deck::create($request->except('cards'));

        $cardIds = $request->only('cards')['cards'];

        $deck->cards()->attach($cardIds);
        return $this->respond(Response::HTTP_CREATED, $deck);
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

    public function getUser(Request $request, $id)
    {
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        return $this->respond(Response::HTTP_OK, $deck->user()->get());
    }

    public function getMaster(Request $request, $id)
    {
        $deck = Deck::find($id);
        if(is_null($deck)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        return $this->respond(Response::HTTP_OK, $deck->master()->get());
    }

    public function getCards(Request $request, $id)
    {
        $deck = Deck::find($id);
        if (is_null($deck)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        return $this->respond(Response::HTTP_OK, $deck->cards()->get());
    }

    public function addCards(Request $request, $deckId, $cardId)
    {
        $deck = Deck::find($deckId);
        if (is_null($deck)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        $card = Card::find($cardId);
        if (is_null($card)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }


        $deck->cards()->attach($cardId);

        return $this->respond(Response::HTTP_CREATED);
    }

    public function addCard(Request $request, $deckId, $cardId)
    {
        $deck = Deck::find($deckId);
        if (is_null($deck)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        $card = Card::find($cardId);
        if (is_null($card)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }


        $deck->cards()->attach($cardId);

        return $this->respond(Response::HTTP_CREATED);
    }
}
