@php
	$db->reset();
	$db->query("select photo_vi,link from #_photo where type='logo' ");
	$row_logo = $db->fetch_array();

	$db->reset();
	$db->query("select photo_vi,link from #_photo where type='banner'");
	$row_banner = $db->fetch_array();
@endphp
<div id="header">
	<div class="container d-flex">
		<div id="logo">
			<a href="">
				<img src="http://source.test/upload/hinhanh/{{$row_logo["photo_vi"]}}" alt="logo" />
			</a>
		</div>
		<div id="banner">
			<a href="">
				<img src="http://source.test/upload/hinhanh/{{$row_banner["photo_vi"]}}" alt="banner"  class="img-fluid"/>
			</a>
		</div>
	</div>
</div>
@include('layout.menu')
<div id="slider">
	<img src="assets/images/slider.jpg" alt="" class="img-fluid w-100">
</div>

