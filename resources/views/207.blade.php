@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(207.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="7m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Joker centers around an origin of the iconic arch nemesis and is an original, standalone story not seen before on the big screen. Todd Phillips' exploration of Arthur Fleck (Joaquin Phoenix), a man disregarded by society is not only a gritty character study, but also a broader cautionary tale.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Todd Phillips</li>
    <li>Actors: Joaquin Phoenix, Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Shea Whigham, Bill Camp, Glenn Fleshler, Leigh Gill, Josh Pais, Rocco Luna, Marc Maron, Sondra James, Murphy Guyer, Douglas Hodge</li>
    <li>Release Date: 2019-10-04</li>
    <li>Genres: Crime, Drama, Thriller</li>
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