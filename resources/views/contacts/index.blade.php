@extends('layouts.main')
@section('content')
    <h1>Телефонная книжка</h1>
    <h2>Добавить контакт</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        @method('POST')
        <label for="">Фамилия:</label>
        <input type="text" name="sername">
        <label for="">Имя:</label>
        <input type="text" name="name">
        <label for="">Отчество:</label>
        <input type="text" name="middlename">

        <button type="submit">Добавить</button>
    </form>

    <h2>Контакты</h2>
    <ul class="wrapper__contacts">
        @foreach($contacts as $contact)
            <a href="{{ route('contacts.show', compact('contact')) }}">
                <li class="contact">
                    <h3>{{ $contact->sername }}</h3>
                    <span>{{ $contact->name }}</span>
                    <span>{{ $contact->middlename }}</span>
                </li>
            </a>
        @endforeach
    </ul>
@endsection
