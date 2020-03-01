<?php
$lang = 'vi';
$product_noibat = array(
0 => [
	'photo_vi' => 'product.jpg'	
],
1 => [
	'photo_vi' => 'product.jpg'	
],
2 => [
	'photo_vi' => 'product.jpg'	
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
			<?php $__currentLoopData = $product_noibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="product-item">
					<div class="image">
						<a href="#">
							<img src="assets/images/<?php echo e($item["photo_$lang"]); ?>" alt="product">
						</a>
					</div>
					<div class="detail">
						<h3><a href="#">Tên Sản Phẩm</a></h3>
						<div class="mota">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta et magni sit debitis porro, asperiores similique vero numquam ipsam enim!
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div><?php /**PATH D:\www\mtapp\application\blocks\templates/layout/product_noibat.blade.php ENDPATH**/ ?>