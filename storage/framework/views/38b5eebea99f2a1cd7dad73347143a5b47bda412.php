

<?php $__env->startSection('tittle','land'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(302.jpg);
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
  <img src="2s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>A group of very peculiar robbers assault the Factory of Moneda and Timbre to carry out the most perfect robbery in the history of Spain and take home 2.4 billion euros.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: -</li>
    <li>Actors: Úrsula Corberó, Itziar Ituño, Álvaro Morte, Alba Flores, Miguel Herrán, Jaime Lorente, Esther Acebo, Paco Tous, Pedro Alonso, Enrique Arce, María Pedraza, Darko Peric, Kiti Mánver, Mario de la Rosa, Cristina Valenzuela, Joseph Whimms, Fernando Soto, Brian Beacock, Johnny Yong Bosch, Bob Buchholz, Reba Buhr, Antonio Cuellar Rodriguez, Dorothy Elias-Fahn, Doug Erholtz</li>
    <li>Release Date: 2017-05-02 </li>
    <li>Genres: Action, Crime, Mystery, Thriller</li>
    <li>Language: Spanish, Russian, Serbian, English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqlinks.net/Ss68k">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://reqlinks.net/Wq3t">ALL Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://reqlinks.net/KdzvH">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://reqlinks.net/3HV1Jxm0">ALL Episodes</option>
    </select>
 
  
  </div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\myproject1\resources\views/302.blade.php ENDPATH**/ ?>