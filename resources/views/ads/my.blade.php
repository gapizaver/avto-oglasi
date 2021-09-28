<x-layout>
    <x-canvas>
        @unless (count($ads) == 0)
            <x-dropdown-menu />

            @foreach ($ads as $ad)
                <x-card.card :ad=$ad :options=true />
            @endforeach

            {{ $ads->links() }}
        @else
            <p class="text-gray-700 text-center">
                Trenutno še nimate oglasov.
                <a class="font-bold underline" href="/createad">
                    Objavi oglas
                </a>
            </p>
        @endunless
    </x-canvas>
</x-layout>
