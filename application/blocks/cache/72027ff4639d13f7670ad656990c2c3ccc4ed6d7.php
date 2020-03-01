<?php
$lang = 'vi';
$product_list_noibat = array(
0 => [
	'tenkhongdau' =>'#',
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'noithat.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
],
1 => [
'tenkhongdau' =>'#',
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'noithat.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
],
2 => [
'tenkhongdau' =>'#',
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'noithat.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
]
);
?>
<div id="product_list_noibat">
	<?php $__currentLoopData = $product_list_noibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="product_list" style="background: url(assets/images/<?php echo e($item["photo"]); ?>); background-size:cover;">
		<div class="container">
			<div class="inline-block text-center">
				<h3><a href="<?php echo e($item["tenkhongdau"]); ?>"><?php echo e($item["ten_$lang"]); ?></a></h3>
				<p><?php echo e($item["mota_$lang"]); ?></p>
				<a href="<?php echo e($item["tenkhongdau"]); ?>" class="xemthem mx-auto">Xem thêm</a>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\www\mtapp\application\blocks\templates/layout/product_list_noibat.blade.php ENDPATH**/ ?>