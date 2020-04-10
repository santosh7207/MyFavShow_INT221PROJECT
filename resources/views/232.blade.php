@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(232.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="32m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 Earth’s future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind’s survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Christopher Nolan</li>
    <li>Actors: Ellen Burstyn, Matthew McConaughey, Mackenzie Foy, John Lithgow, Timothée Chalamet, David Oyelowo, Collette Wolfe, Francis X. McCarthy, Bill Irwin, Anne Hathaway, Andrew Borba, Wes Bentley, William Devane, Michael Caine, David Gyasi</li>
    <li>Release Date:</li>
    <li>Genres: Adventure, Drama, Sci-Fi
</li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="http://reqlinks.net/vJZVt">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="http://reqlinks.net/vJZVt">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="http://reqlinks.net/vJZVt">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>




@endsection

@push('js')

@endpush