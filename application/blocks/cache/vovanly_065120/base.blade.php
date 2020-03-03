<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php echo $__env->make('layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
    <?php echo $__env->yieldPushContent('css'); ?>

    <?php
    include _application.'blocks/templates/vovanly_065120/style.css';
    ?>
  </style>
  <script src="assets/public/js/jquery-3.4.1.min.js"></script>
  <script src="assets/public/plugin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script src="assets/public/plugin/swiper/swiper.min.js"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>
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
  });

    var swiper_product = new Swiper('#ykien .swiper-container', {
      slidesPerView: 3,
      initialSlide: 3,
      spaceBetween: 30,
      centeredSlides: true,
      loop:true,
      autoplay: {
        delay: 4000,
      },
        // pagination: '.swiper-product .swiper-pagination',
        paginationClickable: true,
        slideToClickedSlide: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        on: {
          slideChangeTransitionStart:function(){
            $(".ykien_content").removeClass("active");
          },
          slideChangeTransitionEnd: function(){
            var a = $("#ykien .swiper-slide-active .khachhang_item").data("id");
            $("."+a).addClass("active");
          }
        }

      });

    </script>

  </body>
  </html><?php /**PATH E:\www\dashboard\application\blocks\templates\vovanly_065120/base.blade.php ENDPATH**/ ?>