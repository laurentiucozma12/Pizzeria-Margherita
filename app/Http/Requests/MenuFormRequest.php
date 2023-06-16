<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuFormRequest extends FormRequest
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
            'pizza-name' => 'required',    
            'pizza-weight' => ['required', 'integer'],    
            'cook-name' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'pizza-name' => strip_tags($this['pizza-name']),    
            'pizza-weight' => strip_tags($this['pizza-weight']),    
            'cook-name' => strip_tags($this['cook-name']),
        ]);
    }
}