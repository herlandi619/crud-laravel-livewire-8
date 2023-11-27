<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BelajarKedua extends Component
{
    public $keranjang = 0;

    public function render()
    {
        return view('livewire.belajar-kedua');
    }

    public function plus()
    {
        $this->keranjang++;
    }

    public function minus()
    {
        $this->keranjang--;
    }
}
