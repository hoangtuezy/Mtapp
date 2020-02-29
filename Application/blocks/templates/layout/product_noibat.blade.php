@php
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
@endphp
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
			@foreach($product_noibat as $item)
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="product-item">
					<div class="image">
						<a href="#">
							<img src="assets/images/{{ $item["photo_$lang"] }}" alt="product">
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
			@endforeach
		</div>
	</div>
</div>