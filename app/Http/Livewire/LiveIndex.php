<?php

namespace App\Http\Livewire;

use App\Models\LiveKomitmen;
use Livewire\Component;

class LiveIndex extends Component
{

    protected $listeners = [
        'komitmenStored' => 'handlingStored',
    ];

    public function render()
    {
        return view('livewire.live-index',([
            'komitmens' => LiveKomitmen::latest()->get()
        ]));
    }

    public function handlingStored($komitmen) 
    {
        session()->flash('message',"Komitmen ".$komitmen['name']." was stored!");
        $this->emit('remove_alert');
    }

    function afterAct() {
        $this->emit('remove_alert');
    }

    public function delKomitmen($id) {
        if($id){
            $komitmen = LiveKomitmen::find($id);
            $komitmen->delete();
            session()->flash('message',"Komitmen ".$komitmen['name']." was deleted!");
            $this->emit('komitmenShow');
            $this->emit('remove_alert');
        }
    }

}
