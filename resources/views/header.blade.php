<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css\hstyle.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Monoton&family=Playball&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<title>MyFavShow</title>
	<script>$(document).ready(function() {
	$('.menu-toggle').on('click',function(){
		$('.nav').toggleClass('showing');
	});
});</script>
</head>
<body>
	<header>
		<div class="logo">
		<h1 class="logo-text">My <span>Fav</span>Show</h1>
		<i class="fa fa-bars menu-toggle"></i>	
	</div>
	<ul class="nav">
		<li><a href="land">Home</a></li>
		<li><a href="movies">Movies</a></li>
		<li><a href="tvshows">TvSeries</a></li>
		<li><a href="message">Request</a></li>
		<li><a href="aboutus">About Us</a></li>
		<li><a href="login">Logout</a></li>



	</ul>
		
	</header>
	<!--footer start -->
		
		
	
	<!--footer end-->
	

	

	
</body>

</html>
