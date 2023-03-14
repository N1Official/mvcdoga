@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        <form>
            <div class="mb-3">
                <label for="name">Név</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="gender">Nem</label>
                <input type="text" class="form-control" id="gender" placeholder="Male/Female">
            </div>
            <div class="mb-3">
                <label for="job">Munka</label>
                <input type="text" class="form-control" id="job">
            </div>
            <div class="mb-3">
                <label for="wand">Varázspálca</label>
                <input type="text" class="form-control" id="wand">
            </div>
            <div class="mb-3">
                <label for="Patronus">Patronus</label>
                <input type="text" class="form-control" id="Patronus">
            </div>
            <div class="mb-3">
                <label for="species">Faj</label>
                <input type="text" class="form-control" id="species">
            </div>
            <div class="mb-3">
                <label for="birth">Született</label>
                <input type="date" class="form-control" id="birth">
            </div>
            <div class="mb-3">
                <label for="death">Meghalt</label>
                <input type="date" class="form-control" id="death">
            </div>
            <div class="mb-3">
                <label for="house">Example select</label>
                <select class="form-select">
                    @foreach($houses as $house)
                    <option value="{{$house->id}}">{{$house->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="button" class="btn btn-success">Mentés!</button>
        </form>
    </div>
@endsection
