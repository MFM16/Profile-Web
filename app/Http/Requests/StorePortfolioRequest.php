<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'project_name' => 'required',
            'project_year' => 'required|integer',
            'project_desc' => 'required',
            'project_link' => 'required',
            'technology' => 'required',
            'project_image' => 'required|file|mimes:jpg,png|max:2048'
        ];
    }

    public function messages(): array{
        return [
            'technology.required' => 'There is at least one piece of technology used'
        ];
    }
}
