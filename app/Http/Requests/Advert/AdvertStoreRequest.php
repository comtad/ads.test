<?php

namespace App\Http\Requests\Advert;

use Illuminate\Foundation\Http\FormRequest;

class AdvertStoreRequest extends FormRequest
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
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:1000',
            'price' => 'required|integer',
            'photo0' => 'required|string',
            'photo1' => 'required|string',
            'photo2' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле title необходимо для заполнения',
            'title.max' => 'Поле title может содержать 200 символом максимум',
            'price.required' => 'Поле price необходимо для заполнения',
            'description.required' => 'Поле description необходимо для заполнения',
            'description.max' => 'Поле description может содержать 1000 символом максимум',
            'photo0' => 'Поле photo0 необходимо для заполнения',
            'photo1' => 'Поле photo1 необходимо для заполнения',
            'photo2' => 'Поле photo2 необходимо для заполнения',
        ];
    }
}
