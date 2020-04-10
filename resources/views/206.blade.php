@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

 <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(206.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="6m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Three teenagers must help a Yeti return to his family while avoiding a wealthy man and a zoologist who want it for their own needs.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Jill Culton, Todd Wilderman</li>
    <li>Actors: Chloe Bennet, Albert Tsai, Tenzing Norgay Trainor, Joseph Izzo, Eddie Izzard, Sarah Paulson, Tsai Chin, Michelle Wong, Rich Dietl, James Hong, Christine Lin, Kym Miller, Jason Ko, Trevor Devall, Karen Huie</li>
    <li>Release Date: 2019-09-27</li>
    <li>Genres: Animation, Adventure, Comedy, Family, Fantasy</li>
    <li>Language: English, Mandarin</li>
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