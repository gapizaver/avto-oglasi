@props(["ad"])

<div>
    <a href="ad/{{ $ad->id }}">
        <h3>{{ $ad->brand }} {{ $ad->model }}</h3>
    </a>

    <ul>
        <li>stanje: {{ $ad->condition }}</li>
        <li>letnik: {{ $ad->year }}</li>
        <li>prevoženi kilometri: {{ $ad->mileage }}</li>
        <li>gorivo: {{ $ad->fuel }}</li>
        <li>prostornina: {{ $ad->displacement }}L</li>
        <li>moč: {{ $ad->horses }}hp</li>
        <li>menjalnik: {{ $ad->transmission }}</li>
    </ul>

    <b>{{ $ad->price }} €</b>

<div>
