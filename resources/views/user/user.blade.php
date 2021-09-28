<x-layout>
    <x-canvas class="shadow-md pt-8">
        <h2 class="text-2xl font-extrabold text-gray-700">
            {{ $user->name }}
        </h2>

        {{-- phone --}}
        @isset($user->phone)
            <h2 class="text-xl font-bold text-gray-700 pt-2">
                <span class="ml-7 inline-block relative">
                    <svg class=" inline-block absolute -left-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    {{ $user->phone }}
                </span>
            </h2>
        @endisset

        {{-- publisher's email --}}
        <p class="text-gray-700 my-2 pt-0.5">
            <a href="mailto:{{ $user->mail }}">
                {{-- mail icon --}}
                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span class="underline">{{ $user->email }}</span>
            </a>
        </p>

        <p class="text-gray-700 text-xs text-right py-2">
            uporabnik od {{ $user->created_at->format("j.n.Y") }}
        </p>
    </x-canvas>

{{-- show user's ads if they exist --}}

    @if ($ads->count())
        <div
            class="w-full mx-auto mb-10 px-8"
            style="max-width: 800px"
        >
            @foreach ($ads as $ad)
                <x-card.card :ad=$ad />
            @endforeach
        </div>
    @else
        <p class="text-gray-700">Ta uporabnik nima objavljenih oglasov</p>
    @endif

</x-layout>
