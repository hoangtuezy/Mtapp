@php
$d->reset();
$d->query("select photo_vi,link from #_photo where type='banner' ");
$row_banner = $d->fetch_array();

@endphp
<div id="header">
	<div class="container flex w js ac">
		<div id="banner">
			<a href="">
				<img src="thumb/1-330-112/upload/hinhanh/{{ $row_banner["photo_vi"] }}" alt="banner" onerror='this.src="img/330x112/"'/>
			</a>
		</div>
		<div id="timkiem">
			<form action="tim-kiem" method="get" name="frm_timkiem" id="ezy_search">
				<input type="text" name="keyword" id="keyword"/>  
				<input type="submit"/>
			</form> 
		</div>
	</div>
</div>
</div>
@push('css')
<style>
	#header{
		background-color: #ececec;
	}
</style>
@endpush

@push('js')
<script>
	$(document).ready(function(){

	});
</script>
@endpush