 @extends('layouts.main-layout')

 @section('content')
    <h1>MOVIES</h1>
    <div id="test">
      <ul>
         @foreach ($movies as $movie)

            <li>
               {{ $movie['title']}} - {{ $movie['original_title']}} - {{ $movie['nationality']}} - {{ $movie['date']}} - {{ $movie ['vote']}}
            </li>
             
         @endforeach
      </ul>
    </div>
     
 @endsection