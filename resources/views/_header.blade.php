<div class="w-full bg-purple-700 py-5 border-solid border-b-2 border-white
            md:border-none relative"
>
    <svg
        id="menu-button"
        class="text-white absolute left-3 top-4 cursor-pointer md:hidden" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    <div class="md:max-w-5xl md:m-auto text-center md:text-left">
        <a  href="/"
            class="text-gray-50 text-2xl font-extrabold ml-2">
            Avto-oglasi
        </a>
    </div>
</div>

<li
    id="header-menu"
    class= "list-none bg-purple-500 md:bg-purple-600 hidden md:block"
    style="font-size: 0"
>
    <div class="md:flex md:justify-between md:max-w-5xl md:m-auto">

        <div>
            {{-- search ads button --}}
            <x-header-button href="/search">
                Išči oglase
            </x-header-button>

            <hr class="border-white mx-auto w-3/5 md:hidden">

            {{-- publish ad button --}}
            <x-header-button href="/createad">
                Objavi oglas
            </x-header-button>

            <hr class="border-white mx-auto w-3/5 md:hidden">

            @auth
            <x-header-button href="/my-ads">
                Moji oglasi
            </x-header-button>

            <hr class="border-white mx-auto w-3/5 md:hidden">
            @endauth
        </div>

        <div>
            {{-- display login button if guest, otherwise register button --}}
            @guest

            {{-- login button --}}
            <x-header-button href="/login" class="bg-purple-600">
                Prijava
            </x-header-button>

            {{-- register button --}}
            <x-header-button href="/register">
                Registracija
            </x-header-button>

            @else
            {{-- Logout form with button --}}
            <form method="POST" action="/logout" class="md:inline-block">
            @csrf

            <button
                class="w-full text-sm py-3 font-bold hover:bg-purple-700 focus:bg-purple-700
                    transition duration-300 ease-in-out text-center
                    md:w-auto md:bg-purple-600 md:border-solid md:border-0 text-gray-50
                    md:border-b-4 md:hover:bg-purple-600 md:px-4 md:pt-2 md:pb-1 md:inline-block
                    bg-purple-500 md:border-purple-600"
                type="submit"
            >
                Odjava
            </button>

            </form>
            @endguest
        </div>
    </div>
</li>
