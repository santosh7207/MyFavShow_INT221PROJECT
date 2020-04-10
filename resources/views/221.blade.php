@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(221.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="21m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>It feels good to be bad…Assemble a team of the world’s most dangerous, incarcerated Super Villains, provide them with the most powerful arsenal at the government’s disposal, and send them off on a mission to defeat an enigmatic, insuperable entity. U.S. intelligence officer Amanda Waller has determined only a secretly convened group of disparate</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: David Ayer</li>
    <li>Actors: Will Smith, Jaime FitzSimons, Ike Barinholtz, Margot Robbie, Christopher Dyson, Bambadjan Bamba, Viola Davis, Ted Whittall, David Harbour, Robin Atkin Downes, Robert B. Kennedy, Billy Otis, Shailyn Pierre-Dixon, Jared Leto, James McGowan</li>
    <li>Release Date: 2016-08-05</li>
    <li>Genres: Action, Adventure, Fantasy, Sci-Fi</li>
    <liLanguage: English, Japanese, Spanish</li>
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