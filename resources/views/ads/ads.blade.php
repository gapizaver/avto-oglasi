<x-layout>
    <x-canvas>
        <x-dropdown-menu />

        @foreach ($ads as $ad)
            <x-card.card :ad=$ad />
        @endforeach

        {{ $ads->links() }}
    </x-canvas>
</x-layout>
