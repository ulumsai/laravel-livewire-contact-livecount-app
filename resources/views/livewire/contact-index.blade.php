<div class="container">

    @if (session()->has('message'))
        <div id="info" class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($statusUpdate)
    <livewire:contact-update></livewire:contact-update>
    @else
    <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)
            <tr>
                <th scope="row" class="fw-bold">{{ $key+=1 }}</th>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $contact->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="delContact({{ $contact->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $contacts->links() !!}
    </div>
</div>

@section('scripts')
<script>
    $(function(){
        window.livewire.on('alert_remove',()=>{
            setTimeout(function(){ $(".alert-success").fadeOut('fast');
            }, 3000); // 3 secs
        });
    });
</script>
@endsection