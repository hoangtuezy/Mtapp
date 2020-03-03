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

<div id="quytrinh" class="py-5">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				<span>
					QUY TRÌNH THỰC HIỆN
				</span>
			</h2>
		</div>
<div class="content row">
	<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
			@foreach($product_noibat as $item)
			<div class="swiper-slide">
				<div class="qt_item">
					<div class="image">
						<a href="#">
							<img src="thumb/1-144-144/assets/images/{{ $item["photo"] }}" alt="product" class="img-fluid rounded-circle">
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
		<!-- If we need pagination -->

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
	</div>
		</div>
	</div>
</div>