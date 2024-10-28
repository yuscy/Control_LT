<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = ['factura_no', 'torre_vano', 'actividad_simple', 'unidad_medida', 'precio_unitario', 'cantidad_obra_facturar', 'subtotal_costo_directo', 'created_at', 'updated_at'];
}


// /**
//  * Class Factura
//  *
//  * @property $id
//  * @property $factura_no
//  * @property $torre_vano
//  * @property $tipo
//  * @property $cuerpo
//  * @property $pata
//  * @property $cimentacion_pata
//  * @property $item_contrato
//  * @property $unidad_medida
//  * @property $precio_unitario
//  * @property $vigencia_precio_unitario
//  * @property $cantidad_total_obra
//  * @property $porcentaje_a_facturar
//  * @property $cantidad_obra_facturar
//  * @property $subtotal_costo_directo
//  * @property $ciudad_municipio
//  * @property $nombre_soporte
//  * @property $actividad_simple
//  * @property $valor_admin
//  * @property $valor_utilidad
//  * @property $subtotal_antes_iva
//  * @property $comentario
//  * @property $created_at
//  * @property $updated_at
//  *
//  * @package App
//  * @mixin \Illuminate\Database\Eloquent\Builder
//  */
// class Factura extends Model
// {
    
//     protected $perPage = 20;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = ['factura_no', 'torre_vano', 'tipo', 'cuerpo', 'pata', 'cimentacion_pata', 'item_contrato', 'unidad_medida', 'precio_unitario', 'vigencia_precio_unitario', 'cantidad_total_obra', 'porcentaje_a_facturar', 'cantidad_obra_facturar', 'subtotal_costo_directo', 'ciudad_municipio', 'nombre_soporte', 'actividad_simple', 'valor_admin', 'valor_utilidad', 'subtotal_antes_iva', 'comentario'];


// }
