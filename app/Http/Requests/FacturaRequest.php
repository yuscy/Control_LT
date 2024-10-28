<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'factura_no' => 'string',
			'torre_vano' => 'string',
			'tipo' => 'string',
			'cuerpo' => 'string',
			'pata' => 'string',
			'cimentacion_pata' => 'string',
			'item_contrato' => 'string',
			'unidad_medida' => 'string',
			'vigencia_precio_unitario' => 'string',
			'ciudad_municipio' => 'string',
			'nombre_soporte' => 'string',
			'actividad_simple' => 'string',
			'comentario' => 'string',
        ];
    }
}
