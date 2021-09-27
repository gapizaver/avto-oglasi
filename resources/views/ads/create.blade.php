<x-layout>

    {{-- form for searching the ads --}}
    <x-form.form action="/createad" method="post" enctype="multipart/form-data" heading="Objavi oglas">
        @csrf

        {{-- brand --}}
        <x-form.brand-input />

        {{-- model --}}
        <x-form.input name="model"> Model </x-form.input>

        {{-- condition --}}
        <p class="text-gray-700 text-lg">Stanje</p>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-2 md:grid-rows-1 gap-2">
            <x-form.checkbox name="condition" type="radio" value="u" checked>
                Rabljeno
            </x-form.checkbox>
            <x-form.checkbox name="condition" type="radio" value="n">
                Novo
            </x-form.checkbox>
            <x-form.checkbox name="condition" type="radio" value="c">
                Karambolirano
            </x-form.checkbox>
        </div>

        @error("condition")
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- image input --}}
        <x-form.input-image />

        {{-- body types --}}
        <span class="text-gray-700 text-lg">Oblika</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-4 md:grid-rows-3 gap-2">
            <x-form.checkbox name="body_type" type=radio value="li" checked>
                Limuzina
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="hb">
                Kombilimuzina
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="ca">
                Karavan
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="co">
                Coupe
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="mv">
                Minivan
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="cb">
                Cabrio
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="su">
                SUV
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="pu">
                Pick-up
            </x-form.checkbox>
        </div>

        @error("body_type")
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- year --}}
        <x-form.input-number value="{{ date('Y') }}" name="year">
            Letnik
        </x-form.input-number>

        {{-- mileage --}}
        <x-form.input-number name="mileage">
            Prevoženi kilometri
        </x-form.input-number>

        {{-- displacement --}}
        <x-form.input-number step=".1" name="displacement" placeholder="1.4">
            Prostornina motorja [L]
        </x-form.input-number>

        {{-- horse power --}}
        <x-form.input-number name="horses">
            Moč motorja [KM]
        </x-form.input-number>

        {{-- fuel --}}
        <span class="text-gray-700 text-lg">Gorivo</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-3 md:grid-rows-2 gap-2 pb-4">
            <x-form.checkbox name="fuel" type="radio" value="g" checked>
                Bencin
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="d">
                Diesel
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="e">
                Elektrika
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="b">
                Hibrid
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="h">
                Vodik
            </x-form.checkbox>
        </div>

        @error("fuel")
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- transmission --}}
        <span class="text-gray-700 text-lg">Menjalnik</span>
        <br>

        <div class="grid grid-flow-col grid-cols-3 gap-2">
            <x-form.checkbox name="transmission" value="m" type="radio" checked>
                Ročni
            </x-form.checkbox>
            <x-form.checkbox name="transmission" value="a" type="radio">
                Avtomatski
            </x-form.checkbox>
        </div>

        @error("transmission")
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- description --}}
        <x-form.input-text name="desc">Opis</x-form.input-text>

        {{-- price --}}
        <x-form.input-number name="price"> Cena [€] </x-form.input-number>

        {{-- submit button --}}
        <x-form.button type="submit" class="mt-8">
            Objavi
        </x-form.button>
    </x-form.form>
</x-layout>

