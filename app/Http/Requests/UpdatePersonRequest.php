<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'id_number' => 'size:9|unique:people',
            'dob' => 'required|date',
            'age' => 'required|max:255|integer|between:18,100',
            'mobile' => 'required|size:10',
            'gender' => 'required|max:255',
            'address' => 'required|max:255',
            'religion' => 'required|max:255',
            'nationality' => 'required|max:255',
        ];
    }
}
