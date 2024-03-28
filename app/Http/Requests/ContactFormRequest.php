<?php

namespace App\Http\Requests;

use App\Rules\ReCaptchaV3;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'tel' => 'max:15', 
            'content' => 'required',
            'g-recaptcha-response' => 'recaptcha'
        ];
    }
}
