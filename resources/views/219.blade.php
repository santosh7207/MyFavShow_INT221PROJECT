@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')

<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(219.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="19m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>After the events of Captain America: Civil War, Prince T’Challa returns home to the reclusive, technologically advanced African nation of Wakanda to serve as his country’s new king. However, T’Challa soon finds that he is challenged for the throne from factions within his own country. When two foes conspire to destroy Wakand</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Ryan Coogler</li>
    <li>Actors: Chadwick Boseman, Michael B. Jordan, Lupita Nyong'o, Danai Gurira, Martin Freeman, Daniel Kaluuya, Letitia Wright, Winston Duke, Sterling K. Brown, Angela Bassett, Forest Whitaker, Andy Serkis, Florence Kasumba, John Kani, David S. Lee</li>
    <li>Release Date: 2018-02-16</li>
    <li>Genres: Action, Adventure, Sci-Fi</li>
    <li>Language: Swahili, Nama, English, Xhosa, Korean</li>
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