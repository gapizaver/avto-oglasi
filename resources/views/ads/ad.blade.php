<x-layout>

    <div>
        <h3>{{ $ad->brand }} {{ $ad->model }}</h3>

        <ul>
            <li>stanje: {{ $ad->condition }}</li>
            <li>letnik: {{ $ad->year }}</li>
            <li>prevoženi kilometri: {{ $ad->milage }}</li>
            <li>gorivo: {{ $ad->fuel }}</li>
            <li>prostornina: {{ $ad->displacement }}L</li>
            <li>moč: {{ $ad->horses }}hp</li>
        </ul>

        <p>
            {{ $ad->desc }}
        </p>

        <b>{{ $ad->price }} €</b>

        <hr>

        <h4>
            Prodajalec:
            <a href = "/user/{{ $ad->publisher->id }}">
                {{ $ad->publisher->name }}
            </a>
        </h4>

        <ul>
            <li>elektronska pošta: {{ $ad->publisher->email }}</li>
            <li>telefon: {{ $ad->publisher->phone }}</li>
        </ul>
    <div>

</x-layout>
