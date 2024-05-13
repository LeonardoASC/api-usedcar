<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCheckListRequest extends FormRequest
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
            'acessorio'        => 'nullable|boolean',
            'arcondicionado'   => 'nullable|boolean',
            'assento'          => 'nullable|boolean',
            'cambio'           => 'nullable|boolean',
            'documento'        => 'nullable|boolean',
            'embreagem'        => 'nullable|boolean',
            'espelho'          => 'nullable|boolean',
            'farol'            => 'nullable|boolean',
            'freio'            => 'nullable|boolean',
            'lataria'          => 'nullable|boolean',
            'motor'            => 'nullable|boolean',
            'pedal'            => 'nullable|boolean',
            'pneu'             => 'nullable|boolean',
            'radio'            => 'nullable|boolean',
            'sistema_eletrico' => 'nullable|boolean',
            'suspensao'        => 'nullable|boolean',
            'vidro'            => 'nullable|boolean',
        ];
    }
}
