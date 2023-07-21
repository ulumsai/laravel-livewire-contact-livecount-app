<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $statusUpdate = false;

    protected $listeners = [
        'contactStored' => 'handelStored',
        'contactUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::paginate(5)
        ]);
    }

    function getContact($id) 
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);    
        $this->emit('getContact', $contact);
    }

    function handelStored($contact) 
    {
        session()->flash('message',"Contact ".$contact['name']." was stored!");
    }

    function handleUpdated($contact) 
    {
        $this->statusUpdate = false;
        session()->flash('message',"Contact ".$contact['name']." was updated!");
    }

    function delContact($id) {
        if($id){
            $contact = Contact::find($id);
            $contact->delete();
            session()->flash('message',"Contact ".$contact['name']." was deleted!");
            $this->emit('alert_remove');
        }
    }

}
