<div {{$attributes->merge([ 'class'=>"relative inline-block w-full text-gray-700"]) }}>
    <select class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
        @foreach($roles as $rol))
        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
        @endforeach
    </select>
</div>