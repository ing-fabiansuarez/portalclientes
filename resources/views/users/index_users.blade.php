@extends('layouts.structure.web')
@section('title')
    Listado de usuarios -
@endsection
@push('css')
    <style>
        thead,
        th {
            background-color: #D290F4;
            font-style: italic;
            color: white;
        }

        table tbody tr:nth-child(odd) {
            background-color: #fff;
            color: black
        }

        table tbody tr:nth-child(even) {
            background-color: #e9bdff;
            color: rgb(0, 0, 0)
        }

    </style>
@endpush

@section('content')
    @livewire('users.index-users');
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            $('.mi_checkbox').change(function() {
                //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
                var state = $(this).prop('checked') == true ? 1 : 0;
                var idp = $(this).data('permission');
                var idu = $(this).data('user');
                /* console.log("Estado" + state);
                console.log("User" + idu);
                console.log("Permiso id" + idp); */
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('users.edit_permissions') }}',
                    data: {
                        'state': state,
                        'idu': idu,
                        'idp': idp
                    },
                    success: function(data) {
                        console.log(data.var);
                        if (data.var == 1) {
                            toastr.success('Permiso activado');
                        } else {
                            toastr.warning('Permiso desactivado');
                        }
                    }
                });
            })
        </script>
    @endpush
@endsection
