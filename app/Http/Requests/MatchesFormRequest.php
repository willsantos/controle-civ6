<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchesFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'victory_type' => 'required',
            'victory_player' => 'required',
            'player_one_points'=>'required',
            'player_two_points' => 'required',
            'date_match' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }

    public function attributes(): array
    {
        return [
            'victory_type' => 'Tipo de vitória',
            'victory_player' => 'Vencedor',
            'player_one_points'=>'Pontos Wilson',
            'player_two_points' => 'Pontos Ton',
            'date_match' => 'Data da Partida'
        ];
    }
}
