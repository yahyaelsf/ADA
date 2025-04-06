<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVedioRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            's_cover' => [
                'image',
                Rule::requiredIf(function () {
                    return !$this->filled('pk_i_id');
                }),
                'max:' . $this->imageMaxSize
            ],
            's_vedio' => [
                'file',
                Rule::requiredIf(function () {
                    return !$this->filled('pk_i_id');
                }),
            ],
           
        ];


        foreach (config('app.supported_languages') as $language) {
            $rules['localizable.' . $language . '.s_title'] = 'required|string';
            // $rules['localizable.' . $language . '.s_description'] = 'nullable|string';
        }

        return $rules;
    }
}
