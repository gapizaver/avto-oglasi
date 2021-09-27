@php
// all the available car brands
$carBrands = ["Honda", "Acura", "Alfa-romeo", "Aston-Martin", "Audi", "Bently", "BMW", "Bugatti", "Buick", "Cadillac", "Chevrolet", "Chrysler", "Citroen", "Dodge", "Ferrari", "Fiat", "Ford", "Geely", "Genesis", "GMC", "Hyundai", "Infiniti", "Jaguar", "Jeep", "Kia", "Koenigsegg", "Lamborghini", "Lancia", "Land ROver", "Lexus", "lincoln", "Lotus", "Maserati", "Maybah", "Mazda", "Mclaren", "Mercedes", "Mini", "Mitsubishi", "Nissan", "Opel", "Pagani", "Peugeot", "Pontiac", "Porsche", "Ram", "Renault", "Rolls-Royce", "Škoda", "Smart", "Subaru", "Suzuki", "Testla", "Toyota", "Volkswagen", "Volvo"];
@endphp

<label for="brand">
    <span class="text-gray-700 text-lg">
        Znamka
    </span>
    <br>
    <select name="brand"
            class="px-2 py-2 placeholder-gray-500 text-blueGray-600 relative bg-white
                    rounded text-sm border-0 shadow outline-none focus:outline-none
                    focus:ring focus:ring-purple-400 max-w-xs cursor-pointer">
        {{-- add option for each of available car brands --}}
        @foreach ($carBrands as $brand)
            <option value="{{ strtolower($brand) }}">
                {{ $brand }}
            </option>
        @endforeach
    </select>
</label>
