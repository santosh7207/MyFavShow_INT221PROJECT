@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(228.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="28m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits: Frodo and Sam reach Mordor in their quest to destroy the “one ring”, while Aragorn leads the forces of good against Sauron’s evil army at the stone city of Minas Tirith.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Peter Jackson</li>
    <li>Actors: Noel Appleby, Ali Astin, Sean Astin, David Aston, John Bach, Sean Bean, Cate Blanchett, Orlando Bloom, Billy Boyd, Sadwyn Brophy, Alistair Browning, Marton Csokas, Richard Edge, Jason Fitch, Bernard Hill</li>
    <li>Release Date: 2003-12-17</li>
    <li>Genres: Action, Adventure, Drama, Fantasy</li>
    <li>Language: English, Quenya, Old English, Sindarin</li>
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