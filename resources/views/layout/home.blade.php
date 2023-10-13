<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container mt-5">
    <div class="row gap-5">
      @foreach ($movies as $movie)
          
        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$movie->title}}</li>
            <li class="list-group-item">{{$movie->original_title}}</li>
            <li class="list-group-item">{{$movie->nationality}}</li>
            <li class="list-group-item">{{$movie->date}}</li>
            <li class="list-group-item">{{$movie->vote}}</li>
          </ul>
        </div>
      @endforeach
    </div>
  </div>
  
</body>

</html>
