@extends('master')

@section('title', 'BeeFlix')

@section('content')
    <div class="space-page">
        <div class="picture">
            <img src="{{ asset($movies->photo) }}.jpg" alt="{{ $movies->title }}" style="width: 100%; height: auto;">
        </div>

        <div class="detail-information">
            <div class="movie-title"><h4>{{ $movies->title }}</h4></div> 
            <div class="movie-rating">Rating : {{ $movies->rating }}/5</div> 
            <div class="movie-des">{{ $movies->description }}</div> 
            <div class="movie-category">Kategori: <a href="/genre/{{ $movies->genre->id }}">{{ $movies->genre->name }}</a> </div>

        </div>

        <div class="detail-episode">
            <div class="title-episode"><h5>EPISODE</h5></div>
            <div class="container">
                <div class="row">
                    <div class="col-1 card">
                      <b>Eps</b>
                    </div>
                    <div class="col-2 card">
                      <b>Title</b>
                    </div>
                  </div>
            </div>
            
            @foreach ($episodes as $episode)
            <div class="container">
                <div class="row">
                  <div class="col-1 card">
                    {{ $episode->episode }}
                  </div>
                  <div class="col-2 card">
                    {{ $episode->title }}
                  </div>
                </div>
            </div>
            @endforeach
            {{$episodes->appends($_GET)->links()}}
            
        </div>
    </div>
    
    <style>
        .detail-information{
            display: flex;
            flex-direction: column;
            gap: 2%;
            max-width: 25%;
        }

        .space-page{
            margin-left: 1.5em;
            margin-right: 1.5em;
            gap: 4%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .picture {
            max-width: 30%; 
        }

        .detail-episode{
            width: 25%;
        }

        .col-1{
            width: 17%;
        }

        .col-2{
            width: 80%;
        }

        .each-eps{
            display: flex;
            flex-direction: row;
        }

        .container{
            display: flex;
            flex-direction: column;
            margin-bottom: 1.5%;
        }
    </style>
@endsection