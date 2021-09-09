<x-layout>

<h3>
    {{ $user->name }}
</h3>

<ul>
    <li>elektronska pošta: {{ $user->email }}</li>
    <li>telefon: {{ $user->phone }}</li>
</ul>

<hr>

{{-- show user's ads if they exist --}}

@if ($ads->count())
    <h4>Oglasi uprabnika:</h4>

    @foreach ($ads as $ad)

        <x-ad-card :ad=$ad />

        @unless ($loop->last)
            <hr size="1">
        @endif
    @endforeach
@else
    <p>Ta uporabnik nima objavljenih oglasov</p>
@endif

</x-layout>
