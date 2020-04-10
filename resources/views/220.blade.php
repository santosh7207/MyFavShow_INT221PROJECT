@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(220.jpg);
          background-repeat: no-repeat;
          background-size: cover;
  }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="20m.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>In mid-20s New York, Newt Scamander, the British young activist wizard, arrives in town, holding a mysterious leather suitcase which shelters a wide array of diverse and magical creatures that exist among us. Amid an already fragile equilibrium of secrecy,</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: David Yates</li>
    <li>Actors: Eddie Redmayne, Sam Redford, Scott Goldman, Tim Bentinck, Tristan Tait, Colin Farrell, Tom Clarke Hill, Matthew Sim, Katherine Waterston, Samantha Morton, Dan Fogler, Ezra Miller, Faith Wood-Blagrove, Jenn Murray, Cory Peterson</li>
    <li>Release Date: 2016-11-18</li>
    <li>Genres: Adventure, Family, Fantasy</li>
    <li>Language: English, Khmer</li>
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