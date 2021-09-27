@props(["ad"])


<a href="ad/{{ $ad->id }}">
    <div class="mx-auto mb-8 bg-white rounded-xl shadow-md overflow-hidden
                hover:shadow-lg ease-linear transition-all duration-150">
        <div class="md:flex">

            <div class="md:flex-shrink-0">
                @php
                    $src = "";

                    if (isset($ad->images)) {
                        $src = "storage/" . explode(" ", trim($images))[0];
                    } else {
                        $src = "storage/my-images/no-image.jpeg";
                    }
                @endphp

                <img
                    class="h-56 w-full object-cover md:h-full md:w-64"
                    src="{{ $src }}"
                >
            </div>

            <div class="px-6 py-4 w-full">
                <p
                    class="block mt-1 text-lg leading-tight font-medium text-gray-700"
                >
                    {{ $ad->brand }} {{ $ad->model }}
                </p>

                <div>
                    <x-card.badge class="mr-2" code="{{ $ad->condition }}" />
                    <x-card.badge code="{{ $ad->body_type }}" />
                </div>

                <div class="mt-2 divide-y divide-gray-200">
                    <x-card.property
                        p_class="text-sm"
                        property="Letnik"
                        value="{{ $ad->year }}"
                    />
                    <x-card.property
                        property="Prevoženih"
                        value="{{ $ad->mileage }} km"
                        p_class="text-sm"
                    />
                    <x-card.property
                        property="Gorivo"
                        value="{{ $ad->getFuel() }}"
                        p_class="text-sm"
                    />
                    <x-card.property
                        property="Menjalnik"
                        value="{{ $ad->getTransmission() }}"
                        p_class="text-sm"
                    />
                    <x-card.property
                        property="Motor"
                        value="{{ $ad->displacement ." L, ". $ad->horses ." KM" }}"
                        p_class="text-sm"
                    />
                </div>

                <p class="text-center text-lg font-bold text-gray-700">
                    {{ $ad->price }} €
                </p>
            </div>
        </div>
    </div>
</a>
