<select {{$attributes->merge([ 'class'=>"w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"]) }}>
    <option value="">-- Seleccione el Rol --</option>
    @foreach($roles as $rol))
    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
    @endforeach
</select>