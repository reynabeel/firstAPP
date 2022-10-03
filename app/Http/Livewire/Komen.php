<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Netizen;

class Komen extends Component
{
    public $nama;
    public $komentar; 
    public function simpan()
{
    $simpan = new Netizen();
    $simpan->nama = $this->nama;
    $simpan->komentar = $this->Komentar;
    $simpan->save(); 
}
    


    public function render()
    {
        return view('livewire.komen');
    }
}
