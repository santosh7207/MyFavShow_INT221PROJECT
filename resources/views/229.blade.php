@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(229.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="29.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>The continuing quest of Frodo and the Fellowship to destroy the One Ring. Frodo and Sam discover they are being followed by the mysterious Gollum. Aragorn, the Elf archer Legolas and Gimli the Dwarf encounter the besieged Rohan kingdom, whose once great King Theoden has fallen under Saruman’s deadly spell.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Peter Jackson</li>
    <li>Actors: Bruce Allpress, Sean Astin, John Bach, Sala Baker, Cate Blanchett, Orlando Bloom, Billy Boyd, Jed Brophy, Sam Comery, Brad Dourif, Calum Gittins, Bernard Hill, Bruce Hopkins, Paris Howe Strewe, Christopher Lee</li>
    <li>Release Date: 2002-12-18</li>
    <li>Genres: Adventure, Drama, Fantasy</li>
    <li>Language: English, Sindarin, Old English</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="http://reqlinks.net/tQHAvZ">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="http://reqlinks.net/mZ2D1jE3">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="http://reqlinks.net/mZ2D1jE3">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>




@endsection

@push('js')

@endpush