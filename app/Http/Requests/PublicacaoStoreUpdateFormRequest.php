<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacaoStoreUpdateFormRequest extends FormRequest
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
//        $id = $this->id ?? '';

        $rules = [
            'titulo' => [
                'required',
                'string',
                'max: 255'
            ],
            'postagem' => [
                'required',
                'string',
                'min:10'
            ],

        ];
        return $rules;
    }
}
