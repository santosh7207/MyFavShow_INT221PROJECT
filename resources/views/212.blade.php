@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(212.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="12m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Jobless, penniless, and, above all, hopeless, the unmotivated patriarch, Ki-taek, and his equally unambitious family--his supportive wife, Chung-sook; his cynical twentysomething daughter, Ki-jung, and his college-age son, Ki-woo--occupy themselves by working for peanuts in their squalid basement-level apartment.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Bong Joon Ho</li>
    <li>Actors: Kang-ho Song, Sun-kyun Lee, Yeo-jeong Jo, Woo-sik Choi, So-dam Park, Jeong-eun Lee, Hye-jin Jang, Ji-hye Lee, Ji-so Jung, Myeong-hoon Park, Seo-joon Park, Keun-rok Park, Seong-Bong Ahn, Kang Echae, Jeong Esuz</li>
    <li>Release Date: 2019-11-08</li>
    <li>Genres: Comedy, Drama, Thriller</li>
    <li>Language: Korean, English</li>
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