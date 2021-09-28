<x-layout>
    <x-canvas class="shadow-md pt-8">

        <h2 class="text-2xl font-extrabold text-gray-700">
            {{ ucfirst($ad->brand) }} {{ $ad->model }}
        </h2>

        <div>
            <x-card.badge class="mr-2" code="{{ $ad->condition }}" />
            <x-card.badge code="{{ $ad->body_type }}" />
        </div>

        <x-image-viewer images="{{ $ad->images }}" />

        <div class="mt-2 divide-y divide-gray-200">
            <x-card.property property="Letnik" value="{{ $ad->year }}" />
            <x-card.property property="Prevoženih" value="{{ $ad->mileage }} km" />
            <x-card.property property="Gorivo" value="{{ $ad->getFuel() }}" />
            <x-card.property property="Menjalnik" value="{{ $ad->getTransmission() }}" />
            <x-card.property property="Motor" value="{{ $ad->displacement .' L, '. $ad->horses .' KM' }}" />
        </div>

        @if ($ad->desc != "")
            <p class="my-5 p-3 text-gray-700 text-sm bg-gray-100 rounded-md">
                {{ $ad->desc }}
            </p>
        @endif

        <h2 class="text-2xl font-extrabold text-center text-gray-700">
            {{ $ad->price }} €
        </h2>

        <hr class="text-gray-300 my-4">

        {{-- phone --}}
        @isset($ad->publisher->phone)
            <h2 class="text-xl font-extrabold text-center text-gray-700 pt-2">
                <span class="inline-block relative">
                    <svg class="inline-block absolute -left-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    {{ $ad->publisher->phone }}
                </span>
            </h2>
        @endisset

        {{-- publisher's email --}}
        <p class="text-gray-700 my-2 text-center pt-0.5">
            <a href="mailto:{{ $ad->publisher->mail }}">
                {{-- mail icon --}}
                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span class="underline">{{ $ad->publisher->email }}</span>
            </a>
        </p>

        {{-- publisher's name --}}
        <h4 class="text-center text-gray-700">
            <a class="inline-block relative" href = "/user/{{ $ad->publisher->id }}">
                <svg class="inline-block absolute -left-7 top-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span class="underline inline-block pt-1">{{ $ad->publisher->name }}</span>
            </a>
        </h4>

        <p class="text-gray-700 text-xs text-right py-2">
            oglas objavljen {{ $ad->created_at->format("j.n.Y") }} ob {{ $ad->created_at->format("G:i") }}
        </p>
    </x-canvas>
</x-layout>
