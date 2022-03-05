<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <h1>MOVIES</h1>

    <div class="row row-cols-md-3 row-cols-lg-4 row-cols-1">
        @foreach($data as $movie)
    
        <div class="col">
            <div class="card">
               
                <h2 class="title">{{ $movie->title }}</h2>
                <h4 class="original-title">{{ $movie->original_title }}</h4>
                <div class="nationality">Nationality: {{ $movie->nationality }}</div>
                <div class="date">Date release: {{ $movie->date }}</div>
                <div class="vote">Vote: {{ $movie->vote }}/10</div>
              
            </div>
        </div>

        @endforeach
    </div>
    
</body>
</html>