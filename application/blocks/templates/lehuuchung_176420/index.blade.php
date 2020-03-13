@extends('base')
@section('content')

		@include('layout.header')

<div id="menu-top">
	<div class="container">
		@include('layout.menu')
	</div>
</div>
@include('layout.slider')
@include('layout.product_list')
@include('layout.gioithieu')
@endsection




