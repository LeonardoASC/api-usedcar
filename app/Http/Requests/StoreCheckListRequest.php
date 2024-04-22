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
            'motor' => 'required|boolean',
            'lataria' => 'required|boolean',
            'pneu' => 'required|boolean',
            'documento' => 'required|boolean',
            'freio' => 'required|boolean',
            'suspensao' => 'required|boolean',
            'embreagem' => 'required|boolean',
            'pedal' => 'required|boolean',
            'cambio' => 'required|boolean',
            'vidro' => 'required|boolean',
            'sistema_eletrico' => 'required|boolean',
        ];
    }
}
