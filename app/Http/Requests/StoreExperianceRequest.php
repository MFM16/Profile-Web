<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperianceRequest extends FormRequest
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
            'month_from' => 'required',
            'year_from' => 'required',
            'month_to' => 'nullable',
            'year_to' => 'nullable',
            'job' => 'required|string',
            'place' => 'required',
            'position' => 'nullable|string',
            'job_desc' => 'required',
            'link' => 'nullable:url',
            'technology' => 'required'
        ];
    }
}
