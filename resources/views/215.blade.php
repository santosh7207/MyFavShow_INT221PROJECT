@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(215.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="15m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>A youth chooses manhood. The week Sam Witwicky starts college, the Decepticons make trouble in Shanghai. A presidential envoy believes it’s because the Autobots are around; he wants them gone. He’s wrong:</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Michael Bay</li>
    <li>Actors: Shia LaBeouf, Megan Fox, Josh Duhamel, Tyrese Gibson, John Turturro, Ramon Rodriguez, Kevin Dunn, Julie White, Isabel Lucas, John Benjamin Hickey, Matthew Marsden, Andrew Howard, Michael Papajohn, Glenn Morshower, John Eric Bentley</li>
    <li>Release Date: 2009-06-24</li>
    <li>Genres: Action, Adventure, Sci-Fi</li>
    <li>Language: English, Spanish
 </li>
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
<



@endsection

@push('js')

@endpush