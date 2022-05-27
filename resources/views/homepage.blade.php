@extends('master')

@section('title', 'BeeFlix')

@section('content')
<div class="box-container" style="background-color: rgb(242, 242, 242)">
  <div class="box-container-2">
    <div class="genre-title"><h3>DRAMA</h3></div>
    <div class="card-container">
      @for($i = 0; $i <= 3; $i++)
        <div class="card" style="width: 19rem;">
          <img src="{{ asset($movies[$i]->photo) }}.jpg" class="card-img-top" alt="{{ $movies[$i]->title }}">
          <div class="card-body">
            <h6 class="card-title">{{ $movies[$i]->title }}</h6>
          </div>
          <div class="card-body">
            <a href="/moviedetailpage/{{ $movies[$i]->id }}" class="card-link btn-dark btn">LIHAT FILM</a>
          </div>
        </div>
      @endfor
    </div>
  </div>

  <div class="box-container-2">
    <div class="genre-title"><h3>KIDS</h3></div>
    <div class="card-container">
      @for($i = 4; $i <= 7; $i++)
        <div class="card" style="width: 19rem;">
          <img src="{{ asset($movies[$i]->photo) }}.jpg" class="card-img-top" alt="{{ $movies[$i]->title }}">
          <div class="card-body">
            <h6 class="card-title">{{ $movies[$i]->title }}</h6>
          </div>
          <div class="card-body">
            <a href="/moviedetailpage/{{ $movies[$i]->id }}" class="card-link btn-dark btn">LIHAT FILM</a>
          </div>
        </div>
      @endfor
    </div>
  </div>

  <div class="box-container-2">
    <div class="genre-title"><h3>TV SHOW</h3></div>
    <div class="card-container">
      @for($i = 8; $i <= 11; $i++)
        <div class="card" style="width: 19rem;">
          <img src="{{ asset($movies[$i]->photo) }}.jpg" class="card-img-top" alt="{{ $movies[$i]->title }}">
          <div class="card-body">
            <h6 class="card-title">{{ $movies[$i]->title }}</h6>
          </div>
          <div class="card-body">
            <a href="/moviedetailpage/{{ $movies[$i]->id }}" class="card-link btn-dark btn">LIHAT FILM</a>
          </div>
        </div>
      @endfor
    </div>
  </div>




  <style>
    .box-container{
      display: flex;
      flex-direction: column;
      padding: 1.5%;
    }

    .box-container-2{
      background-color: white;
      /* padding: 3%; */
      padding-bottom: 1%;
    }

    .genre-title{
      /* padding-bottom: 1%; */
      margin-top: 1%;
      margin-left: 3%;
    }

    .card-container{
      display: flex;
      flex-direction: row;
      gap: 3%;
      justify-content: center;
      align-items: center;
    }

    .card{
      display: flex;
      /* flex-direction: column; */
      justify-content: center;
      align-items: center;
    }

    .card-title{
      margin-bottom: -10%;
    }
  </style>
@endsection