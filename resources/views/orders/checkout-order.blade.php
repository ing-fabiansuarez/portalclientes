@extends('layouts.structure.web')
@section('title')
    Checkout -
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
            <p class="text-xl mr-1 font-semibold">Revisa tu pedido</p>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-10">
                            <a href="https://colombia.payu.com/" class="btn ripple btn-primary" type="button">REALIZAR EL
                                PAGO</a>
                        </div>
                        <div class="grid grid-cols-12 gap-5 items-end mt-4">
                            <div class="col-span-12 xl:col-span-4 lg:col-span-4 md:col-span-12">
                                <div class="font-bold text-lg mb-2">Informaci&oacute;n del Pedido</div>
                                <p class="mb-1">N&uacute;mero de Pedido:</p>
                                <p class="font-bold">162856524555</p>
                            </div>
                            <div class="col-span-4"></div>
                            <div class="col-span-12 text-left md:text-right xl:col-span-4 lg:col-span-4 md:col-span-12">
                                <label for="">Fecha de la orden:</label>
                                <p class="font-bold">12/10/2020</p>
                            </div>
                            <div class="col-span-12">
                                <div class="border-b border-black"></div>
                            </div>
                            <div class="col-span-12 xl:col-span-4 lg:col-span-4 md:col-span-12">
                                <div class="font-bold text-lg mb-2">Cliente</div>
                                <p class="font-semibold mb-4">Fabian Enrique Suarez Carvajal</p>
                                <p class="font-semibold">DISTRIBUIDOR AUTORIZADO <br> fsuarez120@unab.edu.co</p>
                            </div>
                            <div class="col-span-4"></div>
                            <div class="col-span-12 text-left md:text-right xl:col-span-4 lg:col-span-4 md:col-span-12">
                                <div class="font-bold text-lg mb-2 text-left md:text-right">Datos de env&iacute;o</div>
                                <p class="font-semibold"><b>Pamplona - Norte de Santader</b><br> Calle 9 n 9-52,
                                    El centro. <br>
                                </p>
                            </div>
                            <div class="col-span-12 mt-10">
                                <div class="overflow-x-auto pr-10 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                    <div class="align-middle inline-block min-w-full">
                                        <table class="min-w-full basic-table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Producto </th>
                                                    <th>Referencia </th>
                                                    <th>Talla </th>
                                                    <th>Unit Price</th>
                                                    <th>Unit</th>
                                                    <th>Precio C/U</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">#1</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Speaker Razer</td>
                                                    <td>Speaker Razer</td>
                                                    <td>Speaker Razer</td>
                                                    <td>$200 </td>
                                                    <td>5</td>
                                                    <td>$1000</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">#2</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Laptop Razer</td>
                                                    <td>Speaker Razer</td>
                                                    <td>Speaker Razer</td>
                                                    <td>$700 </td>
                                                    <td>2</td>
                                                    <td>$1400</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">#3</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Tab</td>
                                                    <td>Speaker Razer</td>
                                                    <td>Speaker Razer</td>
                                                    <td>$200 </td>
                                                    <td>3</td>
                                                    <td>$600</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-9"></div>
                            <div class="col-span-12 md:col-span-3">
                                <div class="mt-5">
                                    <div class="flex justify-between mb-3">
                                        <p class="mr-10">Flete: </p>
                                        <p>$ 3.000</p>
                                    </div>
                                    <div class="flex justify-between mb-3">
                                        <p class="mr-10">Sub Total Productos: </p>
                                        <p>$ 9.000</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="mr-10 font-bold">Total General:</p>
                                        <p class="font-bold">$ 12.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
