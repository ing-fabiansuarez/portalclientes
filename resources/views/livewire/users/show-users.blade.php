<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Documento
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Rol
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Telefono
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                    alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $user->name }}.{{ $user->surname }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $user->identify_number }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $user->rol_id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Telefono
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        f
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="py-12">
        <div class="w-full flex items-center w-full justify-center" id="button">
            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">Open Modal</button>
        </div>
        <div class="h-full w-full absolute flex items-center justify-center top-0 lg:mx-auto md:px-28 md:py-10 px-4 py-9" id="modal">
            <div class="bg-black bg-opacity-70 w-full h-full absolute" onclick="modalHandler()"></div>
            <div class="bg-white dark:bg-gray-800 border border-gray-300 xl:w-2/6 w-full relative z-30 xl:px-14 lg:px-28 md:px-16 px-4 py-10 flex flex-col items-center justify-center">
                <div>
                   <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal7-svg1.svg" alt="logo"/>
                   <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal7-svg1dark.svg" alt="logo"/>
                </div>
                <div class="mt-14 text-center">
                    <p class="text-base leading-4 text-gray-600 dark:text-white">Welcome to thecrib</p>
                    <h1 class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-white mt-3">ENJOY 10% OFF</h1>
                    <p class="text-base leading-4 mt-6 text-gray-600 dark:text-white">Enter your Email to get 10% of discount</p>
                </div>
                <div class="w-full mt-8">
                    <input placeholder="Email address" type="email" class="w-full py-4 focus:outline-none text-base leading-4 text-gray-600 dark:placeholder-white dark:text-white border-gray-400 border-b dark:bg-transparent" />
                    <button role="button" aria-label="unlock ten percent off" class="text-base font-medium leading-4 py-4 w-full bg-gray-800  hover:bg-gray-900 text-white  uppercase mt-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 hover:bg-gray-700 dark:bg-white dark:hover:bg-gray-100 dark:text-gray-900 dark:hover:text-gray-900">unlock 10% off</button>
                </div>
                <div class="flex items-center justify-center">
                    <button role="button" aria-label="no thanks" class="mt-4 text-base font-semibold leading-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 underline text-gray-800 capitalize hover:text-gray-600 dark:text-white" onclick="modalHandler()">No, Thanks</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let modal = document.getElementById("modal");
        
        function modalHandler(val) {
            console.log(val);
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>



</div>
