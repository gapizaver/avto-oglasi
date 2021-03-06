@props(["images"])

@php
    if ($images != "") {
        $images = explode(" ", trim($images));

        for ($i=0; $i < sizeof($images); $i++) {
            $images[$i] = "storage/" . $images[$i];
        }
    } else {
        $images = [];
    }

@endphp

<div class="my-6 p-6 text-gray-700 text-sm bg-gray-100 rounded-md">
    @if (count($images) > 0)
    <img
        id="img-main"
        class="mx-auto rounded-md shadow-md"
        style="max-height: 515px;"
        src="{{ asset($images[0]) }}">

        @if (count($images) > 1)
        <div class="mt-2">
            @foreach ($images as $image)
                @php
                    $class = "img-sm w-32 mt-1 mx-auto rounded-lg shadow inline-block cursor-pointer
                            border-purple-400";

                    if (!$loop->first) {
                        $class .= " hover:shadow-lg";
                    } else {
                        $class .= " border-4";
                    }

                    if (!$loop->last) {
                        $class .= " mr-1";
                    }
                @endphp

                <img
                    class="{{ $class }}"
                    src="{{ asset($image) }}"
                >
            @endforeach
        </div>
        @endif
    @else
        <p class="italic text-gray-700 text-center text-sm"> Oglas je brez slike </p>
    @endif
</div>
