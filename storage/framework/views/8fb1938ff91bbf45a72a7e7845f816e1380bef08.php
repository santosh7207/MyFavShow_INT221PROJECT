

<?php $__env->startSection('tittle','land'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(307.jpg);
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
  <img src="7s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Far in a dystopian future, the human race has lost the sense of sight, and society has had to find new ways to interact, build, hunt, and to survive. All of that is challenged when a set of twins is born with sight.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Steven Knight</li>
    <li>Actors: Jason Momoa, Sylvia Hoeks, Hera Hilmar, Christian Camargo, Archie Madekwe, Nesta Cooper, Yadira Guevara-Prip, Alfre Woodard, Josh Blacker, Christian Sloan, Franz Drameh, Tantoo Cardinal, Mojean Aria, Marilee Talkington, Peter Bryant, Bree Klauser, Hiro Kanagawa, Timothy Webber, Jessica Harper, Lauren Glazier, Cassandra Naud, Luc Roderique, Shalyn Ferdinand, Jefferson Halliday, Joshua Henry, Patricia Drake, Kamran Fulleylove, Brianna Clark, Adrian Hough, Alex Bulmer, Donovan Tildesley, Ellen MacNevin, Rocky Anderson
</li>
    <li>Release Date: 2019-11-01</li>
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\myproject1\resources\views/307.blade.php ENDPATH**/ ?>