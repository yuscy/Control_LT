<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Factura;

class TablaFacturas extends Component
{
    public $facturas;

    public function mount()
    {
        $this->facturas = Factura::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.tabla-facturas');
    }
}
