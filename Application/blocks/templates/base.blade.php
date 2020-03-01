<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/plugin/bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/plugin/swiper/swiper.min.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
		@stack('style')	 
</head>
<body>
	@include('layout.header')
		@yield('content')
	@include('layout.footer')

	 	<script src="assets/plugin/swiper/swiper.min.js"></script>
	 @stack('scripts')
	 <script>
  var mySwiper = new Swiper ('#quytrinh .swiper-container', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
   
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      }
  })
  </script>
</body>
</html>