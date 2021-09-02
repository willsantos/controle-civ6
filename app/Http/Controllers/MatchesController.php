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
        $matches = Match::query()
            ->orderBy('date_match','DESC')
            ->orderBy('updated_at','DESC')
                ->get();
        $message = $request->session()->get('message');
        return view('matches.index',compact('matches','message'));
    }

    public function show(Request $request)
    {
        $match = Match::find($request->id);
        return view('matches.show',compact('match'));
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

    public function formUpdate(Request $request)
    {
        $match = Match::find($request->id);

        return view('matches.update',compact('match'));
    }

    public function update(MatchesFormRequest $request, Match $match)
    {
        $data = $request->all([
            'victory_type',
            'victory_player',
            'civilization',
            'player_one_points',
            'player_two_points',
            'date_match',
        ]);

        $match = Match::find($request->id);

        $match->update($data);
        $match->save();
        $request->session()->flash(
            "message",
            "Partida do dia {$match->date_match} atualizada com sucesso"
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
