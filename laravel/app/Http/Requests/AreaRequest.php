<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'area' => 'required|max:255',
            'situação' => 'required|max:255'
        ];
    }
    public function messages(){
        return [
        'area.required' => 'Campo área é obrigatório!',
        'area.max' => 'Campo Área aceita até 255 caracteres',        
        'situação.required' =>'Campo Situação é obrigatório!',
        'situação.max' => 'Campo Situação aceita até 255 caracteres'       
            ];
        }
    }
