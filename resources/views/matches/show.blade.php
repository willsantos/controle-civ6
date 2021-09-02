@extends('layout')

@section('cabecalho')
    PARTIDA: {{date('j \d\e F \d\e Y',strtotime($match->date_match))}}
@endsection

@section('conteudo')
    <a href="{{route('form_match_update',$match->id)}}" class="btn btn-dark mb-2">Editar</a>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between">Vitória: {{$match->victory_type}}</li>
        <li class="list-group-item d-flex justify-content-between">Vencedor: {{$match->victory_player}}</li>
        <li class="list-group-item d-flex justify-content-between">Civilização: {{$match->civilization}}</li>
        <li class="list-group-item d-flex justify-content-between">Wilson Pontos: {{$match->player_one_points}}</li>
        <li class="list-group-item d-flex justify-content-between">Ailton Pontos: {{$match->player_two_points}}</li>
        <li class="list-group-item d-flex justify-content-between">Data da partida: {{date('d/m/Y',strtotime
        ($match->date_match))}}</li>
    </ul>

@endsection
