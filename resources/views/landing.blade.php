<x-layout>
    <x-canvas class="pt-4">
        <img
            src="{{ asset("storage/my-images/vehicles.svg") }}"
            style="width: 500px;"
            class="mx-auto"
        />

        <div class="md:flex md:justify-between mt-12 px-6">

            <a href="/search">
                <div class="w-full md:w-64 flex flex-col items-center px-2 py-4 bg-white rounded-lg
                    shadow-md mt-3 tracking-wide uppercase border border-blue cursor-pointer
                    hover:bg-purple-600 hover:text-white text-purple-600 ease-linear
                    transition-all duration-150"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.0" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    Išči oglase
                </div>
            </a>

            <a href="/createad">
                <div class="w-full md:w-64 flex flex-col items-center px-2 py-4 bg-white rounded-lg
                    shadow-md mt-3 tracking-wide uppercase border border-blue cursor-pointer
                    hover:bg-purple-600 hover:text-white text-purple-600 ease-linear
                    transition-all duration-150"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.0" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                    Objavi oglas
                </div>
            </a>

        </div>
    </x-canvas>
</x-layout>