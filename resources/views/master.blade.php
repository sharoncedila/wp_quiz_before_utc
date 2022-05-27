<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav>
        <div class="space">
          <div class="bee-title">
            <h1>BeeFlix</h1>
          </div>
            
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <a href="{{ url()->previous() }}" class="btn btn-dark" for="btnradio1">KEMBALI</a>
            
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <a href="/" class="btn btn-outline-secondary" for="btnradio3">LIHAT SEMUA FILM</a>
          </div>      
        </div>

        <div class="transparent" style="color: white">
          ' ' 
        </div>
    </nav>

    

    <div>
        @yield('content')
    </div>
    
    <style>
        .space{
            margin-top: 1.25em;
            margin-left: 1.5em;
            margin-right: 1.5em;
            display: flex;
          }

          .bee-title{
            padding-right: 72%;
          }

          .btn{
            display: flex;
            align-items: center;
            justify-content: center;
          }
    </style>
  </body>
</html>