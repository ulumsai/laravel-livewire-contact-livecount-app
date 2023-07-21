@extends('layouts.app2')

@section('content')
<main>
  <div class="ms-5 me-5">
        <div class="row">
            <div class="col-md-8 full-height">
                <div class="d-flex justify-content-center align-items-center" style="height: 100%; border: 1px solid #ccc;">
                    <livewire:live-show></livewire:live-show>
                </div>
            </div>
            <div class="col-md-4 full-height2">
                <div class="card">
                    <div class="card-header fw-bold h5">{{ __('DAFTAR KOMITMEN MASUK') }}</div>
    
                    <div class="card-body full-height2">
                        <livewire:live-index></livewire:live-index>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-8">
                    <livewire:live-create></livewire:live-create>
                </div>
            </div>
        </div>
    </footer>
  </main>
@endsection
