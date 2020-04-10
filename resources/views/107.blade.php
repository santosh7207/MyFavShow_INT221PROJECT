@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

<div class="foot">
  <div class="about-section" style="padding: 250px;
          text-align: center;
          background:url(107.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }" >
  <h1></h1>
  </div>
    <div class="container">
  <img src="7.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>In the years after the Civil War, Jo March (Saoirse Ronan) lives in New York City and makes her living as a writer, while her sister Amy March (Florence Pugh) studies painting in Paris.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Greta Gerwig</li>
    <li>Actors: Saoirse Ronan, Emma Watson, Florence Pugh, Eliza Scanlen, Laura Dern, Timothée Chalamet, Tracy Letts, Bob Odenkirk, James Norton, Louis Garrel, Jayne Houdyshell, Chris Cooper, Meryl Streep, Rafael Silva, Mason Alban</li>
    <li>Release Date: 2019-12-25</li>
    <li>Genres: Drama, Romance</li>
    <li>Language: English, French</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="http://reqlinks.net/lfXfr3
">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="http://reqlinks.net/fy6B
">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="http://reqlinks.net/Zqb0">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>

@endsection

@push('js')

@endpush