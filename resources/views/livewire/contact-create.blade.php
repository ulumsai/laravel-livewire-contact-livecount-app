<div>
    {!! Form::model('contact', ['route'=>'home', 'class'=>'','wire:submit.prevent'=>'store','method'=>'POST']) !!}
    <div class="row">
        <div class="col">
            {!! Form::text('name', '', ['class'=>"form-control bg-white mb-2 ".($errors->has('name') ? 'is-invalid' : ''),'placeholder'=> 'Name','wire:model'=>'name']) !!}
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col">
            {!! Form::text('phone', '', [ 'class'=>"form-control bg-white mb-2 ".($errors->has('phone') ? 'is-invalid' : ''), 'placeholder'=> 'Phone', 'wire:model'=>'phone']) !!}
            @error('phone')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col">
            {!! Form::submit('Simpan', ['class'=>'mb-3 mt-2 btn btn-md btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
