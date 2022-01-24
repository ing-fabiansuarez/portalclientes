@extends('layouts.structure.web')
@section('title')
    Crear Pedido -
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="header-custom p-5 breadcrumb flex items-center border-b rounded-lg border-gray-300 pb-4 mb-6">
            <p class="text-xl mr-1 font-semibold">¿Qu&eacute; tipo de producto quieres agregar a tu pr&oacute;ximo pedido?
            </p>

        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
    @livewire('categories.show-categories')
@endsection
