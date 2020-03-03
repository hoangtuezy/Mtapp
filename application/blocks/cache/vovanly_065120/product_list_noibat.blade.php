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
	<?php foreach($product_list_noibat as $item): ?>
	<div class="product_list" style="background: url(assets/images/<?php echo e($item["photo"]); ?>); background-size:cover;">
		<div class="container">
			<div class="inline-block text-center">
				<h3><a href="<?php echo e($item["tenkhongdau"]); ?>"><?php echo e($item["ten_$lang"]); ?></a></h3>
				<p><?php echo e($item["mota_$lang"]); ?></p>
				<a href="<?php echo e($item["tenkhongdau"]); ?>" class="xemthem mx-auto">Xem thêm</a>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<?php /**PATH E:\www\dashboard\application\blocks\templates\vovanly_065120/layout/product_list_noibat.blade.php ENDPATH**/ ?>