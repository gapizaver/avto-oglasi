<x-layout>

<x-dropdown-menu />

@foreach ($ads as $ad)

    <x-ad-card :ad=$ad />

    @unless ($loop->last)
        <hr size="1">
    @endif

@endforeach

{{ $ads->links() }}

</x-layout>
