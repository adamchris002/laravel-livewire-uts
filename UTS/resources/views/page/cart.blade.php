@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <body class="antialiased">
    @livewire('order-page' , ['keranjang'=> $keranjang])
    </body>
@endsection