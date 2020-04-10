@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(226.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="26m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>After successfully crossing over (and under) the Misty Mountains, Thorin and Company must seek aid from a powerful stranger before taking on the dangers of Mirkwood Forest–without their Wizard</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Peter Jackson</li>
    <li>Actors: Ian McKellen, Martin Freeman, Richard Armitage, Ken Stott, Graham McTavish, William Kircher, James Nesbitt, Stephen Hunter, Dean O'Gorman, Aidan Turner, John Callen, Peter Hambleton, Jed Brophy, Mark Hadlow, Adam Brown</li>
    <li>Release Date: 2013-12-13</li>
    <liGenres: Adventure, Fantasy</li>
    <li>Language: English
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


@endsection

@push('js')

@endpush