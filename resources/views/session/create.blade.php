<x-layout>
    <x-form.form action="/session" method="post" heading="Prijava" :width=600>
        @csrf

        {{-- email --}}
        <x-form.input
            type="email"
            name="email"
            class="max-w-sm"
            required
        >
            Email naslov
        </x-form.input>


        {{-- password --}}
        <x-form.input
            type="password"
            name="password"
            class="max-w-sm"
            required
        >
            Geslo
        </x-form.input>

        <p class="text-gray-700 text-sm mb-2">
            Še nimaš računa?
            <a href="/register" class="underline font-bold">
                Registriraj se!
            </a>
        </p>

        {{-- login button --}}
        <x-form.button type="submit" class="mt-4">
            Prijava
        </x-form.button>
    </x-form.form>
</x-layout>
