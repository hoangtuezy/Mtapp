<?php
	$db->reset();
	$db->query("select photo_vi,link from #_photo where type='logo' ");
	$row_logo = $db->fetch_array();

	$db->reset();
	$db->query("select photo_vi,link from #_photo where type='banner'");
	$row_banner = $db->fetch_array();
?>
<div id="header">
	<div class="container d-flex">
		<div id="logo">
			<a href="">
				<img src="http://source.test/upload/hinhanh/<?php echo e($row_logo["photo_vi"]); ?>" alt="logo" />
			</a>
		</div>
		<?php if(!empty($row_banner)): ?>
		<div id="banner">
			<a href="">
				<img src="http://source.test/upload/hinhanh/<?php echo e($row_banner["photo_vi"]); ?>" alt="banner"  class="img-fluid"/>
			</a>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="slider">
	<img src="assets/images/slider.jpg" alt="" class="img-fluid w-100">
</div>

<?php /**PATH E:\www\dashboard\application\blocks\templates\vovanly_065120/layout/header.blade.php ENDPATH**/ ?>