@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(214.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="14m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Autobots Bumblebee, Ratchet, Ironhide, Mirage (aka Dino), Wheeljack (aka Que) and Sideswipe led by Optimus Prime, are back in action taking on the evil Decepticons, who are eager to avenge their recent defeat</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Michael Bay</li>
    <li>Actors: Shia LaBeouf, Rosie Huntington-Whiteley, Josh Duhamel, John Turturro, Tyrese Gibson, Patrick Dempsey, Frances McDormand, John Malkovich, Kevin Dunn, Julie White, Alan Tudyk, Ken Jeong, Glenn Morshower, Lester Speight, Buzz Aldrin</li>
    <li>Release Date: 2011-06-29</li>
    <li>Genres: Action, Adventure, Sci-Fi</li>
    <li>Language: English</li>
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