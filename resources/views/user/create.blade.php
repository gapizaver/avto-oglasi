<x-layout>
    {{-- REGISTRATION FORM --}}
    <x-form.form heading="Registracija" action="/register" method="post" :width=600>
        @csrf

        {{-- email --}}
        <x-form.input
            type="email"
            name="email"
            class="max-w-sm"
            value="{{ old('email') }}"
            required
        >
            Email naslov*
        </x-form.input>

        {{-- name --}}
        <x-form.input
            type="name"
            name="name"
            class="max-w-sm"
            value="{{ old('name') }}"
            required
        >
            Ime*
        </x-form.input>

        {{-- phone --}}
        <x-form.input
            type="phone"
            name="phone"
            class="max-w-sm"
            value="{{ old('phone') }}"
        >
            Telefon
        </x-form.input>

        {{-- password --}}
        <x-form.input
            type="password"
            name="password"
            class="max-w-sm"
            value="{{ old('password') }}"
            required
        >
            Geslo*
        </x-form.input>

        <x-form.button type="submit" class="mt-4">
            Registriraj se
        </x-form.button>
    </x-form.form>
</x-layout>
