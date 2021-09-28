<x-layout>
    <x-canvas>
        @if ($ads->count())
            <x-dropdown-menu />

            @foreach ($ads as $ad)
                <x-card.card :ad=$ad />
            @endforeach

            {{ $ads->links() }}
        @else
            <p class="text-gray-700 text-center">
                Za vnešene parametre ni bilo najdenih oglasov.
                <a class="font-bold underline" href="/">
                    Išči ponovno
                </a>
            </p>
        @endif
    </x-canvas>
</x-layout>
