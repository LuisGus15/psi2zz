<?php

namespace App\Http\Livewire\Productos;

use Livewire\Component;

class ProductoIndex extends Component
{
    public $modal = false;
    public function render()
    {
        return view('livewire.productos.producto-index');
    }
}
