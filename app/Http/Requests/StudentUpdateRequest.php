<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Student;
class StudentUpdateRequest extends FormRequest
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
            'nombres_est'=> 'required|max:100',
            'apellidos_est'=> 'required|max:100',
            'identificacion_est'=> 'required|max:20',
            'celular_est'=> 'required|max:15',
            'correo_est'=> 'required|max:120',
            'firma_est'=> 'required|max:50',
            'id_inquests' => 'required',
            'autizacion_uso_datos_personales_est' => 'required'
        ];
    }
}
