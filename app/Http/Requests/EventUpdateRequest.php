<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
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
            'nombre_even' => 'required|max:200',
            'lugar_even' => 'required|max:150',
            'descripcion_even' => 'required|max:250',
            'tipo_event' => 'required|max:15',
            'organizador_even' =>'required|max:20',
        ];
    }
}
