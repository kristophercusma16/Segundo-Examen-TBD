<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'nombre_alumno' => 'required|string|max:50',
            'curso' => 'required|string|max:50',
            'nota_1_alumno' => 'required|numeric|min:0|max:20',
            'nota_2_alumno' => 'required|numeric|min:0|max:20',
            'fecha_reg' => 'required|date',
            // Añade las reglas de validación necesarias
        ];
    }

    public function messages()
    {
        return [
            'nombre_alumno.required' => 'Es necesario ingresar nombre del alumno',
            'curso.required' => 'El curso es requerida',
            'nota_1_alumno.required' => 'Es necesario ingresar nota 1 ',
            'nota_2_alumno.required' => 'Es necesario ingresar nota 2 ',
            'fecha_reg.required' => 'Es necesario ingresar fecha de registro',
            ];
    }
}

