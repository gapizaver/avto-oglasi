@props(["ad", "options" => false])


<a href="ad/{{ $ad->id }}">
    <div class="mx-auto mb-8 bg-white rounded-xl shadow-md overflow-hidden
                hover:shadow-lg ease-linear transition-all duration-150">
        <div class="md:flex">

            <div class="md:flex-shrink-0">
                @php
                    $src = "";

                    if ($ad->images != "") {
                        $src = "storage/" . explode(" ", trim($ad->images))[0];
                    } else {
                        $src = "storage/my-images/no-image.jpeg";
                    }
                @endphp

                <img
                    class="h-56 w-full object-cover md:h-full md:w-60"
                    src="{{ asset($src) }}"
                >
            </div>

            <div class="px-6 py-4 w-full relative">
                @if ($options)
                    <form method="post" action="/ad/{{ $ad->id }}">
                        @csrf
                        @method("DELETE")

                        <x-card.icon class="top-4 right-4">
                            <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </x-card.icon>
                    </form>

                    <form method="get" action="/edit/{{ $ad->id }}">
                        <x-card.icon class="top-4 right-16">
                                <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        </x-card.icon>
                    </form>
                @endif

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
