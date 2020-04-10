@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(203.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    
<div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="3m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Arthur Curry, half human half from Atlantis, goes on a trip of a lifetime. Not only does this adventure compel him to come to terms with his real identity, but it also forces him to discover whether he is entirely worthy of fulfilling his own destiny: becoming a king.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Anthony Russo, Joe Russo </li>
    <li>Jason Momoa, Amber Heard, Willem Dafoe, Patrick Wilson, Nicole Kidman, Dolph Lundgren, Yahya Abdul-Mateen II, Temuera Morrison, Ludi Lin, Michael Beach, Randall Park, Graham McTavish, Leigh Whannell, Tainui Kirkwood, Tamor Kirkwood/li>
    <li>Release Date: 2018-12-21</li>
    <li>Genres: Action, Adventure, Sci-Fi </li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="https://mega.nz/#!2NBGxKoS!wl2ZL-I_javBy1cgzONps54p_iFSh0zrvSmWMXoH5mQ">
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="https://mega.nz/#!2NBGxKoS!wl2ZL-I_javBy1cgzONps54p_iFSh0zrvSmWMXoH5mQ">
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="https://mega.nz/#!2NBGxKoS!wl2ZL-I_javBy1cgzONps54p_iFSh0zrvSmWMXoH5mQ">
      <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>



@endsection

@push('js')

@endpush