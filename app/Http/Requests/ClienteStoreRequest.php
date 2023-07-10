<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'email' => 'required', // Validação para email
            'contacto' => 'required', // Validação para contacto (opcional)
            'Data_requesicao' => 'required|date', // Validação para Data_requesicao
            'local_partida' => 'required', // Validação para local_partida
            'destino_partida' => 'required', // Validação para destino_partida
            'passageiros' => 'required', // Validação para passageiros
            'Data_estimativa_entrega' => 'required|date', // Validação para Data_estimativa_entrega
            'horas_partida_viatura' => 'required', // Validação para horas_partida_viatura
            'horas_entrega_viatura' => 'required', // Validação para horas_entrega_viatura
            'descricao' => 'nullable', // Validação para descricao (opcional)
        ];
    }public function messages()
    {
        return [
            'nome.required'=>'Eh obrigatorio preencher este campo',
            'email.required' => 'Precisamos do seu endereço de e-mail!',
             'contacto.required'=> 'Campo telefone deve ser preenchido',
            'Data_requesicao.required' => 'A data de requisição é obrigatória.',
            'local_partida.required' => 'O campo local de partida é obrigatório.',
            'destino_partida.required' => 'O campo destino de partida é obrigatório.',
            'passageiros.required' => 'O campo passageiros é obrigatório.',
            'Data_estimativa_entrega.required' => 'A data estimada de entrega é obrigatória.',
            'horas_partida_viatura.required' => 'O campo horas de partida da viatura é obrigatório.',
            'horas_entrega_viatura.required' => 'O campo horas de entrega da viatura é obrigatório.',

        ];
    }
}
