<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<form action="/products/store" method="POST">
<?php echo csrf_field(); ?>	
    <input type="text" name="name" placeholder="enter name"><br><br>
	<input type="text" name="description" placeholder="enter des"><br><br>
	<input type="number" name="price" placeholder="enter price"><br><br>
	<input type="submit" name="submit" value="Add"><br>
</form>
</body>
</html><?php /**PATH C:\Windows\System32\myproject1\resources\views/ProductForm.blade.php ENDPATH**/ ?>