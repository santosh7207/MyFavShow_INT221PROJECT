@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(315.jpg);
          background-repeat: no-repeat;
          background-size: cover;

      }
      .menu:hover{
        background: transparent;
        
        
        
      }
    .menu{
      overflow: auto;
    }

     
    .menu .op{
     
      color: black;
      margin-top: inherit;
      min-height: 50px;
      max-height: 50px;
      overflow: auto;
    }
    .menu .op:hover{
      min-height: 50px;
      max-height: 50px;
        overflow: auto;

       }
    .sub .menu:onclick {
      margin-bottom: 500px;

    }
    option{
      color: white;
      background-color: lightblue;
      line-height: 10px;
    }
    </style>
    <div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="15s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>The Family Man is an edgy action-drama series, which tells the story of a middle-class man who works for a special cell of the National Investigation Agency. While he tries to protect the nation from terrorists, he also has to protect his family from the impact of his secretive, high-pressure, and low paying job.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director:  Krishna D.K </li>
    <li>Actors:  Manoj Bajpayee, Sharib Hashmi, Neeraj Madhav, Priyamani, Vedant Sinha, Mehek Thakur, Shahab Ali, Pawan Chopra, Shreya Dhanwanthary, Sharad Kelkar, Darshan Kumaar, Vijay Vikram Singh, Dalip Tahil, Aritro Rudraneil Banerjee, Kishore Kumar G., Sundeep Kishan, Abrar Qazi, Mir Sarwar, Sanyukta Timsina, Sunil Gupta, Sunny Hinduja, Gul Panag
  </li>
    <li>Release Date: 2019-09-19</li>
    <li>Genres:  Comedy, Drama, Romance
  </li>
    <li>Language: Hindi, English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqzone.com">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
 
  </div>





@endsection

@push('js')

@endpush