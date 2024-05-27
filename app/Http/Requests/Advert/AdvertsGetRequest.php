<?php

namespace App\Http\Requests\Advert;

use Illuminate\Foundation\Http\FormRequest;

class AdvertsGetRequest extends FormRequest
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
            'high_to_low_price'  => 'nullable|boolean',
            'low_to_high_price'  => 'nullable|boolean',
            'new_to_old_date' => 'nullable|boolean',
            'old_to_new_date' => 'nullable|boolean',
            'page' => 'required|integer',
        ];
    }
}
