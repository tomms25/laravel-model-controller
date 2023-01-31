 @extends('layouts.main-layout')

 @section('content')
    <h1>MOVIES</h1>
    <div id="test">
      <ul>
         @foreach ($movies as $movie)

            <li>
               {{ $movie['title']}}
            </li>
             
         @endforeach
      </ul>
    </div>
     
 @endsection