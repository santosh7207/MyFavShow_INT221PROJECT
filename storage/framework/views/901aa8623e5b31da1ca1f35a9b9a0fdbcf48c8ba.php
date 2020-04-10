

<?php $__env->startSection('tittle','land'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="foot">
  <div class="about-section" style="  padding: 250px;
          text-align: center;
          background:url(101.jpg);
          background-repeat: no-repeat;
          background-size: cover;">
  <h1></h1>
  </div>
    <div class="container">
  <img src="1.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>When the world's best spy is turned into a pigeon, he must rely on his nerdy tech officer to save the world.

</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Nick Bruno, Troy Quane</li>
    <li>Actors: Rachel Brosnahan, Jarrett Bruno, Claire Crosby, Toru Uchikado, Hisato Masuyama, Will Smith, Reba McEntire, Mark Ronson, Masi Oka, Toshiya Agata, Michi Yamato, Hiroshi Otaguro, Ben Mendelsohn, Carla Jimenez, Tawny Newsome</li>
    <li>Release Date: 2019-12-25</li>
    <li>Genres: Animation, Action, Adventure, Comedy, Family, Sci-Fi</li>
    <li>Language: English, Japanese</li>
  </ul>
  </dir>
  <div class="sub">
  
    <form method="post" action="http://reqlinks.net/yPyaXr
">      <?php echo csrf_field(); ?>
      <button class="menu" name="480P" type="submit">480P</button>
    </form>
    <form method="post" action="http://reqlinks.net/gi2qq
">      <?php echo csrf_field(); ?>
      <button class="menu" name="480P" type="submit">720P</button>
    </form>
    <form method="post" action="http://reqlinks.net/GwXAy7st">
        <?php echo csrf_field(); ?>
     <button class="menu" name="480P" type="submit">1080P</button>
    </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\myproject1\resources\views/101.blade.php ENDPATH**/ ?>