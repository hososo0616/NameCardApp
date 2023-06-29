<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NamecardRequest extends FormRequest
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
            'name' => 'required|max:16',
            // 'email' => 'required|email',
            'companyname' => 'required|max:32',
            'image' => 'mimes:jpg,bmp,png,jpeg',
        ];
    }
}