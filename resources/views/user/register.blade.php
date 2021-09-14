<x-layout>
    <h1>Registration</h1>

    {{-- REGISTRATION FORM --}}
    <form action="/register" method="post">
        @csrf

        {{-- email --}}
        <div class="mb-6">
            <label  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
            >
                Email*
            </label>
            <input  class="border border-gray-400 p-2 w-fill"
                    type="email"
                    name="email"
                    value="{{ old("email") }}"
                    required
            >

            @error("email")
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        </div>

        {{-- name --}}
        <div class="mb-6">
            <label  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="name"
            >
                Ime*
            </label>
            <input  class="border border-gray-400 p-2 w-fill"
                    type="text"
                    name="name"
                    value="{{ old("name") }}"
                    required
            >

            @error("name")
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        </div>

        {{-- phone --}}
        <div class="mb-6">
            <label  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="phone"
            >
                Telefon
            </label>
            <input  class="border border-gray-400 p-2 w-fill"
                    type="text"
                    name="phone"
                    value="{{ old("phone") }}"
            >

            @error("phone")
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        </div>

        {{-- password --}}
        <div class="mb-6">
            <label  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="password"
            >
                Geslo*
            </label>
            <input  class="border border-gray-400 p-2 w-fill"
                    type="password"
                    name="password"
                    required
            >

            @error("password")
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                Submit
        </div>
    </form>
</x-layout>
