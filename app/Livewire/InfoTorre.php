<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class InfoTorre extends Component
{
    public $id_torre;
    public $cuerpo;
    public $isVisible = true;

    public function buscar_torre($id_torre)
    {
        if (is_numeric($id_torre)) {
            $cuerpo = DB::table('torres')->where('id_torre', $id_torre)->first();
            $this->id_torre = $id_torre;
            $this->cuerpo = $cuerpo;
        } else {
            $this->id_torre = '';
            $this->cuerpo = '';
        }
    }

    public function render()
    {
        return view('livewire.info-torre');
    }
}
