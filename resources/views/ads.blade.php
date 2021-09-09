<x-layout>

@foreach ($ads as $ad)

    <x-ad-card :ad=$ad />

    @unless ($loop->last)
        <hr size="1">
    @endif

@endforeach

</x-layout>
