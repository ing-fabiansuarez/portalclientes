<select
    {{ $attributes->merge(['class' => 'w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline']) }}>
    <option value="">-- Seleccione el producto --</option>
    @foreach ($produts as $produt))
        <option value="{{ $produt->id }}">{{ $produt->name_product }}</option>
    @endforeach
</select>
