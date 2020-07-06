<div id="product_list">
	<?php 
	$index_product_list = result_array("SELECT id, ten_$lang,tenkhongdau
FROM #_product_list
WHERE id IN( SELECT id_list FROM #_product WHERE type='product' and hienthi=1 ) and  hienthi=1
ORDER BY stt ASC");
	if(!empty($index_product_list)){ 
		foreach($index_product_list as $list){
			$_product_cat = result_array("select tenkhongdau,ten_$lang from #_product_cat where type='product' and id_list='".$list['id']."' and hienthi=1  order by stt asc,id desc");
			$_product = result_array("select id,photo,tenkhongdau,ten_$lang,giaban from #_product where hienthi=1 and type='product' and noibat=1 and id_list='".$list['id']."' order by stt asc,id desc limit 8");
			?>
			<div class="block-list" id="block-list-<?=md5($list["tenkhongdau"])?>">
				<div class="container">
					<div class="header-long-title">
						<h2 class="h2-long-title">
							<span><?=$list["ten_$lang"]?></span>
						</h2>
						<div class="long-title-right">
							<?php foreach($_product_cat as $cat){ ?>
								<span>
									<a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
								</span>
							<?php } ?>
						</div>
					</div>
					<div class="content">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach($_product as $item){ ?>
									<div class="swiper-slide">
										<?php include _template."layout/product_item.php";?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
</div>
<div id="block-quangcao">
	<?php
	$d->reset();
	$row_quangcao = "select photo_$lang,link from #_photo where type='quangcao' order by id desc";
	$d->query($row_quangcao);
	$row_quangcao = $d->result_array();
	if($row_quangcao[0]['photo_'.$lang]!="") {
		?>
		<a href="<?=$row_quangcao[0]['link']?>" class="quangcao"><img class="img-fluid w-100" src="<?=_upload_hinhanh_l.$row_quangcao[0]['photo_'.$lang]?>" alt="<?=$row_quangcao[0]['photo_'.$lang]?>" /></a>
	<?php } ?>
</div>
<?php
	$result_album=result_array("select id,photo,tenkhongdau,ten_$lang,mota_$lang from #_baiviet where hienthi=1 and type='album' order by stt,id desc limit 5");
	?>	
	<div id="block-album" class="py-40">
		<div class="container">
			<?=header_title("HÌNH ẢNH KHÁCH HÀNG")?>
		
		<div class="row-10">
			<div class="items-3">
				<?php foreach($result_album as $stt => $item){
						$w = 400;
						$h = 590;
						if($stt % 2 ==1){
							$h = 320;
						}

					
					?>
						<div class="album_item <?=$clc?>">
							<div class="image overlay">
								<a href="<?=$item["tenkhongdau"]?>" class="title">
									<img src="thumb/1-<?=$w?>-<?=$h?>/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img" <?=errimg($w,$h)?>></a>
									<div class="overlay-item"><a href="<?=$item["tenkhongdau"]?>" class="title"><?=$item["ten_$lang"]?>
								</a>
							</div>
						</div>
					</div>
				<?php if($stt == count($result_album) - 1){
					echo '</div>';
				}else if($stt % 2 == 1)
				{ echo('</div><div class="items-3">');}
				
				?>
			<?php } ?>
		</div>
	</div>
</div>
</div>
<?php
$index_tintuc=result_array("select id,photo,tenkhongdau,ten_$lang,mota_$lang from #_baiviet where hienthi=1 and type='tintuc' order by stt,id desc");
?>	

<div id="block-general">
	<div class="container">
<?=header_title("Tin tức & video")?>
		<div class="row-20">
			<div class="col-lg-8 col-sm-12 col-12">
				<div class="w-100 df jc-between wrap">
					<div id="main_tintuc">
						<div class="row-item tintuc jc-between mb-20 hover wrap">
							<div class="image ">
								<a  href="<?=$item["tenkhongdau"]?>">
									<img src="thumb/1-360-220/upload/baiviet/<?=$index_tintuc[0]["photo"]?>" alt="<?=$index_tintuc[0]["photo"]?>" class="img" <?=errimg(360,220)?>>
								</a>
							</div>
							<div class="detail">
								<h3 class="mt-10"><a href="<?=$index_tintuc[0]["tenkhongdau"]?>"><?=$index_tintuc[0]["ten_$lang"]?></a></h3>
								<div class="mota">
									<?=catchuoi($index_tintuc[0]["mota_$lang"],60)?>
								</div>
							</div>
						</div>
					</div>
					<div id="vertical_tintuc">
						<div  id="vertical_tintuc_slider">
							<?php foreach($index_tintuc as $item){ ?>
								<div>
									<div class="row-item tintuc jc-between mb-20 hover">
										<div class="image ">
											<a  href="<?=$item["tenkhongdau"]?>">
												<img src="thumb/1-150-110/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img" <?=errimg(150,110)?>>
											</a>
										</div>
										<div class="detail">
											<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
											<div class="mota">
												<?=catchuoi($item["mota_$lang"],60)?>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 col-sm-6 col-12">
				<?php include _template."layout/video_thumb.php";?>
			</div>
		</div>
	</div>
</div>


<?php
$index_khachhang=result_array("select id,photo,tenkhongdau,ten_$lang,mota_$lang from #_baiviet where hienthi=1 and type='khachhang' order by stt,id desc");
if(!empty($index_khachhang)){ 
	?>	
	<div id="block-khachhang">
		<div class="container">
			<div class="khachhang-container">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach($index_khachhang as $item){ ?>
							<div class="swiper-slide">
								<div class="khachhang_item">
									<div class="image ">
										<a  href="<?=$item["tenkhongdau"]?>">
											<img src="thumb/1-260-260/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img" <?=errimg(260,260)?>>
										</a>
									</div>
									<div class="detail">
										<div class="title">Ý KIẾN KHÁCH HÀNG</div>
										<div class="mota">
											<?=catchuoi($item["mota_$lang"],300)?>
										</div>
										<h3><?=$item["ten_$lang"]?></h3>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>			