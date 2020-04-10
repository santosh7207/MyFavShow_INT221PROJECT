
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo e(asset('css\lstyles.css')); ?>">
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
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
        <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
</body>
</html>

<?php /**PATH C:\Windows\System32\myproject1\resources\views/masterkey.blade.php ENDPATH**/ ?>