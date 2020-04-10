@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(216.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="16m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>A long time ago, far away on the planet of Cybertron, a war is being waged between the noble Autobots (led by the wise Optimus Prime) and the devious Decepticons (commanded by the dreaded Megatron) for control over the Allspark</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Michael Bay</li>
    <li>Actors: Shia LaBeouf, Megan Fox, Josh Duhamel, Tyrese Gibson, Rachael Taylor, Anthony Anderson, Jon Voight, John Turturro, Michael O'Neill, Kevin Dunn, Julie White, Amaury Nolasco, Zack Ward, Luis Echagarruga, Patrick Mulderrig</li>
    <li>Release Date: 2007-07-03</li>
    <li>Genres: Action, Adventure, Sci-Fi</li>
    <li>Language: English, Spanish</li>
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