<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class TableEmpresas extends Component
{

    public $empresas = [];
    public $loading = false;

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        $this->loading = true;

        // Simula una consulta a la base de datos
        $this->empresas = Empresa::all();

        $this->loading = false;
    }

    public function render()
    {
        return view('livewire.table-empresas');
    }

}
