@extends('master1')

@section('tittle','land')

@push('css')

@endpush

@section('content')
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(321.jpg);
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
  <img src="21s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Based on Caroline Kepnes’ best-selling novel of the same name, YOU is a 21st century love story that asks, “What would you do for love?” When a brilliant bookstore manager crosses paths with an aspiring writer, his answer becomes clear: </p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Steven Knight</li>
    <li>Actors:  Penn Badgley, Elizabeth Lail, Luca Padovan, Zach Cherry, Nicole Kang, Kathryn Gallagher, Daniel Cosgrove, Shay Mitchell, Victoria Cartagena
  </li>
    <li>Release Date: 2018-11-01</li>
    <li>Genres: Action, Drama, Sci-Fi
  </li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqzone.com">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
 
  </div>



@endsection

@push('js')

@endpush