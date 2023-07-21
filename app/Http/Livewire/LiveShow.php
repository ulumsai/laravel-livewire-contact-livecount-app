<?php

namespace App\Http\Livewire;

use App\Models\LiveKomitmen;
use Livewire\Component;

class LiveShow extends Component
{
    protected $listeners = [
        'komitmenShow' => 'handelShow'
    ];

    public function render()
    {
        return view('livewire.live-show', [
            'komitmens' =>LiveKomitmen::latest()->get(),
            'total' => LiveKomitmen::sum('nominal')
        ]);
    }

    function handelShow() {
    }
}
