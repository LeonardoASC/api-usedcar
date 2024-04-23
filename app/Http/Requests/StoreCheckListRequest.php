<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCheckListRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'carro_id' => 'required|integer|exists:carros,id',
            'acessorio' => 'required|boolean',
            'arcondicionado' => 'required|boolean',
            'assento' => 'required|boolean',
            'cambio' => 'required|boolean',
            'documento' => 'required|boolean',
            'embreagem' => 'required|boolean',
            'espelho' => 'required|boolean',
            'farol' => 'required|boolean',
            'freio' => 'required|boolean',
            'lataria' => 'required|boolean',
            'motor' => 'required|boolean',
            'pedal' => 'required|boolean',
            'pneu' => 'required|boolean',
            'radio' => 'required|boolean',
            'sistema_eletrico' => 'required|boolean',
            'suspensao' => 'required|boolean',
            'vidro' => 'required|boolean'
        ];
    }
}
