<div class="w-screen bg-gray-400 h-20 px-10 py-5">

    {{-- New ad button --}}
    <a href="/createad">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-3"
        >
            Objavi oglas
        </button>
    </a>


    {{-- display login button if guest, otherwise register button --}}
    @guest

    {{-- login button --}}
    <a href="/login">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l"
        >
            Prijava
        </button>
    </a>

    {{-- register button --}}
    <a href="/register">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r"
        >
            Registracija
        </button>
    </a>

    @else
    {{-- Logout form with button --}}
    <form method="POST" action="/logout" class="inline-block">
    @csrf

    <button
        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded"
    >
        Logout
    </button>
    </form>
    @endguest
</div>
