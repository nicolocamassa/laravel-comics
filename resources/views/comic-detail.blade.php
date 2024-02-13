@extends('layout.app')

@section('content')
    <div class="blue-banner">
        <div class="smaller-content">
            <img src="{{ $comic['thumb'] }}" alt="Comic cover">
        </div>
    </div>
    <div class="smaller-content bg-white-content">
        <h2>{{ $comic['title'] }}</h2>
        <div class="green-banner">
            <div class="price">{{ $comic['price'] }}</div>
            <div class="aviability"></div>
        </div>
        <p>{{ $comic['description'] }}</p>
    </div>
@endsection
