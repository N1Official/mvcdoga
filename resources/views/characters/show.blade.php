@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <ul>
            <li><b>Név:</b> {{$character->name}}</li>
            <li><b>Nem:</b> {{$character->gender}}</li>
            <li><b>Munka:</b> {{$character->job}}</li>
            <li><b>Patronus:</b> {{$character->patronus}}</li>
            <li><b>Faj:</b> {{$character->species}}</li>
            <li><b>Dátum:</b> {{$character->birth}} - {{$character->death}}</li>
            <li><b>Ház:</b> Jókérdés</li>
            <button type="button" class="btn btn-danger">Törlés!</button>
        </ul>
    </div>
@endsection
