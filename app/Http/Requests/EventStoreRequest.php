<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre_even'=>'required|max:200',
            'lugar_even'=> 'required|max:150',
            'descripcion_even'=>'required|max:250',
            'tipo_even'=> 'required|max:15',
            'organizador_even'=>'required|max:20',
            'fecha_even'=>'required',
            'hora_even'=>'required',
        ];
    }
}
