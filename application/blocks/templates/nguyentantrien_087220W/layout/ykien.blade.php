@php
$lang = 'vi';
$khachhang = array(
0 => [
    'tenkhongdau' =>'tenkhongdau1',
    'ten_vi' =>'Tên sản phẩm',
    'photo' => 'noithat.jpg',
    'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit' 
],
1 => [
'tenkhongdau' =>'tenkhongdau2',
    'ten_vi' =>'Tên sản phẩm',
    'photo' => 'noithat.jpg',
    'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit' 
],
2 => [
'tenkhongdau' =>'tenkhongdau3',
    'ten_vi' =>'Tên sản phẩm',
    'photo' => 'noithat.jpg',
    'mota_vi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit' 
]
);
@endphp
<div id="ykien" class="fullpage">
    <div class="container">
        <div class="header-title">
            <h2 class="h2-title">CẢM NHẬN KHÁCH HÀNG</h2>
        </div>
        <div class="swiper-container mw-100">
            <div class="swiper-wrapper">
                @foreach($khachhang as $item)
                <div class="swiper-slide">
                    <div class="khachhang_item rounded-circle" data-id="{{ $item["tenkhongdau"] }}">
                        <div class="image hieuung rounded-circle">
                            <img src="thumb/1-190-190/assets/images/{{ $item["photo"] }}" alt="{{ $item["photo"] }}" class="img-fluid rounded-circle">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="content-khachhang mw-100">
           @foreach($khachhang as $item)
            <div class="ykien_content {{ $item["tenkhongdau"] }} text-center">
                <div class="mota text-center">
                    {{ $item["mota_$lang"] }}
                </div>
                <h3>{{ $item["ten_$lang"] }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>