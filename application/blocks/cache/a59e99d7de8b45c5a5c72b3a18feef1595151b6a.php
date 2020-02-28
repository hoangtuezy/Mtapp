<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/plugin/bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/base.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
		<?php echo $__env->yieldPushContent('style'); ?>
	 
</head>
<body>
	<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	 <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH E:\www\dashboard\application\blocks\templates/base.blade.php ENDPATH**/ ?>