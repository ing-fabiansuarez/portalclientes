<select {{$attributes->merge([ 'class'=>"w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"]) }}>
    <option value="">-- Seleccione el tipo de Identificación  --</option>
    @foreach($types as $type))
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
</select>