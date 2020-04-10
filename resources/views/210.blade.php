@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(210.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="10m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>When the world's best spy is turned into a pigeon, he must rely on his nerdy tech officer to save the world.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Nick Bruno, Troy Quane</li>
    <li>Actors: Rachel Brosnahan, Jarrett Bruno, Claire Crosby, Toru Uchikado, Hisato Masuyama, Will Smith, Reba McEntire, Mark Ronson, Masi Oka, Toshiya Agata, Michi Yamato, Hiroshi Otaguro, Ben Mendelsohn, Carla Jimenez, Tawny Newsome</li>
    <li>Release Date: 2019-12-25</li>
    <li>Genres: Animation, Action, Adventure, Comedy, Family, Sci-Fi</li>
    <li>Language: English, Japanese</li>
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