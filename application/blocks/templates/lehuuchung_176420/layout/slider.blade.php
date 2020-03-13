@php
$d->reset();
$d->query("select ten_vi,photo_vi,link from #_photo where type='slider' and hienthi=1 order by stt,id desc");
$slider =$d->result_array();
$width=1366;
$height = 400;
$sliderzc = 1;
$slider_indicators = false;
$slider_pagination = false;
@endphp
<div id="slider">
 <div class="swiper-container">
  <div class="swiper-wrapper">
   @foreach($slider as $stt => $item)
     <div class="swiper-slide">
       <a href="{{ $item["link"] }}">
        <img src="thumb/1-{{ $width }}-{{ $height }}/upload/hinhanh/{{ $item["photo_vi"] }}" class="img-fluid w-100" alt="<?=$item["photo_vi"]?>" onerror='this.src="img/{{ $width  }}x{{ $height }}/"'>
      </a>
    </div>
  @endforeach
</div>
<!-- Add Arrows -->
@if($slider_pagination)
  <div class="swiper-pagination"></div>
@endif
@if($slider_pagination)
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
@endif
</div>
</div>