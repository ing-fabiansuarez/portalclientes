@extends('layouts.structure.web')
@section('title')
Inicio -
@endsection


@section('content')
<div class="container mx-auto">
    <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
        <p class="text-xl mr-1 font-semibold">Dashboard V1</p>
        <ul>
            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">Dashboards</a></li>
            <li>Dashboard V1</li>
        </ul>
    </div>
</div>
<!-- Start:: content (Your custom content)-->
<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="flex align-center"><i class="i-Add-User text-6xl text-primary-200"></i>
                        <div class="m-auto">
                            <p class="text-gray-400">New Leads</p>
                            <p class="text-xl text-primary-600">205</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="flex align-center"><i class="i-Financial text-6xl text-primary-200"></i>
                        <div class="m-auto">
                            <p class="text-gray-400">Sales</p>
                            <p class="text-xl text-primary-600">$4021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="flex align-center"><i class="i-Checkout-Basket text-6xl text-primary-200"></i>
                        <div class="m-auto">
                            <p class="text-gray-400">Orders</p>
                            <p class="text-xl text-primary-600">80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="flex align-center"><i class="i-Money-2 text-6xl text-primary-200"></i>
                        <div class="m-auto">
                            <p class="text-gray-400">Expense</p>
                            <p class="text-xl text-primary-600">$1200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">This Year Sales</div>
                    <div id="dashboard-v1-1"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card h-full">
                <div class="card-body">
                    <div class="card-title">Sales by Countries</div>
                    <div id="dashboard-v1-2"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card h-full">
                <div class="card-body">
                    <p class="text-gray-400 mb-1 text-sm">Last Month Sales</p>
                    <h1 class="font-semibold text-primary-500 text-2xl">$40250</h1>
                </div>
                <div id="dashboard-v1-3"></div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6">
            <div class="card h-full">
                <div class="card-body">
                    <p class="text-gray-400 mb-1 text-sm">Last Week Sales</p>
                    <h1 class="font-semibold text-warning-500 text-2xl">$10250</h1>
                </div>
                <div id="dashboard-v1-4"></div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-6 lg:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">Top Selling Products</div>
                    <div class="flex flex-col items-center mb-4 md:flex-row"><img class="avatar-md mr-2 rounded" src="./assets/images/products/headphone-4.jpg" alt="" />
                        <div class="flex-grow text-center md:text-left">
                            <h5> <a class="text-gray-800 hover:text-primary-500" href="http://">Wireless Headphone E23</a></h5>
                            <p class="text-gray-400 text-xs mb-3 md:mb-0">Lorem ipsum dolor sit amet consectetur.
                            <div class="flex justify-center mb-4 md:justify-start md:mb-0">
                                <p class="text-primary-500 text-sm mr-2">$450</p>
                                <p class="text-gray-400 line-through text-sm">$500</p>
                            </div>
                            </p>
                        </div>
                        <button class="btn btn-sm btn-primary-outline rounded-full" type="button">View Details </button>
                    </div>
                    <div class="flex flex-col items-center mb-4 md:flex-row"><img class="avatar-md mr-2 rounded" src="./assets/images/products/headphone-2.jpg" alt="" />
                        <div class="flex-grow text-center md:text-left">
                            <h5> <a class="text-gray-800 hover:text-primary-500" href="http://">Wireless Headphone Y902</a></h5>
                            <p class="text-gray-400 text-xs mb-3 md:mb-0">Lorem ipsum dolor sit amet consectetur.
                            <div class="flex justify-center mb-4 md:justify-start md:mb-0">
                                <p class="text-primary-500 text-sm mr-2">$550 </p>
                                <p class="text-gray-400 line-through text-sm">$600</p>
                            </div>
                            </p>
                        </div>
                        <button class="btn btn-sm btn-primary-outline rounded-full" type="button">View Details </button>
                    </div>
                    <div class="flex flex-col items-center mb-4 md:flex-row"><img class="avatar-md mr-2 rounded" src="./assets/images/products/headphone-3.jpg" alt="" />
                        <div class="flex-grow text-center md:text-left">
                            <h5> <a class="text-gray-800 hover:text-primary-500" href="http://">Wireless Headphone E09</a></h5>
                            <p class="text-gray-400 text-xs mb-3 md:mb-0">Lorem ipsum dolor sit amet consectetur.
                            <div class="flex justify-center mb-4 md:justify-start md:mb-0">
                                <p class="text-primary-500 text-sm mr-2">$250</p>
                                <p class="text-gray-400 line-through text-sm">$300</p>
                            </div>
                            </p>
                        </div>
                        <button class="btn btn-sm btn-primary-outline rounded-full" type="button">View Details </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body text-center"><img class="m-auto shadow-lg avatar-md rounded-full" src="./assets/images/faces/16.jpg" alt="" />
                    <p class="text-base mt-4">Jassica Hike</p>
                    <p class="text-base text-gray-400">UI/UX Designer</p>
                    <p class="my-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
                    <button class="btn mr-2 mt-4 btn-pill border capitalize btn-primary px-3 py-1 text-white text-sm" type="button">Contact</button>
                    <div class="mt-4"><a class="mr-2 hover:text-primary-600" href=""><i class="i-Linkedin-2"></i></a><a class="mr-2 hover:text-primary-600" href=""><i class="i-Facebook-2"></i></a><a class="hover:text-primary-600" href=""><i class="i-Twitter"></i></a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6">
            <div class="card">
                <div class="card-body text-center"><img class="m-auto shadow-lg avatar-md rounded-full" src="./assets/images/faces/2.jpg" alt="" />
                    <p class="text-base mt-4">James Hike</p>
                    <p class="text-base text-gray-400">VR Developer</p>
                    <p class="my-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
                    <button class="btn mr-2 mt-4 btn-pill border capitalize btn-primary px-3 py-1 text-white text-sm" type="button">Contact</button>
                    <div class="mt-4"><a class="mr-2 hover:text-primary-600" href=""><i class="i-Linkedin-2"></i></a><a class="mr-2 hover:text-primary-600" href=""><i class="i-Facebook-2"></i></a><a class="hover:text-primary-600" href=""><i class="i-Twitter"></i></a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 card xl:col-span-6 lg:col-span-12">
            <div class="flex justify-between mb-4 p-4">
                <div class="card-title">User Activity </div><span class="badge-pill text-white bg-warning-500 mr-3">Updated Daily</span>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="p-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xs text-gray-400">Pages / Visit </p>
                            <p class="text-lg font-normal mb-0">2065 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">New / user </p>
                            <p class="text-lg font-normal mb-0">465 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Last week </p>
                            <p class="text-lg font-normal mb-0">23456 </p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xs text-gray-400">Pages / Visit </p>
                            <p class="text-lg font-normal mb-0">1829 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">New / user </p>
                            <p class="text-lg font-normal mb-0">735 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Last week </p>
                            <p class="text-lg font-normal mb-0">92565 </p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xs text-gray-400">Pages / Visit </p>
                            <p class="text-lg font-normal mb-0">3165 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">New / user </p>
                            <p class="text-lg font-normal mb-0">165 </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Last week </p>
                            <p class="text-lg font-normal mb-0">32165</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title py-3">Recent Orders</div>
                </div>
                <div class="card-body">
                    <div class="dataTable-container borderless hover">
                        <table class="table-3">
                            <thead>
                                <tr>
                                    <th class="text-gray-500 font-semibold">Order Id</th>
                                    <th class="text-gray-500 font-semibold">Buyer Name</th>
                                    <th class="text-gray-500 font-semibold">Product</th>
                                    <th class="text-gray-500 font-semibold">Status</th>
                                    <th class="text-gray-500 font-semibold">Shipping Cost</th>
                                    <th class="text-gray-500 font-semibold">Date</th>
                                    <th class="text-gray-500 font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/speaker-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-2.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-primary-500 border border-primary-500 mr-3">Delivered</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-2.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-danger-500 border border-danger-500 mr-3">Shipped</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Susan</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-3.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-4.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-primary-500 border border-primary-500 mr-3">Delivered</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Chris</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/speaker-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/speaker-2.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-warning-500 border border-warning-500 mr-3">Pending</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dan</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/watch-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/watch-2.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-info-500 border border-info-500 mr-3">Processing</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jhon</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/watch-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/watch-2.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-info-500 border border-info-500 mr-3">Processing</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>jane</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-3.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-4.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-primary-500 border border-primary-500 mr-3">Pending</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Wilson</td>
                                    <td>
                                        <div class="flex"><img class="avatar rounded-full mr-2" src="assets/images/products/watch-1.jpg" alt="" /><img class="avatar rounded-full mr-2" src="assets/images/products/headphone-4.jpg" alt="" /></div>
                                    </td>
                                    <td> <span class="badge-pill text-primary-500 border border-primary-500 mr-3">Shipped</span></td>
                                    <td>3.34%</td>
                                    <td>12-02-20</td>
                                    <td>
                                        <button class="mr-2 btn btn-primary-outline rounded-full px-5 py-1" type="button">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start:: content (Your custom content)-->
@endsection