
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{asset('css\down.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Monoton&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            body{
                background-image: url('bg.jpg');
                background-repeat: no-repeat;
	            background-attachment: fixed;
	            background-size: cover;
            }
        </style>
    </head>
    

<body>
    @include('header')
	
        @yield('content')

    @include('footer')

    
</body>
</html>

