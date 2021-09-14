<div class="w-screen bg-gray-400 h-20 px-10 py-5">

    {{-- display login button if guest, otherwise register button --}}
    @guest

    {{-- login button --}}
    <a href="/login">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l"
        >
            Login
        </button>
    </a>

    {{-- register button --}}
    <a href="/register">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r"
        >
            Register
        </button>
    </a>

    @else
    {{-- Logout form with button --}}
    <form method="POST" action="/logout">
    @csrf

    <button
        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded"
    >
        Logout
    </button>
    </form>
    @endguest

</div>
