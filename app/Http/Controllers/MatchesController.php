<?php

namespace App\Http\Controllers;




use App\Http\Requests\MatchesFormRequest;
use App\Match;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class MatchesController extends Controller
{
    public function index(Request $request)
    {
        $matches = Match::query()->orderBy('date_match','DESC')->get();
        $message = $request->session()->get('message');
        return view('matches.index',compact('matches','message'));
    }

    public function create()
    {
        return view('matches.create');
    }

    public function store(MatchesFormRequest $request): RedirectResponse
    {
        $match =  Match::create($request->all());


        $request->session()->flash(
            "message",
            "Partida do dia {$match->date_match} adicionada com sucesso"
        );

        return redirect()->route('list_matches');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Match::destroy($request->id);
        $request->flash(
            "message",
            "Partida removida com sucesso"
        );

        return redirect()->route('list_matches');
    }
}
