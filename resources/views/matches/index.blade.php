@extends('layout')

@section('cabecalho')
    Resumo das Partidas
@endsection


@section('conteudo')
    @if(!empty($message))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <a href="{{route('form_match_create')}}" class="btn btn-dark mb-2">Adicionar</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Data da Partida</th>
            <th scope="col">Vencedor</th>
            <th scope="col">Tipo de vitória</th>
            <th scope="col">Civilização</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)

            <tr>
                <th scope="row">{{date('d/m/Y',strtotime($match->date_match))}}</th>
                <td>{{$match->victory_player}}</td>
                <td>{{$match->victory_type}}</td>
                <td>{{$match->civilization}}</td>
                <td>
                    <span class="d-flex">
                         <a href="{{route('show_match',$match->id)}}" class="btn btn-info btn-sm mr-1">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    <form
                        method="post"
                        action="{{route('match_remove',$match->id)}}"
                        onsubmit="return confirm('Deseja excluir a partida de {{addslashes($match->date_match)}} ?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-1">
                            <i class="far fa-trash-alt" aria-label="Excluir"></i>
                        </button>
                    </form>
                    </span>

                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection


