<select {{$attributes->merge([ 'class'=>"w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"]) }}>
    <option value="">-- Seleccione el tipo de Identificación --</option>
    @foreach($types as $type))
    @if(old('id_type_identification') == $type->id)
    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
    @else
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endif
    @endforeach
</select>