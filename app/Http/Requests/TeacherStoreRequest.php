<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            'nombres_prof' => 'required|max:100',
            'apellidos_prof' => 'required|max:100',
            'identificacion_prof' => 'required|max:20',
            'celular_prof' => 'required|max:15',
            'correo_prof' =>'required|max:120',

        ];
    }
}
