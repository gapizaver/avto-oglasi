<x-layout>

    {{-- form for searching the ads --}}
    <x-form.form heading="Išči oglase" action="/results" method="get">

        {{-- SEARCH PARAMETERS --}}

        {{-- brand --}}
        <x-form.brand-input />

        {{-- model --}}
        <x-form.input name="model">
            Model
        </x-form.input>

        {{-- condition --}}
        <p class="text-gray-700 text-lg">Stanje</p>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-2 md:grid-rows-1 gap-2">
            <x-form.checkbox class="condition" id="u" onclick="selectCheckbox('condition')" checked>
                Rabljeno
            </x-form.checkbox>
            <x-form.checkbox class="condition" id="n" onclick="selectCheckbox('condition')" checked>
                Novo
            </x-form.checkbox>
            <x-form.checkbox class="condition" id="c" onclick="selectCheckbox('condition')" checked>
                Karambolirano
            </x-form.checkbox>
            {{-- hidden input for body types checkboxes --}}
            {{-- filled with javascript --}}
            <input type="hidden" id="condition" name="condition">
        </div>

        {{-- price --}}
        <x-form.input-minmax name="price">
            Cena [€]
        </x-form.input>

        {{-- body types --}}
        <span class="text-gray-700 text-lg">Oblika</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-4 md:grid-rows-3 gap-2">
            <x-form.checkbox class="body_type" id="li" onclick="selectCheckbox('body_type')" checked>
                Limuzina
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="hb" onclick="selectCheckbox('body_type')" checked>
                Kombilimuzina
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="ca" onclick="selectCheckbox('body_type')" checked>
                Karavan
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="co" onclick="selectCheckbox('body_type')" checked>
                Coupe
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="mv" onclick="selectCheckbox('body_type')" checked>
                Minivan
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="cb" onclick="selectCheckbox('body_type')" checked>
                Cabrio
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="su" onclick="selectCheckbox('body_type')" checked>
                SUV
            </x-form.checkbox>
            <x-form.checkbox class="body_type" id="pu" onclick="selectCheckbox('body_type')" checked>
                Pick-up
            </x-form.checkbox>
            {{-- hidden input for body types checkboxes --}}
            {{-- filled with javascript --}}
            <input type="hidden" id="body_type" name="body_type">
        </div>

        @error("body_type")
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- year --}}
        <x-form.input-minmax name="year">
            Letnik
        </x-form.input>

        {{-- mileage --}}
        <x-form.input-minmax name="mileage">
            Prevoženi kilometri
        </x-form.input>

        {{-- displacement --}}
        <x-form.input-minmax name="displacement">
            Prostornina motorja [L]
        </x-form.input>

        {{-- horse power --}}
        <x-form.input-minmax name="horses">
            Moč motorja [hp]
        </x-form.input>

        {{-- fuel --}}
        <span class="text-gray-700 text-lg">Gorivo</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-3 md:grid-rows-2 gap-2 pb-4">
            <x-form.checkbox class="fuel" id="g" onclick="selectCheckbox('fuel')" checked>
                Bencin
            </x-form.checkbox>
            <x-form.checkbox class="fuel" id="d" onclick="selectCheckbox('fuel')" checked>
                Diesel
            </x-form.checkbox>
            <x-form.checkbox class="fuel" id="e" onclick="selectCheckbox('fuel')" checked>
                Elektrika
            </x-form.checkbox>
            <x-form.checkbox class="fuel" id="b" onclick="selectCheckbox('fuel')" checked>
                Hibrid
            </x-form.checkbox>
            <x-form.checkbox class="fuel" id="h" onclick="selectCheckbox('fuel')" checked>
                Vodik
            </x-form.checkbox>
            {{-- hidden input for fuel checkboxes --}}
            {{-- filled with javascript --}}
            <input type="hidden" id="fuel" name="fuel">
        </div>

        @error("fuel")
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- transmission --}}
        <span class="text-gray-700 text-lg">Menjalnik</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 gap-2 pb-6">
            <x-form.checkbox class="transmission" id="m" onclick="selectCheckbox('transmission')" checked>
                Ročni
            </x-form.checkbox>
            <x-form.checkbox class="transmission" id="a" onclick="selectCheckbox('transmission')" checked>
                Avtomatski
            </x-form.checkbox>
            {{-- hidden input for transmission checkboxes --}}
            {{-- filled with javascript --}}
            <input type="hidden" id="transmission" name="transmission">
        </div>

        @error("transmission")
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- bottom buttons --}}
        <div class="md:flex md:justify-between mt-4">
            {{-- <input type="submit" value="Išči"> --}}
            <x-form.button type="submit">IŠČI</x-form.button>

            <p class="md:my-auto my-2 text-center">ali</p>

            <a href="/results" class="my-auto">
                <x-form.button-small type="button">
                    Prikaži najnovejše oglase
                </x-form.button-small>
            </a>
        </div>

    </x-form>
</x-layout>
