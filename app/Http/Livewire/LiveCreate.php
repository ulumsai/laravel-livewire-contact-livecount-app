<?php

namespace App\Http\Livewire;

use App\Models\LiveKomitmen;
use Livewire\Component;

class LiveCreate extends Component
{

    public $name;
    public $name2;
    public $nominal;
    public $nominal2;

    public function render()
    {
        $names = [
            'Ikhwan' => 'Ikhwan',
            'Akhwat' => 'Akhwat',
            '-' => 'Lainnya'
        ];
        $nominal = [
            '10000000' => '10 Juta',
            '7500000' => '7.5 Juta',
            '5000000' => '5 Juta',
            '3000000' => '3 Juta',
            '2000000' => '2 Juta',
            '1000000' => '1 Juta',
            '500000' => '500 Ribu',
            '250000' => '250 Ribu',
            '-' => 'Lainnya'
        ];
        return view('livewire.live-create', [
            'listName' => $names,
            'listNominal' => $nominal
        ]);
    }

    function store() 
    {
        $this->name = $this->name == '-' ? $this->name2 : $this->name;
        $this->nominal = $this->nominal == '-' ? $this->nominal2 : $this->nominal;

        $this->validate([
            'name' => 'required|min:3',
            'nominal' => 'required|numeric'
        ]);

        $komitmen = LiveKomitmen::create([
            'name' => $this->name,
            'nominal' => $this->nominal
        ]);
    
        $this->resetInput();

        $this->emit('komitmenStored', $komitmen);
        $this->emit('komitmenShow');
        $this->emit('remove_alert');
    }

    private function resetInput() 
    {
        $this->name=null;
        $this->nominal=null;
        
    }
}
