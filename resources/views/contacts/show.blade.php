@extends('layouts.main')
@section('content')
    <h2>{{ $contact->sername }}</h2>
    <span>{{ $contact->name }}</span>
    <span>{{ $contact->middlename }}</span>

    <h3>Добавить номер телефона</h3>
    <form action="{{ route('numbers.store', compact('contact')) }}" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="contact_id" value="{{ $contact->id }}">

        <label for="">Номер телефона:</label>
        <input type="text" name="number">

        <button type="submit">Добавить номер телефона</button>
    </form>

    <h3>Номера телефона:</h3>
    @foreach($numbers as $number)
        <p>{{ $number->number }}</p>
    @endforeach
@endsection
