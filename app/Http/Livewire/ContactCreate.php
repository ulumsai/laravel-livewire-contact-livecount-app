<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Object_;

class ContactCreate extends Component
{

    public $name;
    public $phone;
    // public $contacts;

    // public function mount($contacts) 
    // {
    //     $this->contacts = $contacts;
    // }

    public function render()
    {
        return view('livewire.contact-create');
    }

    function store() 
    {
        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|max:15'
        ]);

        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
    
        $this->resetInput();

        $this->emit('contactStored', $contact);
        $this->emit('alert_remove');
    }

    private function resetInput() 
    {
        $this->name=null;
        $this->phone=null;
        
    }
}
