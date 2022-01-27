@extends('layouts.structure.web')
@section('title')
    Agregar -
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
            <p class="text-xl mr-1 font-semibold">¿Qu&eacute; productos quieres agregar?</p>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
    @livewire('cart.show-references-table')

@endsection
