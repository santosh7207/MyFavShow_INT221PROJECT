@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(202.jpg);
          background-repeat: no-repeat;
          background-size: cover;\
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="2m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Anthony Russo, Joe Russo </li>
    <li>Actors: Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Benedict Cumberbatch, Chadwick Boseman, Brie Larson, Tom Holland, Karen Gillan, Zoe Saldana, Evangeline Lilly</li>
    <li>Release Date: 2018-04-27 </li>
    <li>Genres: Action, Adventure, Sci-Fi </li>
    <li>Language: English, </li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="https://mega.nz/#!TXwGFSxL!2l-ERUFuDEVcTErz8RrRrvqPWGSVRQ5CgYe5vl9emhs">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="https://mega.nz/#!mCoWDCoa!AGJBj8Pu_KgEJ85ILpZXCtM5JN2Zb13sKy2hE3QBGMw">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="https://mega.nz/#!7PgmgCiR!tnNz6svfDjT6mbo5E435hkFrrOMjjOODDq-SuuNz-5I">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>


@endsection

@push('js')

@endpush