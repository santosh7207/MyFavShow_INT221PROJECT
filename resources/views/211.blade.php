@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(211.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="11m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Sabina Wilson (Kristen Stewart), Elena Houghlin (Naomi Scott), and Jane Kano (Ella Balinska) are working for the mysterious Charles Townsend (Robert Clotworthy), whose security and investigative agency has expanded internationally. With the world's smartest, bravest, and most highly trained women all over the globe, there are now teams of Angels guided by multiple Bosleys taking on the toughest jobs everywhere.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Elizabeth Banks</li>
    <li>Actors: Kristen Stewart, Naomi Scott, Ella Balinska, Elizabeth Banks, Patrick Stewart, Djimon Hounsou, Sam Claflin, Jonathan Tucker, Nat Faxon, Chris Pang, Luis Gerardo Méndez, Noah Centineo, David Schütter, Hannah Hoekstra, Jane Chirwa</li>
    <li>Release Date: 2019-11-15</li>
    <li>Genres: Action, Adventure, Comedy</li>
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