@php
$d->reset();
$d->query("select * from #_info where type='gioi-thieu' ");
$index_gioithieu = $d->fetch_array();

@endphp
<div id="gioithieu">
	<div class="container flex jb w">
		<div class="detail">
			<div class="gioithieu-header">
				<div class="label">Giới thiệu công ty</div>
				<div class="title">{{ $index_gioithieu["ten_vi"] }}</div>
			</div>
			<div class="gioithieu-content">
				{{ $index_gioithieu["mota_$lang"] }}
			</div>
			<div class="more">
				<a href="gioi-thieu" class="xemthem">Xem thêm</a>
			</div>
		</div>
		<div class="image">
			<img src="images/gioithieu.png" alt="Giới thiệu " class="img-fluid">
		</div>
	</div>
</div>