<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends BaseFormRequest
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
        $rules = [
            's_cover' => [
                'image',
                Rule::requiredIf(function () {
                    return !$this->filled('pk_i_id');
                }),
                'max:' . $this->imageMaxSize
            ],
        ];


        foreach (config('app.supported_languages') as $language) {
            $rules['localizable.' . $language . '.s_name'] = 'required|string';
            $rules['localizable.' . $language . '.s_description'] = 'required|string';
        }

        return $rules;
    }
}
