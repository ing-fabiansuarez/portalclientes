<div style="background-image: url('{{asset('corporative/background2.jpg')}}'); background-size: cover;" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class=" sm:max-w-md mr-2 ml-2 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg w-auto">
        {{ $slot }}
    </div>
</div>
