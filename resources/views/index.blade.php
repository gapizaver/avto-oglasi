<x-layout>

<script>
    // change the hidden input that represents checkboxes of className
    function selectCheckbox(className) {
        // checkboxes of className
        var checkboxes = document.getElementsByClassName(className);
        // string of values of checked checkboxes
        var vals = "";
        // fill the vals string
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                vals += checkboxes[i].id;
            }
        }

        // set the vals to the value of the hidden input
        var input = document.getElementById(className);
        input.value = vals;
    }
</script>

@php
    // all the available car brands
    $carBrands = ["Honda", "Acura", "Alfa-romeo", "Aston-Martin", "Audi", "Bently", "BMW", "Bugatti", "Buick", "Cadillac", "Chevrolet", "Chrysler", "Citroen", "Dodge", "Ferrari", "Fiat", "Ford", "Geely", "Genesis", "GMC", "Hyundai", "Infiniti", "Jaguar", "Jeep", "Kia", "Koenigsegg", "Lamborghini", "Lancia", "Land ROver", "Lexus", "lincoln", "Lotus", "Maserati", "Maybah", "Mazda", "Mclaren", "Mercedes", "Mini", "Mitsubishi", "Nissan", "Opel", "Pagani", "Peugeot", "Pontiac", "Porsche", "Ram", "Renault", "Rolls-Royce", "Škoda", "Smart", "Subaru", "Suzuki", "Testla", "Toyota", "Volkswagen", "Volvo"];
@endphp

<h2>Išči oglase</h2>

{{-- form for searching the ads --}}

<form action="/results" method="get">
    {{-- SEARCH PARAMETERS --}}

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
    <br><br>

    {{-- model --}}
    <label for="brand">Model: </label>
    <input type="text" name="model">
    <br><br>

    {{-- price --}}
    <label for="priceMin">Cena [€]: </label>
    <input type="number" name="priceMin" placeholder="min">
    <input type="number" name="priceMax" placeholder="max">
    <br><br>

    {{-- body types --}}
    <label>Oblika: </label>
    <input class="body_type" type="checkbox" id="li" onclick="selectCheckbox('body_type')" checked>Limuzina
    <input class="body_type" type="checkbox" id="hb" onclick="selectCheckbox('body_type')" checked>Kombilimuzina
    <input class="body_type" type="checkbox" id="ca" onclick="selectCheckbox('body_type')" checked>Karavan
    <input class="body_type" type="checkbox" id="co" onclick="selectCheckbox('body_type')" checked>Coupe
    <input class="body_type" type="checkbox" id="mv" onclick="selectCheckbox('body_type')" checked>Minivan
    <input class="body_type" type="checkbox" id="cb" onclick="selectCheckbox('body_type')" checked>Cabrio
    <input class="body_type" type="checkbox" id="su" onclick="selectCheckbox('body_type')" checked>SUV
    <input class="body_type" type="checkbox" id="pu" onclick="selectCheckbox('body_type')" checked>Pick-up
    {{-- hidden input for body types checkboxes --}}
    {{-- filled with javascript --}}
    <input type="hidden" id="body_type" name="body_type">

    <br><br>

    {{-- year --}}
    <label for="yearMin">Letnik : </label>
    <input type="number" name="yearMin" placeholder="min">
    <input type="number" name="yearMax" placeholder="max">
    <br><br>

    {{-- mileage --}}
    <label>Prevoženi kilometri: </label>
    <input type="number" name="mileageMin" placeholder="min">
    <input type="number" name="mileageMax" placeholder="max">
    <br><br>

    {{-- displacement --}}
    <label>Prostornina motorja [L]: </label>
    <input type="number" name="displacementMin" placeholder="min">
    <input type="number" name="displacementMax" placeholder="max">
    <br><br>

    {{-- horse power --}}
    <label>Moč motorja [hp]: </label>
    <input type="number" name="horserMin" placeholder="min">
    <input type="number" name="horsesMax" placeholder="max">
    <br><br>

    {{-- fuel --}}
    <label>Gorivo: </label>
    <input class="fuel" type="checkbox" id="g" onclick="selectCheckbox('fuel')" checked>Bencin
    <input class="fuel" type="checkbox" id="d" onclick="selectCheckbox('fuel')" checked>Diesel
    <input class="fuel" type="checkbox" id="e" onclick="selectCheckbox('fuel')" checked>Elektrika
    <input class="fuel" type="checkbox" id="b" onclick="selectCheckbox('fuel')" checked>Hibrid
    <input class="fuel" type="checkbox" id="h" onclick="selectCheckbox('fuel')" checked>Vodik
    {{-- hidden input for fuel checkboxes --}}
    {{-- filled with javascript --}}
    <input type="hidden" id="fuel" name="fuel">
    <br><br>

    {{-- transmission --}}
    <label>Gorivo: </label>
    <input class="transmission" type="checkbox" id="m" onclick="selectCheckbox('transmission')" checked>Ročni
    <input class="transmission" type="checkbox" id="a" onclick="selectCheckbox('transmission')" checked>Avtomatski
    {{-- hidden input for transmission checkboxes --}}
    {{-- filled with javascript --}}
    <input type="hidden" id="transmission" name="transmission">
    <br><br>


    <input type="submit" value="Išči">
</form>


<hr>

<a href="/results">
    <button type="button">Prikaži najnovejše oglasi</button>
</a>

</x-layout>
