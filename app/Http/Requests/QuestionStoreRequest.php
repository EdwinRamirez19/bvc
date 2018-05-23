<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest
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
            'conf1'=>'required',
            'conf2'=> 'required',
            'conf3'=>'required',
            'tem1'=> 'required',
            'tem2'=>'required',
            'tem3'=>'required',
            'log1'=>'required',
            'log2'=> 'required',
            'log3'=>'required',
            'sugerencia'=> 'required|max:250',
            'enterar'=>'required',
            'medios'=>'required|max:250',
            'informacion'=>'required',
            'medios1'=>'required|max:250',
            'validar1'=>'required',
            'cursos'=>'required|max:250',
            'hora'=>'required',
            'validar2'=> 'required',
            'hora1'=>'required',
            'temas'=>'required|max:250',
        ];
    }
}


