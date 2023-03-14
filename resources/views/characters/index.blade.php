@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Név</th>
                <th>Nem</th>
                <th>Munka</th>
                <th>Varázspálca</th>
                <th>Patrónus</th>
                <th>Faj</th>
                <th>Dátum</th>
                <th>Ház</th>
                <th>Műveletek</th>
            </tr>
            </thead>
            <tbody>
            @foreach($characters as $character)
                <tr>
                    <td>{{$character->name}}</td>
                    <td>{{$character->gender}}</td>
                    <td>{{$character->job}}</td>
                    <td>{{$character->wand}}</td>
                    <td>{{$character->patronus}}</td>
                    <td>{{$character->species}}</td>
                    <td>{{$character->birth}} - {{$character->death}}</td>
                    <td>{{--<img src="{{$character->house->img}}" alt="{{$character->house->img}}" width="50px">--}} kepami50pixeles</td>
                    <td><button type="button" class="btn btn-primary" href="{{--{{route("character.show" , ["id" => $character->id] )}}--}}">Megtekint</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
