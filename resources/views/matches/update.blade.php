@extends('layout')

@section('cabecalho')
    Editar Partida {{$match->date_match}}
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('update_match',$match->id)}}" >
        @csrf
        @method("PATCH")
        <div class="form-group">
            <label for="date_match" class="">Data da partida</label>
            <input type="date" class="form-control" name="date_match" id="date_match" value="{{$match->date_match}}">
        </div>
        <div class="form-group">
            <label for="victory_player" class="">Vencedor</label>
            <input type="text" class="form-control" name="victory_player" id="victory_player"
                   value="{{$match->victory_player}}">
        </div>
        <div class="form-group">
            <label for="victory_type" class="">Tipo de vitoria</label>
            <input type="text" class="form-control" name="victory_type" id="victory_type"
                   value="{{$match->victory_type}}">
        </div>
        <div class="form-group">
            <label for="civilization" class="">Civilização</label>
            <input type="text" class="form-control" name="civilization" id="civilization"
                   value="{{$match->civilization}}">
        </div>
        <div class="form-group">
            <label for="player_one_points" class="">Pontos Wilson</label>
            <input type="text" class="form-control" name="player_one_points" id="player_one_points"
                   value="{{$match->player_one_points}}">
        </div>
        <div class="form-group">
            <label for="player_two_points" class="">Pontos Ton</label>
            <input type="text" class="form-control" name="player_two_points" id="player_two_points"
                   value="{{$match->player_two_points}}">
        </div>
        <button class="btn btn-primary">Atualizar</button>
    </form>
@endsection


