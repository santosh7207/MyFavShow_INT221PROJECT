

<?php $__env->startSection('tittle','land'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(303.jpg);
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
  <img src="3s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>After the death of one of the rich and popular Blossom twins on the 4th of July, the small town of Riverdale investigates the murder. The series starts in September, the beginning of a new school year, that brings with it new students, relationships, and reveals the mysteries of the past 4th of July.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: -</li>
    <li>Actors: K.J. Apa, Lili Reinhart, Camila Mendes, Cole Sprouse, Casey Cott, Madelaine Petsch, Marisol Nichols, Luke Perry, Mädchen Amick, Ashleigh Murray, Skeet Ulrich, Martin Cummins, Mark Consuelos, Lochlyn Munro, Nathalie Boltt, Vanessa Morgan, Charles Melton, Robin Givens, Alvin Sanders, Cody Kearsley, Jordan Connor, Peter Bryant, Drew Ray Tanner</li>
    <li>Release Date: 2017-01-26</li>
    <li>Genres: Crime, Drama, Mystery, Romance</li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqlinks.net/7YIa">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="reqlinks.net/DYT2n">ALL Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://reqlinks.net/QfXYX5yk">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://reqlinks.net/kuJU">Episode 1</option>
    <option class="op" value="http://http://reqlinks.net/cCo0Mu">Episode 2</option>
    <option class="op" value="http://http://reqlinks.net/dELfy">Episode 3</option>
    <option class="op" value="http:/http://reqlinks.net/dELfy/">Episode 4</option>
    <option class="op" value="http://reqlinks.net/dELfy">Episode 5</option>
    <option class="op" value="http://reqlinks.net/dELfy">Episode 6</option>
    <option class="op" value="http://reqlinks.net/dELfy">Episode 6</option>
    <option class="op" value="http://reqlinks.net/dELfy">Episode 6</option>

    </select>
  
  </div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\myproject1\resources\views/303.blade.php ENDPATH**/ ?>