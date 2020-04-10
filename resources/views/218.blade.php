@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(218.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="18m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>With the untimely death of his beloved wife still bitter in his mouth, John Wick, the expert former assassin, receives one final gift from her–a precious keepsake to help John find a new meaning in life now that she is gone</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Chad Stahelski, David Leitch</li>
    <li>Actors: Keanu Reeves, Michael Nyqvist, Alfie Allen, Willem Dafoe, Dean Winters, Adrianne Palicki, Omer Barnea, Toby Leonard Moore, Daniel Bernhardt, Bridget Moynahan, John Leguizamo, Ian McShane, Bridget Regan, Lance Reddick, Keith Jardine</li>
    <li>Release Date: 2014-10-24</li>
    <li>Genres: Action, Crime, Thriller</li>
    <li>Language: English, Russian, Hungarian</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="https://reqzone.com/">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="https://reqzone.com/">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="https://reqzone.com/">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>




@endsection

@push('js')

@endpush