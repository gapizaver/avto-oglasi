<x-layout>

    @php
        // all the available car brands
        $carBrands = ["Honda", "Acura", "Alfa-romeo", "Aston-Martin", "Audi", "Bently", "BMW", "Bugatti", "Buick", "Cadillac", "Chevrolet", "Chrysler", "Citroen", "Dodge", "Ferrari", "Fiat", "Ford", "Geely", "Genesis", "GMC", "Hyundai", "Infiniti", "Jaguar", "Jeep", "Kia", "Koenigsegg", "Lamborghini", "Lancia", "Land ROver", "Lexus", "lincoln", "Lotus", "Maserati", "Maybah", "Mazda", "Mclaren", "Mercedes", "Mini", "Mitsubishi", "Nissan", "Opel", "Pagani", "Peugeot", "Pontiac", "Porsche", "Ram", "Renault", "Rolls-Royce", "Škoda", "Smart", "Subaru", "Suzuki", "Testla", "Toyota", "Volkswagen", "Volvo"];
    @endphp


    <h2>Ustvari oglas</h2>


    {{-- form for searching the ads --}}
    <form action="/createad" method="post">
        @csrf

        {{-- SEARCH PARAMETERS --}}

        {{-- condition --}}
        <label>Stanje: <label>
        <input name="condition" type="radio" value="u" checked>
        <label>Rabljeno</label>
        <input name="condition" type="radio" value="n">
        <label>Novo</label>
        <input name="condition" type="radio" value="c">
        <label">Karambolirano</label>
        <br><br>

        {{-- brand --}}
        <label for="brand">Znamka: </label>
        <select name="brand">
            {{-- add option for each of available car brands --}}
            @foreach ($carBrands as $brand)
                <option value="{{ strtolower($brand) }}">
                    {{ $brand }}
                </option>
            @endforeach
        </select>
        @error("brand")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- model --}}
        <label for="model">Model: </label>
        <input type="text" name="model">
        @error("model")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- price --}}
        <label for="price">Cena [€]: </label>
        <input type="number" name="price">
        @error("price")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- body types --}}
        <label>Oblika: </label>
        <input name="body_type" type="radio" value="li" checked>
        <label for="li">Limuzina</label>
        <input name="body_type" type="radio" value="hb">
        <label for="hb">Kombilimuzina</label>
        <input name="body_type" type="radio" value="ca">
        <label for="ca">Karavan</label>
        <input name="body_type" type="radio" value="co">
        <label for="co">Coupe</label>
        <input name="body_type" type="radio" value="mv">
        <label for="mv">Minivan</label>
        <input name="body_type" type="radio" value="cb">
        <label for="cb">Cabrio</label>
        <input name="body_type" type="radio" value="su">
        <label for="su">SUV</label>
        <input name="body_type" type="radio" value="pu">
        <label for="pu">Pick-up</label>
        @error("body_type")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- year --}}
        <label for="year">Letnik : </label>
        <input type="number" name="year" value="{{ date("Y") }}">
        @error("year")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- mileage --}}
        <label for="mileage">Prevoženi kilometri: </label>
        <input type="number" name="mileage">
        @error("mileage")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- displacement --}}
        <label for="displacement">Prostornina motorja [L]: </label>
        <input type="number" step=".1" name="displacement" placeholder="1.4">
        @error("displacement")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- horse power --}}
        <label for="horses">Moč motorja [hp]: </label>
        <input type="number" name="horses">
        @error("horses")
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        <br><br>

        {{-- fuel --}}
        <label>Gorivo: </label>
        <input name="fuel" type="radio" value="g" checked>
        <label for="g">Bencin</label>
        <input name="fuel" type="radio" value="d">
        <label for="d">Diesel</label>
        <input name="fuel" type="radio" value="e">
        <label for="e">Elektrika</label>
        <input name="fuel" type="radio" value="b">
        <label for="b">Hibrid</label>
        <input name="fuel" type="radio" value="h">
        <label for="h">Vodik</label>

        @error("fuel")
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <br><br>

        {{-- transmission --}}
        <label>Menjalnik: </label>
        <input name="transmission" type="radio" value="m"" checked>
        <label for="m">Ročni</label>
        <input name="transmission" type="radio" value="a"">
        <label for="a">Avtomatski</label>
        @error("transmission")
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <br><br>

        {{-- description --}}
        <label>Opis: </label>
        <input type="text" name="desc">
        <br><br>

        <input type="submit" value="Objavi">
    </form>

    </x-layout>

