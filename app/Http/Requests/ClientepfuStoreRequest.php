<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientepfuStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
         return [
            'nome'=>'required|string|min:3|max:255',
            'contacto'=>'required|string|min:9|max:255',
            'email' => 'required|unique:pfuxelaclientes,email|max:255',
            'Data_requesicao' => 'required|date',
            'local_partida' => 'required',
            'destino_partida' => 'required',
            'passageiros' => 'required:integer',
            'Data_estimativa_entrega' => 'required|date',
            'horas_partida_viatura' => 'required',
            'horas_entrega_viatura' => 'required',
            'descricao' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'nome.required'=>'Eh obrigatorio preencher este campo',
            'email.required' => 'Precisamos do seu endereço de e-mail!',
            'email.unique' => 'Este endereço de e-mail já está sendo usado.',
            'Data_requesicao.required' => 'A data de requisição é obrigatória.',
            'Data_requesicao.date' => 'A data de requisição é inválida.',
            'local_partida.required' => 'O campo local de partida é obrigatório.',
            'destino_partida.required' => 'O campo destino de partida é obrigatório.',
            'passageiros.required' => 'O campo passageiros é obrigatório.',
            'Data_estimativa_entrega.required' => 'A data estimada de entrega é obrigatória.',
            'Data_estimativa_entrega.date' => 'A data estimada de entrega é inválida.',
            'horas_partida_viatura.required' => 'O campo horas de partida da viatura é obrigatório.',
            'horas_entrega_viatura.required' => 'O campo horas de entrega da viatura é obrigatório.',

        ];
    }
}
