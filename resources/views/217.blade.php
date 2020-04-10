@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(217.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="17m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Bound by an inescapable blood debt to the Italian crime lord, Santino D’Antonio, and with his precious 1969 Mustang still stolen, John Wick, the taciturn and pitiless assassin who thirsts for seclusion, is forced to visit Italy to honour his promise.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Array</li>
    <li>Actors: Keanu Reeves, Riccardo Scamarcio, Ian McShane, Ruby Rose, Common, Claudia Gerini, Lance Reddick, Laurence Fishburne, Tobias Segal, John Leguizamo, Bridget Moynahan, Thomas Sadoski, Erik Frandsen, David Patrick Kelly, Perry Yung</li>
    <li>Release Date: 2017-02-10</li>
    <li>Genres: Action, Crime, Thriller</li>
    <li>Language: English, Italian, Russian</li>
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