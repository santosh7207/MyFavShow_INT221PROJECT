

<?php $__env->startSection('tittle','land'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(310.jpg);
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
  <img src="10s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>The past, present, and future lives of surviving Oceanic Flight 815 passengers are dramatically intertwined as a fight for survival ensues in a quest for answers after crashlanding on a mysterious island. Each discovery prompts yet more secrets, as the hastily-formed colony search for a way off the island, or is this their home?</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: -</li>
    <li>Actors: Jorge Garcia, Josh Holloway, Yunjin Kim, Evangeline Lilly, Terry O'Quinn, Naveen Andrews, Matthew Fox, Daniel Dae Kim, Emilie de Ravin, Michael Emerson, Henry Ian Cusick, Dominic Monaghan, Harold Perrineau, Elizabeth Mitchell, Ken Leung</li>
    <li>Release Date: 2004-09-22 </li>
    <li>Genres: Adventure, Drama, Fantasy, Mystery, Sci-Fi, Thriller</li>
    <li>Language: English, Portuguese, Spanish, Arabic, French, Korean, German, Latin, Russian, Japanese
 Storyline</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://">ALL Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://">ALL Episodes</option>
    </select>
     <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 5</option>
    <option class="op" value="http://reqzone.com">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 6</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    

    </select>
  
  </div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\myproject1\resources\views/310.blade.php ENDPATH**/ ?>