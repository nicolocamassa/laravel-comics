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
            <div class="price">
                <div class="price-us"><span>U.S. Price: </span>{{ $comic['price'] }}</div>
                <div class="price-availability">Available</div>
            </div>
            <div class="availability">Check Availability</div>
        </div>
        <p>{{ $comic['description'] }}</p>
    </div>
@endsection
