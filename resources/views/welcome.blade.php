<!DOCTYPE html>
<html>
<!-- https://aatrox-demo.vercel.app/html/index.html#demos -->
<!-- https://aatrox-demo.vercel.app/ -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <link rel="mask-icon" href="assets/images/Aatrox-admin-logo.svg" color="#D290F4" />
    <meta name="msapplication-TileColor" content="#D290F4" />
    <meta name="theme-color" content="#ffffff" />
    <title>P E R A - Aatrox Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/tailwind.bundle.min.css" />
</head>

<body>
    <div class="loadscreen" id="preloader">
        <div class="loader spinner-bubble spinner-bubble-primary"></div>
    </div>
    <div class="app-admin-wrap-layout-2 layout-sidebar-large subheader-none">
        <div class="header-2-wrapper">
            <div class="flex items-center">
                <div class="logo flex justify-center"><svg class="fill-current text-primary-500" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M51.7498 27.8766C51.9863 28.0882 52.2228 28.1629 52.5837 28.138C55.8571 27.8766 59.118 27.9264 62.3541 28.5985C63.6734 28.8723 64.9803 29.1337 66.3867 29.5071C65.7644 29.9178 65.0798 29.9801 64.47 30.117C62.7399 30.5028 61.1094 31.15 59.479 31.7723C56.1931 33.0294 53.0816 34.635 50.0944 36.4646C45.5888 39.2401 41.4193 42.4762 37.4614 45.9861C33.9017 49.1474 30.6159 52.5453 27.467 56.0925C26.5957 57.0758 25.7991 58.1337 24.903 59.1045C23.509 60.623 21.7292 61.2702 19.688 60.9839C17.0494 60.6105 15.2197 59.0921 14.3236 56.6028C13.7137 54.935 14.0249 53.2423 14.7717 51.6492C16.2155 48.55 17.6717 45.4509 19.1403 42.3642C21.0073 38.4062 22.8867 34.4483 24.7537 30.4904C26.0854 27.6526 27.3923 24.8024 28.7365 21.9646C29.8193 19.6745 30.8897 17.3719 32.0472 15.1191C33.5906 12.1071 36.7146 10.6758 39.8511 11.0492C42.4399 11.3603 44.4562 12.6672 45.7258 15.0071C46.9082 17.1852 47.8541 19.4878 48.9494 21.7032C49.0489 21.9024 49.1361 22.114 49.2232 22.3131C49.0863 22.2882 48.9245 22.2135 48.8 22.2384C47.7545 22.4874 46.7215 22.7985 45.7507 23.259C43.4481 24.3792 41.2824 25.711 39.2661 27.2916C36.8142 29.2208 34.6983 31.4736 32.8313 33.9504C31.5618 35.6183 30.5039 37.4354 29.5331 39.3024C29.4584 39.4517 29.3464 39.626 29.4833 39.7504C29.67 39.9122 29.7571 39.6633 29.8691 39.5762C29.9687 39.5015 30.0309 39.3895 30.118 39.3024C31.3253 38.12 32.4579 36.8504 33.8022 35.8174C35.5446 34.4732 37.3245 33.1788 39.291 32.1457C40.7597 31.374 42.2159 30.6148 43.809 30.0921C45.0412 29.6938 46.2485 29.2582 47.5056 28.947C48.464 28.6981 49.4348 28.5612 50.3931 28.3122C50.8661 28.2251 51.3391 28.1629 51.7498 27.8766Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M44.6056 55.2841C40.573 58.4828 37.0755 62.1918 34.1009 66.3863C33.9515 66.4111 33.9017 66.4983 33.9017 66.6352C33.8768 66.6725 33.8519 66.7099 33.827 66.7596C33.6403 66.797 33.5408 66.9214 33.5159 67.1081L33.4785 67.133C33.4537 67.1704 33.4288 67.2077 33.4039 67.2451C33.379 67.2948 33.3665 67.3446 33.3416 67.3944C33.2296 67.4691 33.1425 67.5687 33.1425 67.718L33.1052 67.7554C32.9185 67.9047 32.8064 67.8674 32.7691 67.6184C32.9931 66.3365 33.4785 65.1292 33.9391 63.9343C34.9472 61.3455 36.1172 58.8189 37.4738 56.3918C38.5069 54.5373 39.6768 52.7699 40.909 51.0399C43.0871 47.9781 45.564 45.1652 48.3519 42.6386C50.6047 40.6099 53.0318 38.7927 55.7326 37.3738C56.0313 37.212 56.218 37.2244 56.3674 37.5605C57.8361 40.697 59.3047 43.8335 60.7858 46.9699C61.5824 48.6751 62.3665 50.3802 63.188 52.0605C64.9927 55.7571 62.9764 59.827 59.5163 61.1214C57.4129 61.9056 55.409 61.5695 53.5296 60.3996C52.7953 59.939 51.9987 59.603 51.3142 59.0554C51.3391 58.7317 51.2768 58.4081 51.3764 58.0721C51.6751 57.1635 51.9489 56.2549 52.2725 55.3463C52.621 54.3506 53.0442 53.3674 53.5545 52.4588C54.0275 51.6249 54.5004 50.7785 55.1476 50.0442C55.2099 49.9695 55.297 49.8699 55.1974 49.7828C55.1476 49.7455 55.0481 49.7455 54.9734 49.7579C54.5253 49.8202 54.127 50.0442 53.7039 50.1935C52.3472 50.6665 51.0528 51.2888 49.7957 51.9734C48.5884 52.633 47.4185 53.3674 46.2858 54.1639C45.7382 54.5622 45.203 54.9729 44.6056 55.2841Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M51.7498 27.8772C51.3391 28.1635 50.8661 28.2257 50.3932 28.3502C49.4348 28.5991 48.464 28.736 47.5056 28.985C46.2485 29.3086 45.0412 29.7317 43.809 30.13C42.2283 30.6403 40.7597 31.412 39.291 32.1837C37.3369 33.2167 35.5447 34.4987 33.8022 35.8553C32.4704 36.8884 31.3378 38.1704 30.118 39.3403C30.0309 39.4274 29.9562 39.5395 29.8691 39.6141C29.7571 39.7013 29.6575 39.9502 29.4833 39.7884C29.3464 39.6639 29.4584 39.4897 29.5331 39.3403C30.4914 37.4734 31.5618 35.6562 32.8313 33.9884C34.7107 31.5116 36.8142 29.2588 39.2661 27.3296C41.2824 25.7365 43.4481 24.4047 45.7507 23.297C46.709 22.824 47.7545 22.5253 48.8 22.2764C48.9245 22.2515 49.0738 22.3262 49.2232 22.3511C50.1069 24.1558 51.0279 25.9729 51.7498 27.8772Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M44.6056 55.2841C45.203 54.9605 45.7382 54.5498 46.2983 54.164C47.4309 53.3674 48.6009 52.6331 49.8082 51.9734C51.0652 51.2764 52.3597 50.6665 53.7163 50.1936C54.1395 50.0442 54.5378 49.8202 54.9858 49.758C55.0605 49.7455 55.1725 49.7331 55.2099 49.7829C55.3095 49.87 55.2223 49.9695 55.1601 50.0442C54.5129 50.7661 54.0399 51.6249 53.567 52.4588C53.0567 53.3674 52.6335 54.3382 52.285 55.3464C51.9614 56.255 51.6876 57.1635 51.3889 58.0721C51.2768 58.3957 51.3515 58.7318 51.3266 59.0554C49.9202 58.2464 48.5262 57.4498 47.1322 56.6408C46.4477 56.2425 45.7258 55.8816 45.0786 55.4086C44.9541 55.309 44.7674 55.3215 44.6056 55.2841Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M32.7691 67.6309C32.794 67.8798 32.906 67.9171 33.1051 67.7678C33.0304 68.2656 32.6944 68.5892 32.3832 69C32.4455 68.4897 32.4828 68.0167 32.7691 67.6309Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M33.5159 67.1206C33.5408 66.9339 33.6279 66.8094 33.827 66.7721C33.7897 66.9463 33.7399 67.1081 33.5159 67.1206Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M33.1425 67.7305C33.1425 67.5811 33.2296 67.4815 33.3417 67.4069C33.3417 67.5562 33.3043 67.6807 33.1425 67.7305Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M33.9017 66.6476C33.9017 66.5107 33.9515 66.4111 34.1009 66.3987C34.1009 66.5231 34.0138 66.5978 33.9017 66.6476Z" fill="none" class="fill-current text-primary-500" />
                            <path d="M33.4039 67.2451C33.4288 67.2077 33.4537 67.1704 33.4785 67.1331C33.4537 67.1704 33.4288 67.2077 33.4039 67.2451Z" fill="none" class="fill-current text-primary-500" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="52.3867" height="58" fill="white" transform="translate(14 11)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="mx-0 sm:mx-3">
                    <button class="material-icons menu-toggle cursor-pointer text-gray-500 align-middle focus:outline-none " type="button">menu</button>
                </div>
                <div class="ul-dropdown mega-menu mr-3" id="dropdownWrapper">
                    <button class="btn-sm mx-3 focus:outline-none dropdown-button" data-toggle="dropdown">
                        <div class="flex items-center">
                            <p class="mr-2">Mega Menu</p><i class="i-Arrow-Down"></i>
                        </div>
                    </button>
                    <div class="dropdown-menu">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-4 bg-gradient-to-r from-primary-500 to-primary-700">
                                <div class="p-4">
                                    <p class="text-2xl text-white font-semibold mb-3">Mega Menu Sidebar</p>
                                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.</p>
                                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                    <button class="btn btn-warning-outline rounded-full mr-2" type="button">Learn More</button>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="p-4">
                                    <p class="text-primary-500 border-b border-primary-500 inline-block mb-4">Features</p>
                                    <div class="menu-icon-grid flex justify-between flex-wrap"><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-Shop-4 text-2xl"> </i>Home</a><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-Library text-2xl"></i>UI Kits</a><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-Drop text-2xl"></i>Apps</a><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-File-Clipboard-File--Text text-2xl"> </i>Forms</a><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-Checked-User text-2xl"></i>Sessions</a><a class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24" href="#"><i class="i-Ambulance text-2xl"></i>Support</a></div>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="p-4">
                                    <p class="text-primary-500 border-b border-primary-500 inline-block mb-4">Components</p>
                                    <ul class="links">
                                        <li> <a class="hover:text-primary-500" href="#">Accordion </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Alerts </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Buttons </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Badges </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Carousels </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Lists </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Popover </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Tables </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Datatables </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Modals </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Sliders </a></li>
                                        <li> <a class="hover:text-primary-500" href="#">Tabs </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative text-gray-600 search-bar mx-3">
                    <input class=" bg-gray-100 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" type="search" name="search" placeholder="Search" />
                    <button class="absolute right-0 top-0 mt-2 mr-4 focus:outline-none" type="submit"><span class="material-icons text-gray-300">search</span></button>
                </div>
                <div>
                    <div class="search-ui">
                        <div class="container-fluid">
                            <div class="flex justify-between justify-items-center mb-3"><svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M51.7498 27.8766C51.9863 28.0882 52.2228 28.1629 52.5837 28.138C55.8571 27.8766 59.118 27.9264 62.3541 28.5985C63.6734 28.8723 64.9803 29.1337 66.3867 29.5071C65.7644 29.9178 65.0798 29.9801 64.47 30.117C62.7399 30.5028 61.1094 31.15 59.479 31.7723C56.1931 33.0294 53.0816 34.635 50.0944 36.4646C45.5888 39.2401 41.4193 42.4762 37.4614 45.9861C33.9017 49.1474 30.6159 52.5453 27.467 56.0925C26.5957 57.0758 25.7991 58.1337 24.903 59.1045C23.509 60.623 21.7292 61.2702 19.688 60.9839C17.0494 60.6105 15.2197 59.0921 14.3236 56.6028C13.7137 54.935 14.0249 53.2423 14.7717 51.6492C16.2155 48.55 17.6717 45.4509 19.1403 42.3642C21.0073 38.4062 22.8867 34.4483 24.7537 30.4904C26.0854 27.6526 27.3923 24.8024 28.7365 21.9646C29.8193 19.6745 30.8897 17.3719 32.0472 15.1191C33.5906 12.1071 36.7146 10.6758 39.8511 11.0492C42.4399 11.3603 44.4562 12.6672 45.7258 15.0071C46.9082 17.1852 47.8541 19.4878 48.9494 21.7032C49.0489 21.9024 49.1361 22.114 49.2232 22.3131C49.0863 22.2882 48.9245 22.2135 48.8 22.2384C47.7545 22.4874 46.7215 22.7985 45.7507 23.259C43.4481 24.3792 41.2824 25.711 39.2661 27.2916C36.8142 29.2208 34.6983 31.4736 32.8313 33.9504C31.5618 35.6183 30.5039 37.4354 29.5331 39.3024C29.4584 39.4517 29.3464 39.626 29.4833 39.7504C29.67 39.9122 29.7571 39.6633 29.8691 39.5762C29.9687 39.5015 30.0309 39.3895 30.118 39.3024C31.3253 38.12 32.4579 36.8504 33.8022 35.8174C35.5446 34.4732 37.3245 33.1788 39.291 32.1457C40.7597 31.374 42.2159 30.6148 43.809 30.0921C45.0412 29.6938 46.2485 29.2582 47.5056 28.947C48.464 28.6981 49.4348 28.5612 50.3931 28.3122C50.8661 28.2251 51.3391 28.1629 51.7498 27.8766Z" fill="none" class="fill-current text-primary-500" />
                                        <path d="M44.6056 55.2841C40.573 58.4828 37.0755 62.1918 34.1009 66.3863C33.9515 66.4111 33.9017 66.4983 33.9017 66.6352C33.8768 66.6725 33.8519 66.7099 33.827 66.7596C33.6403 66.797 33.5408 66.9214 33.5159 67.1081L33.4785 67.133C33.4537 67.1704 33.4288 67.2077 33.4039 67.2451C33.379 67.2948 33.3665 67.3446 33.3416 67.3944C33.2296 67.4691 33.1425 67.5687 33.1425 67.718L33.1052 67.7554C32.9185 67.9047 32.8064 67.8674 32.7691 67.6184C32.9931 66.3365 33.4785 65.1292 33.9391 63.9343C34.9472 61.3455 36.1172 58.8189 37.4738 56.3918C38.5069 54.5373 39.6768 52.7699 40.909 51.0399C43.0871 47.9781 45.564 45.1652 48.3519 42.6386C50.6047 40.6099 53.0318 38.7927 55.7326 37.3738C56.0313 37.212 56.218 37.2244 56.3674 37.5605C57.8361 40.697 59.3047 43.8335 60.7858 46.9699C61.5824 48.6751 62.3665 50.3802 63.188 52.0605C64.9927 55.7571 62.9764 59.827 59.5163 61.1214C57.4129 61.9056 55.409 61.5695 53.5296 60.3996C52.7953 59.939 51.9987 59.603 51.3142 59.0554C51.3391 58.7317 51.2768 58.4081 51.3764 58.0721C51.6751 57.1635 51.9489 56.2549 52.2725 55.3463C52.621 54.3506 53.0442 53.3674 53.5545 52.4588C54.0275 51.6249 54.5004 50.7785 55.1476 50.0442C55.2099 49.9695 55.297 49.8699 55.1974 49.7828C55.1476 49.7455 55.0481 49.7455 54.9734 49.7579C54.5253 49.8202 54.127 50.0442 53.7039 50.1935C52.3472 50.6665 51.0528 51.2888 49.7957 51.9734C48.5884 52.633 47.4185 53.3674 46.2858 54.1639C45.7382 54.5622 45.203 54.9729 44.6056 55.2841Z" fill="none" class="fill-current text-primary-500" />
                                        <path d="M51.7498 27.8772C51.3391 28.1635 50.8661 28.2257 50.3932 28.3502C49.4348 28.5991 48.464 28.736 47.5056 28.985C46.2485 29.3086 45.0412 29.7317 43.809 30.13C42.2283 30.6403 40.7597 31.412 39.291 32.1837C37.3369 33.2167 35.5447 34.4987 33.8022 35.8553C32.4704 36.8884 31.3378 38.1704 30.118 39.3403C30.0309 39.4274 29.9562 39.5395 29.8691 39.6141C29.7571 39.7013 29.6575 39.9502 29.4833 39.7884C29.3464 39.6639 29.4584 39.4897 29.5331 39.3403C30.4914 37.4734 31.5618 35.6562 32.8313 33.9884C34.7107 31.5116 36.8142 29.2588 39.2661 27.3296C41.2824 25.7365 43.4481 24.4047 45.7507 23.297C46.709 22.824 47.7545 22.5253 48.8 22.2764C48.9245 22.2515 49.0738 22.3262 49.2232 22.3511C50.1069 24.1558 51.0279 25.9729 51.7498 27.8772Z" fill="none" class="fill-current text-primary-500" />
                                        <path d="M44.6056 55.2841C45.203 54.9605 45.7382 54.5498 46.2983 54.164C47.4309 53.3674 48.6009 52.6331 49.8082 51.9734C51.0652 51.2764 52.3597 50.6665 53.7163 50.1936C54.1395 50.0442 54.5378 49.8202 54.9858 49.758C55.0605 49.7455 55.1725 49.7331 55.2099 49.7829C55.3095 49.87 55.2223 49.9695 55.1601 50.0442C54.5129 50.7661 54.0399 51.6249 53.567 52.4588C53.0567 53.3674 52.6335 54.3382 52.285 55.3464C51.9614 56.255 51.6876 57.1635 51.3889 58.0721C51.2768 58.3957 51.3515 58.7318 51.3266 59.0554C49.9202 58.2464 48.5262 57.4498 47.1322 56.6408C46.4477 56.2425 45.7258 55.8816 45.0786 55.4086C44.9541 55.309 44.7674 55.3215 44.6056 55.2841Z" fill="none" class="fill-current text-primary-500" />
                                        <path d="M32.7691 67.6309C32.794 67.8798 32.906 67.9171 33.1051 67.7678C33.0304 68.2656 32.6944 68.5892 32.3832 69C32.4455 68.4897 32.4828 68.0167 32.7691 67.6309Z" fill="bg-primary-500" />
                                        <path d="M33.5159 67.1206C33.5408 66.9339 33.6279 66.8094 33.827 66.7721C33.7897 66.9463 33.7399 67.1081 33.5159 67.1206Z" fill="bg-primary-500" />
                                        <path d="M33.1425 67.7305C33.1425 67.5811 33.2296 67.4815 33.3417 67.4069C33.3417 67.5562 33.3043 67.6807 33.1425 67.7305Z" fill="bg-primary-500" />
                                        <path d="M33.9017 66.6476C33.9017 66.5107 33.9515 66.4111 34.1009 66.3987C34.1009 66.5231 34.0138 66.5978 33.9017 66.6476Z" fill="bg-primary-500" />
                                        <path d="M33.4039 67.2451C33.4288 67.2077 33.4537 67.1704 33.4785 67.1331C33.4537 67.1704 33.4288 67.2077 33.4039 67.2451Z" fill="bg-primary-500" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="52.3867" height="58" fill="white" transform="translate(14 11)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-right">
                                    <button class="search-ui-close btn" type="button"><i class="i-Close-Window text-xl text-gray-600"></i></button>
                                </div>
                            </div>
                            <input class="search-input  text-5xl md:text-6xl font-semibold" type="text" placeholder="Type here" />
                            <div>
                                <h6 class="mt-5 mb-4">Search Result</h6>
                                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                                    <div class="flex"><img class="w-24 object-cover" src="assets/images/products/headphone-1.jpg" alt="" /></div>
                                    <div class="flex pl-2 flex-grow">
                                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row"><a class="hover:text-primary-500" href="">
                                                Headphone 1</a>
                                            <p>Gadget</p>
                                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span class="badge text-white bg-danger-500">Sale</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                                    <div class="flex"><img class="w-24 object-cover" src="assets/images/products/headphone-2.jpg" alt="" /></div>
                                    <div class="flex pl-2 flex-grow">
                                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row"><a class="hover:text-primary-500" href="">
                                                Headphone 1</a>
                                            <p>Gadget</p>
                                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span class="badge text-white bg-primary-500">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                                    <div class="flex"><img class="w-24 object-cover" src="assets/images/products/headphone-4.jpg" alt="" /></div>
                                    <div class="flex pl-2 flex-grow">
                                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row"><a class="hover:text-primary-500" href="">
                                                Headphone 1</a>
                                            <p>Gadget</p>
                                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span class="badge text-white bg-primary-500">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                                    <div class="flex"><img class="w-24 object-cover" src="assets/images/products/headphone-4.jpg" alt="" /></div>
                                    <div class="flex pl-2 flex-grow">
                                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row"><a class="hover:text-primary-500" href="">
                                                Headphone 1</a>
                                            <p>Gadget</p>
                                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span class="badge text-white bg-primary-500">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                                    <div class="flex"><img class="w-24 object-cover" src="assets/images/products/headphone-3.jpg" alt="" /></div>
                                    <div class="flex pl-2 flex-grow">
                                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row"><a class="hover:text-primary-500" href="">
                                                Headphone 1</a>
                                            <p>Gadget</p>
                                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span class="badge text-white bg-primary-500">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <nav class="relative z-0 inline-flex shadow-sm">
                                        <div><a class="pagination-link pagination-icon text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white" href="#" aria-label="Previous"><span class="material-icons">keyboard_arrow_left</span></a></div>
                                        <div><a class="pagination-link active text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white" href="#">1</a><a class="pagination-link text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white" href="#">2</a><a class="pagination-link text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white" href="#">3</a></div>
                                        <div><a class="pagination-link pagination-icon text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white" href="#" aria-label="Next"><span class="material-icons">keyboard_arrow_right</span></a></div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <button class="hidden mr-0 btn btn-sm hover:bg-gray-100 sm:block rounded p-1 md:mr-2" data-toggle="dropdown"><i class="i-Full-Screen text-gray-800 text-xl"></i></button>
                <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper">
                    <button class="btn btn-sm hover:bg-gray-100 rounded p-1 mr-2" data-toggle="dropdown"><i class="i-Safe-Box text-gray-800 text-xl"></i></button>
                    <div class="dropdown-menu">
                        <div class="menu-icon-grid flex justify-between flex-wrap"><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-Shop-4 text-2xl"> </i>Home</a><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-Library text-2xl"></i>UI Kits</a><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-Drop text-2xl"></i>Apps</a><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-File-Clipboard-File--Text text-2xl"> </i>Forms</a><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-Checked-User text-2xl"></i>Sessions</a><a class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i class="i-Ambulance text-2xl"></i>Support</a></div>
                    </div>
                </div>
                <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper">
                    <button class="btn btn-sm hover:bg-gray-100 rounded-pill badge-top-container p-1" data-toggle="dropdown"><span class="badge-count text-white bg-primary-500">3</span><i class="i-Bell text-xl header-icon text-gray-800"></i></button>
                    <div class="dropdown-menu">
                        <div class="max-h-64 relative" data-perfect-scrollbar="" data-suppress-scroll-x="true"><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700" href="#">
                                <div>
                                    <p class="text-sm">New Message</p>
                                    <p class="text-xs">How Are You ?</p>
                                </div>
                                <p class="text-xs text-gray-500">10s</p>
                            </a></div>
                    </div>
                </div>
                <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper">
                    <button class="btn btn-sm" data-toggle="dropdown"><img class="avatar rounded-full" src="assets/images/faces/1.jpg" /></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#"> Account Settings</a><a class="dropdown-item" href="#"> Billing History</a><a class="dropdown-item" href="#"> Sign Out</a></div>
                </div>
            </div>
        </div>
        <div class="main-content-wrap">
            <div class="side-content-wrap">
                <div class="sidebar-left open" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                    <ul class="navigation-left">
                        <li class="nav-item active" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="i-Bar-Chart text-3xl"></i>
                                <p>Inicio</p>
                            </a></li>
                        <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="#"><i class="i-Computer-Secure text-3xl"></i>
                                <p>Apps</p>
                            </a></li>
                        <li class="nav-item" data-item="components"><a class="nav-item-hold" href="#"><i class="i-Wallet text-3xl"></i>
                                <p>Components</p>
                            </a></li>
                        <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="#"><i class="i-Atom text-3xl"></i>
                                <p>Widgets</p>
                            </a></li>
                        <li class="nav-item" data-item="profile"><a class="nav-item-hold" href="#"><i class="i-Find-User text-3xl"></i>
                                <p>Profile</p>
                            </a></li>
                        <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i class="i-Administrator text-3xl"></i>
                                <p>Session</p>
                            </a></li>
                        <li class="nav-item" data-item="charts"><a class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                                <p>Charts</p>
                            </a></li>
                        <li class="nav-item"><a class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                                <p>Doc</p>
                            </a></li>
                    </ul>
                </div>
                <div class="sidebar-left-secondary shadow" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                    <ul class="mb-4 childNav" data-parent="dashboard" style="display:block">
                        <li class="active"><a href="dashboards/dashboard.dashboard.v1.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Version One</span></a></li>
                        <li><a href="dashboards/dashboard.dashboard.v2.html"><i class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Version Two</span></a></li>
                        <li><a href="dashboards/dashboard.dashboard.v3.html"><i class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Version Three</span></a></li>
                        <li><a href="dashboards/dashboard.dashboard.v4.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Version Four </span></a></li>
                        <li><a href="dashboards/dashboard.Analytic-2.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Version Five </span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="apps" style="display:none">
                        <li><a class="flex" href="apps/app.event-calendar.html"><i class="nav-icon i-Calendar-4 text-base mr-2"></i><span class="item-name">Calendar</span></a></li>
                        <li><a class="flex" href="apps/chat.html"><i class="nav-icon i-Book text-base mr-2"></i><span class="item-name">Chat</span></a></li>
                        <li class="dropdown-sidemenu"><a class="submenuLi"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Contact</span><i class="dd-arrow i-Arrow-Down"></i></a>
                            <ul class="submenu">
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.contact-table.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Contact Table</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.contact-list.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Contact List</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.contact-grid.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Contact Grid</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-sidemenu"><a class="submenuLi"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Ecommerce</span><i class="dd-arrow i-Arrow-Down"></i></a>
                            <ul class="submenu">
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.ecommerce.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Product</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.ecommerce-list.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Cart</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-500 flex items-center" href="apps/app.ecommerce-payment-view.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Checkout</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li><a class="flex" href="apps/app.inbox.html"><i class="nav-icon i-Add-Cart text-base mr-2"></i><span class="item-name">Inbox</span></a></li>
                        <li class="dropdown-sidemenu"><a class="submenuLi"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Invoice</span><i class="dd-arrow i-Arrow-Down"></i></a>
                            <ul class="submenu">
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-400 flex items-center" href="apps/app.create-invoice.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>Create Invoice</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-400 flex items-center" href="apps/app.print-invoice.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>print Invoice</p>
                                    </a></li>
                                <li class="hover:bg-gray-100"><a class="hover:text-primary-400 flex items-center" href="apps/app.invoice-list.html"> <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                                        <p>List Invoice</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li><a class="flex" href="apps/app.todo-list.html"><i class="nav-icon i-Book text-base mr-2"></i><span class="item-name">Todo List</span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="components" style="display:none">
                        <li><a href="components/components.animation.html"><i class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Animation</span></a></li>
                        <li><a href="components/components.alert.html"><i class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Alert</span></a></li>
                        <li><a href="components/components.avatar.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Avatars</span></a></li>
                        <li><a href="components/components.badge.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Badge</span></a></li>
                        <li><a href="components/components.buttons.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Buttons</span></a></li>
                        <li><a href="components/components.dropdown.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Dropdown</span></a></li>
                        <li><a href="datatables/basic/table.datatables.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Datatable Basic</span></a></li>
                        <li><a href="components/components.forms.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Forms</span></a></li>
                        <li><a href="components/components.modal.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Modal</span></a></li>
                        <li><a href="components/components.pagination.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Pagination</span></a></li>
                        <li><a href="components/components.progressbar.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Progressbar</span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="widgets" style="display:none">
                        <li><a href="widgets/widgets.charts.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Charts</span></a></li>
                        <li><a href="widgets/widgets.general.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">General</span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="profile" style="display:none">
                        <li><a href="pages/profile/profile.v1.html"><i class="nav-icon i-Find-User text-base mr-2"></i><span class="item-name">Profile Ver 1.0</span></a></li>
                        <li><a href="pages/profile/profile.v2.html"><i class="nav-icon i-Find-User text-base mr-2"></i><span class="item-name">Profile Ver 2.0</span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="sessions" style="display:none">
                        <li><a href="pages/sessions/signin.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In</span></a></li>
                        <li><a href="pages/sessions/signin2.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 2</span></a></li>
                        <li><a href="pages/sessions/signin3.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 3</span></a></li>
                        <li><a href="pages/sessions/signin4.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 4</span></a></li>
                        <li><a href="pages/sessions/signup.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 1</span></a></li>
                        <li><a href="pages/sessions/signup2.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 2</span></a></li>
                        <li><a href="pages/sessions/signup3.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 3</span></a></li>
                        <li><a href="pages/sessions/signup4.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 4</span></a></li>
                        <li><a href="pages/sessions/404.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">404</span></a></li>
                        <li><a href="pages/sessions/forgot.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">forgot</span></a></li>
                    </ul>
                    <ul class="mb-4 childNav" data-parent="charts" style="display:none">
                        <li><a href="charts/apexCharts/apexCharts.bar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Bar</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.bubble.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Bubble</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.area.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Charts</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.candleStick.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Candle Stick</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.column.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Column</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.line.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Line</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.pie.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Pie</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.radar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Radar</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.radialBar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">RadialBar</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.sparkline.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sparkline</span></a></li>
                        <li><a href="charts/apexCharts/apexCharts.scatter.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span></a></li>
                        <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                            <ul class="submenu">
                                <li><a class="hover:text-primary-500" href="#">Submneu One</a></li>
                                <li><a class="hover:text-primary-500" href="#">Submneu Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                            <ul class="submenu">
                                <li><a class="hover:text-primary-500" href="#">test One</a></li>
                                <li><a class="hover:text-primary-500" href="#">test Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start:: content body-->
            <div class="main-content-body pt-10 px-4 flex flex-col sm:px-8">
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
                <!-- Start:: Footer-->
                <div class="flex-grow mt-16"></div>
                <div class="footer bg-white shadow-md shadow-red-400 rounded-t-xl px-8 py-6 flex justify-between items-center flex-wrap shadow-6dp"><a class="btn btn-flat btn-primary">Buy Aatrox</a>
                    <p class="text-muted m-0">All rights reserved &copy; UI Lib 2021</p>
                </div>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->
        </div>
    </div>
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/js/pages/dropdown.min.js"></script>
    <script src="assets/js/pages/modal.min.js"></script>
    <script src="assets/js/pages/dashboard/dataSeries.script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="assets/js/pages/dashboard/dashboard.v1.script.js"></script>
</body>

</html>