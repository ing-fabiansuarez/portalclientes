<div class="card bg-gray-200 p-6 grid grid-cols-12 gap-4">
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Departamento</label>
        <select type="text" class="ul-form-input rounded-full" placeholder="First Name" wire:model="department">
            <option value="0">-- Seleccionar --</option>
            @foreach ($departments as $dept)
                <option value="{{ $dept->id_departament }}">{{ $dept->name_departament }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Ciudad</label>
        <select type="text" class="ul-form-input rounded-full" placeholder="First Name">
            <option value="" selected>-- Seleccionar --</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id_city }}">{{ $city->name_city }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Direcci&oacute;n</label>
        <input type="text" class="ul-form-input rounded-full" />
    </div>
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Barrio</label>
        <input type="text" class="ul-form-input rounded-full" />
    </div>
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Transportadora</label>
        <select type="text" class="ul-form-input rounded-full">
            @foreach ($transporters as $transporter)
                <option value="{{ $transporter->id }}">{{ $transporter->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-span-12 md:col-span-6">
        <label for="" class="">Valor Flete</label>
        <div class="card p-3 border-primary-pera text-xl">
            <b>$ {{ number_format($flete, 0, ',', '.') }}</b>
        </div>
    </div>
    <div class="col-span-12 md:col-span-12 text-center">
        <a href="{{ route('order.createOrder') }}" class="mr-2 btn btn-primary raised text-xl" type="button"><b>Generar
                Pedido</b></a>
    </div>
</div>
