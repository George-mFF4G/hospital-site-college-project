<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredoctorRequest extends FormRequest
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
        return [
            'first_name'  => 'required|max:100',
            'lase_name' => 'required|max:100',
            'phone' => 'required|unique:doctors|max:11',
            'age' => 'required|max:2',
            'specialist' => 'required|max:100',
            'address' => 'required|max:255'
        ];
    }
}
