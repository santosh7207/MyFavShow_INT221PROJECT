@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(205.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="5m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Jon Favreau</li>
    <li>Actors: Chiwetel Ejiofor, John Oliver, James Earl Jones, John Kani, Alfre Woodard, JD McCrary, Shahadi Wright Joseph, Penny Johnson Jerald, Keegan-Michael Key, Eric André, Florence Kasumba, Seth Rogen, Billy Eichner, Amy Sedaris, Chance the Rapper</li>
    <li>Release Date: 2019-07-19</li>
    <li>Genres: Animation, Adventure, Drama, Family, Musical</li>
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