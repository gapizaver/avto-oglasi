<div class="w-full bg-purple-700 py-5">
    <div class="md:max-w-5xl md:m-auto">
        <a  href="/"
            class="text-gray-50 text-2xl font-extrabold ml-2">
            Avto-oglasi
        </a>
    </div>
</div>

<li class= "border-solid border-b border-purple-800 list-none
            md:border-none md:bg-purple-600"
            style="font-size: 0">
    <div class="md:flex md:justify-between md:max-w-5xl md:m-auto">

        <div>
            {{-- search ads button --}}
            <x-header-button href="/">
                Išči oglase
            </x-header-button>

            {{-- publish ad button --}}
            <x-header-button href="/createad">
                Objavi oglas
            </x-header-button>

            @auth
                <x-header-button href="/my-ads">
                    Moji oglasi
                </x-header-button>
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
            <form method="POST" action="/logout" class="inline-block">
            @csrf

            <button type="submit">
                <x-header-button>
                    Odjava
                </x-header-button>
            </button>

            </form>
            @endguest
        </div>
    </div>
</li>
