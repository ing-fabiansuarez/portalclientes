@extends('layouts.structure.web')
@section('title')
Crear Pedido -
@endsection

@section('content')
<div class="container mx-auto">
    <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
        <p class="text-xl mr-1 font-semibold">Productos</p>
        <ul>
            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">Home</a></li>
            <li>Productos</li>
        </ul>
    </div>
</div>
<!-- Start:: content (Your custom content)-->
<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        <div class="col-span-12">
            <div class="flex justify-center items-center flex-wrap lg:justify-between">
                <div class="mb-2 flex">
                    <button class="mr-2 btn ripple ul-ecommerce-toggle-button btn-primary" type="button"> <span class="material-icons">menu</span></button>
                    <button class="mr-2 btn btn-primary-outline rounded-full" type="button"> <i class="i-Split-Four-Square-Window"></i></button>
                    <button class="mr-2 btn btn-primary-outline rounded-full" type="button"><i class="i-Align-Justify-All"></i></button>
                </div>
                <div class="mb-2">
                    <form class="flex">
                        <input class="rounded-l-lg p-3 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none" placeholder="Search..." />
                        <button class="px-4 bg-primary-500 rounded-r-lg border-t border-b border-r focus:outline-none"><span class="material-icons mt-2 text-white">search</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="ul-ecommerce-wrapper relative">
        <div class="ul-ecommerce-sidebar-overlay"></div>
        <div class="ul-ecommerce-sidebar">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <button class="btn btn btn-block btn-primary" type="button">View Cart <span class="badge float-right text-white bg-warning-500 mr-3">0</span></button>
                    </div>
                    <P class="text-primary-500 font-bold mt-5">Productos </P>
                    <div class="mt-3">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">Low To High</span>
                        </label>
                    </div>
                    <div class="mb-5">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">High To Low</span>
                        </label>
                    </div>
                    <!-- <P class="text-primary-500 font-bold mb-2">Category </P> -->
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">Mobile</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">Speaker</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">Furniture</span>
                        </label>
                    </div>
                    <div class="mb-5">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-radio bg-gray-200 border border-gray-200 text-primary-500" type="radio" name="accountType" value="personal" /><span class="ml-2">Watch</span>
                        </label>
                    </div>
                    <!-- <P class="text-primary-500 font-bold mb-2">Brand </P> -->
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">apple(3)</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">Huwaei(1)</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">sony(3)</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">samsung(2)</span>
                        </label>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">xiaomi(2)</span>
                        </label>
                    </div>
                    <div class="mb-5">
                        <label class="inline-flex items-center cursor-pointer">
                            <input class="form-checkbox rounded text-primary-500 border border-gray-200 bg-gray-200" type="checkbox" /><span class="ml-2">asus(2)</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-ecommerce-container">
            <div class="grid grid-cols-12 gap-5 mb-5">
                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                    <div class="card overflow-hidden relative"><img src="./assets/images/products/iphone-1.jpg" />
                        <div class="card-body">
                            <div class="mb-1"><a class="text-gray-600 hover:text-gray-700" href="#">Wireless Bluetooth V4.0 Portable Speaker with HD Sound and Bass apple</a></div>
                            <p class="font-semibold mb-4">Apple</p>
                            <div class="flex justify-between">
                                <div class="flex mb-2"><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-gray-300">grade</span></div>
                                <p class="font-bold text-base mb-5">$50</p>
                            </div>
                            <div class="flex justify-between flex-wrap">
                                <button class="btn ripple btn-primary mb-2" type="button">Add Cart</button>
                                <button class="btn btn-primary-outline mb-2" type="button">View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                    <div class="card overflow-hidden relative"><img src="./assets/images/products/iphone-1.jpg" />
                        <div class="card-body">
                            <div class="mb-1"><a class="text-gray-600 hover:text-gray-700" href="#">Wireless Bluetooth V4.0 Portable Speaker with HD Sound and Bass apple</a></div>
                            <p class="font-semibold mb-4">Apple</p>
                            <div class="flex justify-between">
                                <div class="flex mb-2"><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-gray-200">grade</span></div>
                                <div>
                                    <p class="font-bold text-base mb-5">$50</p>
                                </div>
                            </div>
                            <div class="flex justify-between flex-wrap">
                                <button class="btn ripple btn-primary mb-2" type="button">Add Cart</button>
                                <button class="btn btn-primary-outline mb-2" type="button">View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                    <div class="card overflow-hidden relative"><img src="./assets/images/products/iphone-1.jpg" />
                        <div class="card-body">
                            <div class="mb-1"><a class="text-gray-600 hover:text-gray-700" href="#">Wireless Bluetooth V4.0 Portable Speaker with HD Sound and Bass apple</a></div>
                            <p class="font-semibold mb-4">Apple</p>
                            <div class="flex justify-between">
                                <div class="flex mb-2"><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-gray-200">grade</span></div>
                                <div>
                                    <p class="font-bold text-base mb-5">$50</p>
                                </div>
                            </div>
                            <div class="flex justify-between flex-wrap">
                                <button class="btn ripple btn-primary mb-2" type="button">Add Cart</button>
                                <button class="btn btn-primary-outline mb-2" type="button">View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                    <div class="card overflow-hidden relative"><img src="./assets/images/products/iphone-1.jpg" />
                        <div class="card-body">
                            <div class="mb-1"><a class="text-gray-600 hover:text-gray-700" href="#">Wireless Bluetooth V4.0 Portable Speaker with HD Sound and Bass apple</a></div>
                            <p class="font-semibold mb-4">Apple</p>
                            <div class="flex justify-between">
                                <div class="flex mb-2"><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-gray-200">grade</span></div>
                                <div>
                                    <p class="font-bold text-base mb-5">$50</p>
                                </div>
                            </div>
                            <div class="flex justify-between flex-wrap">
                                <button class="btn ripple btn-primary mb-2" type="button">Add Cart</button>
                                <button class="btn btn-primary-outline mb-2" type="button">View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                    <div class="card overflow-hidden relative"><img src="./assets/images/products/iphone-1.jpg" />
                        <div class="card-body">
                            <div class="mb-1"><a class="text-gray-600 hover:text-gray-700" href="#">Wireless Bluetooth V4.0 Portable Speaker with HD Sound and Bass apple</a></div>
                            <p class="font-semibold mb-4">Apple</p>
                            <div class="flex justify-between">
                                <div class="flex mb-2"><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-warning-500">grade</span><span class="material-icons text-gray-200">grade</span></div>
                                <div>
                                    <p class="font-bold text-base mb-5">$50</p>
                                </div>
                            </div>
                            <div class="flex justify-between flex-wrap">
                                <button class="btn ripple btn-primary mb-2" type="button">Add Cart</button>
                                <button class="btn btn-primary-outline mb-2" type="button">View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection