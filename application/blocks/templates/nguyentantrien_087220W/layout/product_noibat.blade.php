@php
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
							<img src="thumb/1-375-268/assets/images/{{ $item["photo"] }}" alt="product">
						</a>
					</div>
					<div class="detail">
						<h3><a href="#">{{ $item["ten_$lang"] }}</a></h3>
						<div class="mota">
							{{ $item["mota_$lang"] }}
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>