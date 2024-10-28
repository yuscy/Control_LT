<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Factura;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class TableFacturas extends Component
{
    public $facturas;
    public $factura_no, $torre_vano, $actividad_simple, $unidad_medida, $precio_unitario, $cantidad_obra_facturar, $subtotal_costo_directo; // Campos del formulario
    public $selectedTorre = null;
    public $selectedActividad = null;
    public $selectedPata = null;
    public $tipo;
    public $cuerpo;
    public $municipio;
    public $torre_vano_text = '';
    public $actividad_full;
    public $vigencia;
    public $cimentacion;
    public $torreYP;
    public $pedestal;
    public $plano;
    public $cant_obra_ing;
    public $actividadYP;


    public function updatedselectedActividad($value)
    {
        if (is_numeric($value)) {
            $actividad = DB::table('actividades')->find($value);
            $this->actividad_full = $actividad ? $actividad->Actividad : '';
            $this->unidad_medida = $actividad ? $actividad->Und_medida : '';
            $this->precio_unitario = $actividad ? $actividad->Precio_unit : '';
            $this->vigencia = $actividad ? $actividad->Vigencia_precio : '';
            $this->actividadYP = $actividad ? $actividad->Actividad_resumida : '';
            $this->cant_obra_ing = '';
            $this->selectedPata = '';
            $this->cimentacion = '';
            $this->pedestal = '';
            $this->plano = '';
        } else {
            $this->actividad_full = '';
            $this->unidad_medida = '';
            $this->precio_unitario = '';
            $this->vigencia = '';
        }
    }

    public function updatedselectedTorre($value)
    {
        if (is_numeric($value)) {
            $torre = DB::table('torres')->find($value);
            $this->torre_vano_text = $torre ? $torre->Torre : '';
            $this->tipo = $torre ? $torre->Tipo : '';
            $this->cuerpo = $torre ? $torre->Cuerpo : '';
            $this->municipio = $torre ? $torre->Ciudad : '';
            $this->selectedPata = '';
            $this->cimentacion = '';
            $this->pedestal = '';
            $this->plano = '';
            $this->cant_obra_ing = '';
            $this->torreYP = $value;

            // dd($torreYP);
        } else {
            $this->torre_vano_text = '';
            $this->cuerpo = '';
            $this->municipio = '';
            $this->tipo = '';
            
        }
    }

    // dd($this->selectedTorre); // Depuración

    public function updatedselectedPata($value)
    {
        // dd($this->torreYP);
        if (ctype_alpha($value)) { // Verifica si $value contiene solo letras
            $torre = DB::table('torres')->find($this->torreYP);

            $this->cimentacion = $torre ? $torre->{'Cim_P' . $value} : '';
            $this->pedestal = $torre ? $torre->{'Ped_P' . $value} : '';
            $this->plano = $torre ? $torre->{'Plano_P' . $value} : '';

            // $plano = DB::table('planos')->find($this->plano);
            $plano = DB::table('planos')->where('Plano', $this->plano)->first();

            // dd($plano);

            if ($plano) {
                $id_plano = $plano->id;
                
                $this->cant_obra_ing = $plano ? $plano-> {$this->actividadYP}: '';
                // echo "El ID de la torre '{$nombreTorre}' es: {$id}";
            } else {
                $this->cant_obra_ing = '';
            }


            // dd($this->cimentacion); // Depuración
        } else {
            $this->cimentacion = '';
            $this->pedestal = '';
            $this->plano = '';
        }        
    }

    protected $rules = [
        'factura_no' => 'required',
        'torre_vano' => 'required',
        'actividad_simple' => 'required',
        'unidad_medida' => 'required',
        'precio_unitario' => 'required',
        'cantidad_obra_facturar' => 'required',
        'subtotal_costo_directo' => 'required',
    ];

    // public function mount()
    // {
    //     // Cargar los elementos iniciales desde la base de datos en orden descendente
    //     $this->facturas = Factura::orderBy('created_at', 'desc')->get();
    //     $this->selectedTorre = null; // Inicializar la torre seleccionada
    //     $this->cuerpo = null; // Inicializar el cuerpo de la torre
    //     $this->torre_vano_text = $this->selectedTorre ?? '';
    // }

    public function submit()
    {
        // Validar el formulario
        $this->validate();

        // Guardar el nuevo elemento en la base de datos
        Factura::create([
            'factura_no' => $this->factura_no,
            'torre_vano' => $this->torre_vano,
            'actividad_simple' => $this->actividad_simple,
            'unidad_medida' => $this->unidad_medida,
            'precio_unitario' => $this->precio_unitario,
            'cantidad_obra_facturar' => $this->cantidad_obra_facturar,
            'subtotal_costo_directo' => $this->subtotal_costo_directo,
        ]);

        // Actualizar la lista de items
        $this->facturas = Factura::orderBy('created_at', 'desc')->get();

        // Limpiar el formulario
        $this->reset(['factura_no', 'torre_vano', 'actividad_simple', 'unidad_medida', 'precio_unitario', 'cantidad_obra_facturar', 'subtotal_costo_directo']);
    }

    public function render()
    {
        $actividades = DB::table('actividades')->get();
        $torres = DB::table('torres')->get();

        return view('livewire.table-facturas', compact('actividades', 'torres'));
    }

    
}