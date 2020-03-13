<?php 
$menu_array = array(
	'index' => array(
		'title' => "Trang chủ"
	),
	'gioi-thieu' => array(
		'title' => "Giới Thiệu"
	),
	'san-pham' => array(
		'title' => "Sản phẩm",
		'table' => 'product',
		'type'	=> 'san-pham',
		'lv'	=> 2
	),
	
	// 'du-an' => array(
	// 	'title' => "Dự Án Công Trình",
	// 	'table' => 'baiviet',
	// 	'type'	=> 'du-an',
	// 	// 'lv'	=> 1
	// ),
	'dich-vu' => array(
		'title' => "Dịch Vụ",
		'table' => 'baiviet',
		'type'	=> 'dich-vu',
		// 'lv'	=> 1
	),
	'thiet-ke' => array(
		'title' => "Thiết kế nội thất",
		'table' => 'baiviet',
		'type'	=> 'thiet-ke',
		// 'lv'	=> 1
	),
	'khach-hang' => array(
		'title' => "Khách Hàgn",
		'table' => 'baiviet',
		'type'	=> 'khach-hang',
		// 'lv'	=> 1
	),
	'tin-tuc' => array(
		'title' => "Tin Tức",
		'table' => 'baiviet',
		'type'	=> 'tin-tuc',
		// 'lv'	=> 1
	),
	
	
	'lien-he' => array(
		'title' => "Liên Hệ"
	),
	
	
);
$system_level = array('list','cat','item','sub');
$_com = empty($GET['tenkhongdau']) ? '':$GET['tenkhongdau'];
?>
<ul class="nav-menu mb-0">
	<?php 
	$sub_menu = array();
	foreach($menu_array as $key => $item){
		if(!empty($item['lv'])){ 

			$d->reset();
			$_tmp = $d->query("select id,tenkhongdau,ten_$lang from #_product_list where hienthi=1 and type='".$item['type']."' order by stt asc ");
			$_tmp =$d->result_array();
			$sub_menu[$key]=$_tmp;
		}
		?>
		<li class="menu <?=$_com==$key?'active':''?>"><a href="<?=$key==='index'?'':$key?>"><?=$item["title"]?></a>
			<?php if(!empty($sub_menu[$key])){ ?>
				<ul class="nav-menu-list">
					<?php foreach($sub_menu[$key] as $list){ ?>
						<li class="menu-list"><a class="menu-list-text" href="<?=$list["tenkhongdau"]?>"><?=$list["ten_$lang"]?></a>
							<?php if($item['lv'] > 1){
								$d->reset(); 
								$d->query("select id,tenkhongdau,ten_$lang from #_".$item['table']."_cat where hienthi=1 and id_list='".$list['id']."'");
								$product_cat = $d->result_array();	
								if(!empty($product_cat)){ ?>
									<ul class="nav-menu-cat">
										<?php foreach($product_cat as $cat){ ?>
											<li class="menu-cat"><a class="eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee" href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
												<?php if($item['lv'] > 2){ 
													$product_items = result_array("select id,tenkhongdau,ten_$lang from #_".$item['table']."_item where hienthi=1 and id_list='".$list['id']."'");
													if(!empty($product_items)){ ?>
														<ul class="nav-menu-item">
															<?php foreach($product_items as $items){ ?>
																<li class="menu-item"><a href="<?=$items["tenkhongdau"]?>"><?=$items["ten_$lang"]?></a></li>
															<?php } ?>
														</ul>
													<?php } ?><?php } ?>
												</li>
											<?php } ?>
										</ul>
									<?php } ?>
								<?php } ?>	
							</li>	
						<?php }?>
					</ul>
				<?php }?>	
			</li>
		<?php }?>
	</ul>
