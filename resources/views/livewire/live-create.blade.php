<div>
    {!! Form::model('contact', ['route'=>'livecount', 'class'=>'','wire:submit.prevent'=>'store','method'=>'POST']) !!}
    <div class="row">
        <div class="col">
            {!! Form::select('name', $listName,'', ['class'=>"form-control form-control-lg bg-white mb-2 ".($errors->has('name') ? 'is-invalid' : ''),'placeholder'=> 'Name','wire:model'=>'name']) !!}
        </div>
        <div class="col">
            {!! Form::select('nominal', $listNominal,'', [ 'class'=>"form-control form-control-lg bg-white mb-2 ".($errors->has('nominal') ? 'is-invalid' : ''), 'placeholder'=> 'Nominal', 'wire:model'=>'nominal']) !!}
        </div>
    </div>
    @if ($name == '-')
        <div class="row" id="freetext">
            <div class="col">
                {!! Form::text('name2','', ['class'=>"form-control form-control-lg bg-white mb-2 ".($errors->has('name2') ? 'is-invalid' : ''),'placeholder'=> 'Name','wire:model'=>'name2']) !!}
            </div>
            <div class="col">
                {!! Form::number('nominal2','', [ 'class'=>"form-control form-control-lg bg-white mb-2 ".($errors->has('nominal2') ? 'is-invalid' : ''), 'placeholder'=> 'Nominal', 'wire:model'=>'nominal2']) !!}
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col">
            {!! Form::submit('Simpan', ['class'=>'mb-3 mt-2 btn btn-lg btn-primary float-end']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>

@section('scripts')
<script>
    $(function(){
        
    });
</script>
@endsection