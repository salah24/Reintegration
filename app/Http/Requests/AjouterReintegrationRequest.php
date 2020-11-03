<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjouterReintegrationRequest extends FormRequest
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
            'matricule'   =>'required|max:15|string',
            'nom'         =>'required|max:50|string',
            'prenom'      =>'required|max:50|string',
            'date_naiss'  =>'required|date',



        ];
    }
}
