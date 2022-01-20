@extends('layouts.structure.web')
@section('title')
    Listado de usuarios -
@endsection
@push('css')
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
>>>>>>> ivann
    <style>
        thead,
        th {
            background-color: #D290F4;
            font-style: italic;
            color: white;
<<<<<<< HEAD
=======
            text-align: center;
>>>>>>> ivann
        }

        table tbody tr:nth-child(odd) {
            background-color: #fff;
<<<<<<< HEAD
            color: black
=======
            color: black;
>>>>>>> ivann
        }

        table tbody tr:nth-child(even) {
            background-color: #e9bdff;
<<<<<<< HEAD
            color: rgb(0, 0, 0)
=======
            color: rgb(0, 0, 0);
>>>>>>> ivann
        }

    </style>
@endpush

@section('content')
<<<<<<< HEAD
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
=======
    @livewire('user.show-users')
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script --}}>
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
                    /* $('#resp').html(data.var); */
                }
            });
        })
    </script>
@endpush
>>>>>>> ivann
