<select {{$attributes->merge([ 'class'=>"w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"]) }}>
    <option value="">-- Seleccione el Rol --</option>
    @foreach($roles as $rol))
    @if(old('id_type_rol') == $rol->id)
    <option value="{{ $rol->id }}" selected>{{ $rol->name }}</option>
    @else
    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
    @endif
   
    @endforeach
</select>