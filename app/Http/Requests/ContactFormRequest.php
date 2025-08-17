<?php

namespace App\Http\Requests;

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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'preferred_date' => 'nullable|date',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your full name.',
            'name.max' => 'Your name cannot exceed 255 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email cannot exceed 255 characters.',
            'phone.max' => 'Your phone number cannot exceed 20 characters.',
            'preferred_date.date' => 'Please enter a valid date.',
            'preferred_date.after' => 'Preferred date must be in the future.',
            'service.max' => 'Service selection cannot exceed 255 characters.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'Your message cannot exceed 1000 characters.',
        ];
    }
}
