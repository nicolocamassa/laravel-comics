@extends('layout.app')

@section('content')
<div class="comicsList">
    <div class="banner-list fw-bolder fs-4">CURRENT SERIES</div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <img src="{{ $comic['thumb'] }}" alt="Copertina" href="">
                    <p>{{ $comic['series'] }}</p>
                </div>        
            @endforeach
            <div class="col-12 mt-5 load-btn d-flex justify-content-center">
                <div class="text-center">LOAD MORE</div>
            </div>
        </div>
    </div>
    
</div>
    
@endsection