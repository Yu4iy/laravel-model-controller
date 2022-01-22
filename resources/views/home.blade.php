<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<h2>MOVIES</h2>
	<div  class="flex-container">
		@forelse ($movies as $movie)
		<div class="card">
			<div>{{$movie->title}}</div>
			<div>{{$movie->original_title}}</div>
			<div>{{$movie->vote}}</div>
			<div>{{$movie->nationality}}</div>
			<div>{{$movie->date}}</div>
		</div>
		@empty
		<h1>NO FILMS HEARE</h1>	
		@endforelse
	</div>
</body>
</html>