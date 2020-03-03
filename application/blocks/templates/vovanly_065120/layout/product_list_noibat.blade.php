@php
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
@endphp
<div id="product_list_noibat">
	@foreach($product_list_noibat as $item)
	<div class="product_list" style="background: url(assets/images/{{ $item["photo"] }}); background-size:cover;">
		<div class="container">
			<div class="inline-block text-center">
				<h3><a href="{{ $item["tenkhongdau"] }}">{{ $item["ten_$lang"] }}</a></h3>
				<p>{{ $item["mota_$lang"] }}</p>
				<a href="{{ $item["tenkhongdau"] }}" class="xemthem mx-auto">Xem thêm</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
