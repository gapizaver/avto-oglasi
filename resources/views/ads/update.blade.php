<x-layout>
    {{-- form for searching the ads --}}
    <x-form.form action="/ad/{{ $ad->id }}" method="post" enctype="multipart/form-data" heading="Uredi oglas">
        @method("PUT")
        @csrf

        {{-- brand --}}
        <x-form.brand-input />

        {{-- model --}}
        <x-form.input oldVal="{{$ad->model}}" name="model"> Model </x-form.input>

        {{-- condition --}}
        <p class="text-gray-700 text-lg">Stanje</p>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-2 md:grid-rows-1 gap-2">
            <x-form.checkbox name="condition" type="radio" value="u" oldVal="{{ $ad->condition }}" checked>
                Rabljeno
            </x-form.checkbox>
            <x-form.checkbox name="condition" type="radio" oldVal="{{ $ad->condition }}" value="n">
                Novo
            </x-form.checkbox>
            <x-form.checkbox name="condition" type="radio" oldVal="{{ $ad->condition }}" value="c">
                Karambolirano
            </x-form.checkbox>
        </div>

        @error("condition")
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- image input --}}
        <x-form.input-image text="Naloži nove fotografije" />

        {{-- body types --}}
        <span class="text-gray-700 text-lg">Oblika</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-4 md:grid-rows-3 gap-2">
            <x-form.checkbox name="body_type" type=radio value="li" oldVal="{{ $ad->body_type }}" checked>
                Limuzina
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="hb" oldVal="{{ $ad->body_type }}">
                Kombilimuzina
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="ca" oldVal="{{ $ad->body_type }}">
                Karavan
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="co" oldVal="{{ $ad->body_type }}">
                Coupe
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="mv" oldVal="{{ $ad->body_type }}">
                Minivan
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="cb" oldVal="{{ $ad->body_type }}">
                Cabrio
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="su" oldVal="{{ $ad->body_type }}">
                SUV
            </x-form.checkbox>
            <x-form.checkbox name="body_type" type=radio value="pu" oldVal="{{ $ad->body_type }}">
                Pick-up
            </x-form.checkbox>
        </div>

        @error("body_type")
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- year --}}
        <x-form.input-number oldVal="{{ $ad->year }}" name="year">
            Letnik
        </x-form.input-number>

        {{-- mileage --}}
        <x-form.input-number oldVal="{{ $ad->mileage }}" name="mileage">
            Prevoženi kilometri
        </x-form.input-number>

        {{-- displacement --}}
        <x-form.input-number step=".1" oldVal="{{ $ad->displacement }}" name="displacement" placeholder="1.4">
            Prostornina motorja [L]
        </x-form.input-number>

        {{-- horse power --}}
        <x-form.input-number oldVal="{{ $ad->horses }}" name="horses">
            Moč motorja [KM]
        </x-form.input-number>

        {{-- fuel --}}
        <span class="text-gray-700 text-lg">Gorivo</span>
        <br>

        <div class="grid grid-flow-col grid-cols-2 md:grid-cols-3 grid-rows-3 md:grid-rows-2 gap-2 pb-4">
            <x-form.checkbox name="fuel" type="radio" value="g" oldVal="{{ $ad->fuel }}" checked>
                Bencin
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="d" oldVal="{{ $ad->fuel }}">
                Diesel
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="e" oldVal="{{ $ad->fuel }}">
                Elektrika
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="b" oldVal="{{ $ad->fuel }}">
                Hibrid
            </x-form.checkbox>
            <x-form.checkbox name="fuel" type="radio" value="h" oldVal="{{ $ad->fuel }}">
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
            <x-form.checkbox name="transmission" value="m" type="radio" oldVal="{{ $ad->transmission }}" checked>
                Ročni
            </x-form.checkbox>
            <x-form.checkbox name="transmission" value="a" type="radio" oldVal="{{ $ad->transmission }}">
                Avtomatski
            </x-form.checkbox>
        </div>

        @error("transmission")
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        {{-- description --}}
        <x-form.input-text oldVal="{{ $ad->text }}" name="desc">Opis</x-form.input-text>

        {{-- price --}}
        <x-form.input-number oldVal="{{ $ad->price }}" name="price"> Cena [€] </x-form.input-number>

        {{-- submit button --}}
        <x-form.button type="submit" class="mt-8">
            Uveljavi spremembe
        </x-form.button>
    </x-form.form>
</x-layout>

