@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(208.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="8m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Having harnessed her ever-growing power after lifting the dreadful curse of the eternal winter in Frozen (2013), the beautiful conjurer of snow and ice, Queen Elsa, now rules the peaceful kingdom of Arendelle, enjoying a happy life with her sister, Princess Anna</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Chris Buck, Jennifer Lee</li>
    <li>Actors: Kristen Bell, Idina Menzel, Josh Gad, Jonathan Groff, Sterling K. Brown, Evan Rachel Wood, Alfred Molina, Martha Plimpton, Jason Ritter, Rachel Matthews, Jeremy Sisto, Ciarán Hinds, Alan Tudyk, Hadley Gannaway, Mattea Conforti</li>
    <li>Release Date: 2019-11-22</li>
    <li>Genres: Animation, Adventure, Comedy, Family, Fantasy, Musical</li>
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