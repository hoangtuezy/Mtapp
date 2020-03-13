<section id="newsletter">
	<div class="container">
		<div class="header">
			<h2>ĐĂNG KÝ NHẬN TIN</h2>
			<div class="desc">Chúng tôi luôn tư vấn và hỗ trợ khách hàng tốt nhất</div>
		</div>
		<div>
			<form method="post" name="frm_newsletter" action="newsletter.html">
				<div class="row">
					<div class="col-xs-12 col-md-6 inputx">
						<input name="tenlienhe" type="text" required class="form-control" id="tenlienhe" placeholder="Tên" size="40" />
					</div>
					<div class="col-xs-12 col-md-6 inputx">
						<input name="email" id="email" required type="text" class="form-control" placeholder="Email" size="40"  />
					</div>		  
					<div class="col-xs-12 col-md-6 inputx">				
						<input name="dienthoai" required type="text" class="form-control" id="dienthoai" placeholder="Số điện thoại" size="40"/>

					</div>
					<div class="col-xs-12 col-md-6 inputx">				
						<input name="noidung" required type="text" class="form-control" id="noidung" placeholder="nội dung" size="40"/>

					</div>
					<div class="col-xs-12 inputx text-center">
						<input type="hidden" name="recaptcha_response" class="recaptcha_response" id="recaptchaResponse_ct">
						<!-- <input class="button" type="button" value="Xóa" onclick="document.frm_newsletter.reset();" /> -->
						<input class="button" type="submit" value="Gửi Đi" />
					</div> 
					<div class="clearfix"></div>                     
				</div>                             
			</form>
		</div>
	</div>
</section>
<style>
	#newsletter{
		background: url(images/bg_newsletter.jpg);
		background-size: cover;
		padding: 40px 0;
	}
	#newsletter .header{
		text-align: center;
		margin-bottom: 15px;
		color: #fff;
	}
	#newsletter h2{
		font-family: utm-helvetin;
		font-size: 25px;
		color: #ffd800;
		margin-bottom: 10px;
	}
	#newsletter form{
		width: 860px;
		max-width: 100%;
		margin: 0 auto;
	}
	#newsletter .inputx {
		margin-bottom: 15px;
	}
	#newsletter .inputx input{
		background-color: rgba(255, 253, 253, 0.4);
		border: none;
		border-radius: 30px;
		padding-left: 15px;
		height: 45px;
		outline: none;
		
	}
	#newsletter .inputx:nth-child(even) input{
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
	}
	#newsletter .inputx:nth-child(odd) input{
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}
	#newsletter input[type=submit]{
		background-color: #df0000;
		border-radius: 0;
		font-family: roboto-bold;
		border-radius: 30px!important;
		width: 150px;
		color: #FFF;
		text-transform: uppercase;
	}
</style>