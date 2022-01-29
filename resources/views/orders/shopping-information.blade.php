@extends('layouts.structure.web')
@section('title')
    Datos de envio -
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
            <p class="text-xl mr-1 font-semibold">Datos de env&iacute;o</p>
        </div>
    </div>
    <div class="container mx-auto">
        @livewire('orders.form-shipping-information')
    </div>
@endsection
