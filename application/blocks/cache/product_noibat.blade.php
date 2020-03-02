<?php
$lang = 'vi';
$product_noibat = array(
0 => [
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'product.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
],
1 => [
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'product.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
],
2 => [
	'ten_vi' =>'Tên sản phẩm',
	'photo' => 'product.jpg',
	'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'	
]
);
?>
<div id="product_noibat">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				<span>
					SẢN PHẨM NỔI BẬT
				</span>
			</h2>
		</div>
		<div class="content row">
			<?php foreach($product_noibat as $item): ?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="product-item">
					<div class="image">
						<a href="#">
							<img src="thumb/1-375-268/assets/images/<?php echo e($item["photo"]); ?>" alt="product">
						</a>
					</div>
					<div class="detail">
						<h3><a href="#"><?php echo e($item["ten_$lang"]); ?></a></h3>
						<div class="mota">
							<?php echo e($item["mota_$lang"]); ?>

						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div><?php /**PATH E:\www\dashboard\application\blocks\templates/layout/product_noibat.blade.php ENDPATH**/ ?>