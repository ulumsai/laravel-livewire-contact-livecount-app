<div class="container">
    @if (session()->has('message'))
        <div id="info" class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <hr>

    <table class="table table-wrapper full-height3">
        <thead class="table-dark">
            <tr>
                <th scope="col" width="30px">#</th>
                <th scope="col" width="200px">Name</th>
                <th scope="col" width="200px">Nominal</th>
                <th scope="col" width="20px">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($komitmens as $key => $kom)
            <tr>
                <td class="h5">{{ $key+=1 }}</td>
                <td class="h5">{{ $kom->name }}</td>
                <td class="h5 fw-bold">Rp. {{ number_format($kom->nominal,2) }}</td>
                <td>
                    <button wire:click="delKomitmen({{ $kom->id }})" class="btn btn-sm btn-danger text-white">D</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@section('scripts')
<script>
    $(function(){
        window.livewire.on('remove_alert',()=>{
            setTimeout(function(){ 
                $(".alert-success").fadeOut('fast');
            }, 2000); // 3 secs
        });
    });
</script>
@endsection