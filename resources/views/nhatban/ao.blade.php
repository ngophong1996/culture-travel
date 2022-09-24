<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Trang phục truyền thống</title>
    <link rel="stylesheet" href="css/aodai.css">
	<script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	<!-----bootstrap-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!------Ajax------>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>

</head>
<body>


<!------------------------nav bar----------------------------------------------->
<style>
    .navbar-brand {
  transform: translateX(-50%);
  left: 50%;
  top: 0px;
  position: absolute;
}
.navbar-brand img {
        width: 85px;
    }
.navbar-toggle { z-index: 1; }
.navbar {
	
background-color:#0F0F0F !important;
  padding-top: 27px;
  padding-bottom: 27px;;
}
.nav-link {
	padding: 0;
}.dropdown-menu {
	width: 200px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<div class="container-fluid">
		
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#"><img src="/img/CultureTravel.png"></a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-left">
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle user-profile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					@if(Auth::user()->image)
                        <img class="image rounded-circle" src="{{'/img/'.Auth::user()->image}}" alt="profile_image">
                    @endif
					{{ Auth::user()->name }}
				</a>
				<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="{{ url('/profile') }}">Cài dặt tài khoản</a></li>
				<li><form method="POST" action="{{ route('logout') }}">
					@csrf
					<a href="route('logout')"
						onclick="event.preventDefault();
									this.closest('form').submit();">
						{{ __('Đăng xuất') }}
					</a>
					</form></li>
				</ul>
		  		</li>
		</ul>
	  </div>
	<div>
  
	</div>
	</div>
  </nav>
<!--------------------slider-------------------------------------------------------------------------------->
<section id="slider" style=" background: url('/img/mount5.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Trang phục truyền thống</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span><span class="yellowInRight"><a href="{{ url('nhatban') }}">Nhật Bản</a></span>Trang phục truyền thống</div>
		  </div>
	</div>
</section>
<!------------------->

<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-4 aboutLeft pl-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">
				<p></p>
				<h2>Kimono</h2><h1>Nhật Bản</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Kimono - Nét đẹp say đắm lòng người</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Mỗi đất nước, mỗi dân tộc lại có một trang phục truyền thống riêng. Nhưng có lẽ bộ Kimono của Nhật Bản thực sự đã tạo nên một câu chuyện thú vị bởi kiểu dáng độc đáo, bởi cách mặc và làm nên một bộ Kimono khá cầu kỳ, và bởi ngay cả sự hiện diện đặc sắc trong những dịp nghi lễ của người Nhật.</p>
				<p>Nói đến Kimono là người ta nghĩ ngay đến xứ  Phù Tang với hình ảnh người phụ nữ Nhật Bản đẹp, kiêu sa cùng với những cánh hoa anh đào mỏng manh. Và Kimono quả thực là độc đáo nhất trong số trang phục truyền thống của Nhật Bản.</p></div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<section id="content">
<div class="ad-banner">
	<img width="80%" class="img-fluid" src="/img/kimono4.jpeg" alt="">
</div>
<div class="container">
	<div class="row">
		<div data-aos="zoom-in-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left aos-init">
			<img width="80%" class="img-fluid" src="/img/kimono1.jpeg" alt="">

		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
			<p>Xưa kia, cả đàn ông và phụ nữ đều sử dụng Kimono như trang phục hàng ngày. Nhưng ngày nay, thường chỉ có phụ nữ Nhật mặc Kimono như nghi phục chính thức, còn hình ảnh người đàn ông Nhật Bản mặc Kimono thường chỉ thấy trong các đám cưới hoặc các dịp lễ theo kiểu truyền thống khác.

				<br><br>Du nhập vào Nhật Bản vào khoảng đầu thế kỷ thứ 7, thời đại trị vì của vua Heian dưới dạng những bộ đồ lót bằng cotton, nhưng phải đến khi người Nhật đã chắt lọc được những tinh túy, sáng tạo nó thành một kiểu riêng , đẹp và cầu kỳ hơn rất nhiều thì Kimono mới chính thức được đón nhận và phát triển nhanh chóng trở thành trang phục truyền thống của người Nhật. </p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ad-1">
			<div class="img-text">
				<img data-aos="zoom-in-right" width="60%" class="img-fluid aos-init" src="/img/kimono7.jpeg" alt="">
				
			</div>

			<p>Kimono dành cho nam giới và nữ giới có những điểm khác biệt riêng và Kimono nam giới được may thêm quần chẽn ở bên trong. Các võ sĩ đạo cũng đã tạo ra một bộ y phục Kimono riêng khi lên võ đài với tên gọi là Hakama với các nếp gấp mang ý nghĩa tôn vinh tinh thần võ sĩ đạo.
				<br><br>5 nếp gấp đằnh trước, và 2 nếp gấp đằng sau, mỗi nếp gấp đều có một ý nghĩa riêng: “Yuki”-lòng quả cảm; “Jin”-lòng nhân ái; “Gi”-sự công bằng, chính trực; “Rei”-sự lịch thiệp, lễ độ; “Makoto”-sự chân thành; “Chugi”-tính cống hiến, “Meiyo”-phẩm giá và danh tiếng.
				<br><br>Mỗi bộ Kimono đều được làm thủ công và mang tính đơn chiếc. Đó là một tác phẩm nghệ thuật công phu, tỉ mẩm từ khâu chọn vải, kết hợp màu sắc, trang trí hoa văn, và lựa chọn các phụ kiện đi cùng. Thiết kế của bộ Kimono cũng hết sức đặc biệt và độc đáo, gồm 8 mảnh ghép với nhau cho phép điều chỉnh kích cỡ phù hợp với người mặc.<br></p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ad-2">
			<img data-aos="zoom-in-left" width="60%" class="img-fluid aos-init" src="/img/kimono8.jpg" alt="">

			<img data-aos="zoom-in-left" width="80%" class="img-fluid mrt aos-init" src="/img/kimono5.jpeg" alt="">
			
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="thuvien">
				<h4>Thư viện ảnh</h4>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 thuvienanh">
			<div class="image">
				<img class="myimg" src="/img/kimono1.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono2.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono3.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono4.jpg" alt="" style="cursor: zoom-in;">
			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono7.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono8.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono9.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono10.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono11.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono12.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono13.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono14.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono15.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono16.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono17.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono18.jpg" alt="" style="cursor: zoom-in;">
				
			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono5.jpg" alt="" style="cursor: zoom-in;">
		
			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono6.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/kimono21.jpg" alt="" style="cursor: zoom-in;">

			</div>

			<div class="image">
				<img class=" myimg" src="/img/kimono23.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono24.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono25.jpg" alt="" style="cursor: zoom-in;">
		
			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono26.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/kimono27.jpg" alt="" style="cursor: zoom-in;">
			
			</div>
		</div>
	</div>
</section>
<!---------------->

<!--------Event----------------->
	<footer>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3 class="section-title">Giới thiệu</h3>
            <p>CultureTravel là một Website về thông tin vắn hoá của nhiều nước trên thế giới được vận hành và phát triển từ năm 2022. Các bài viết được tổng hợp đa phần từ nội dung tham khảo trên Google.</p>

            <h3 class="section-title">Cơ Hội hợp tác với CultureTravel</h3>
            <p>Cùng với mục tiêu phát triển của CultureTravel là muốn đưa thông tin nhiều hơn về văn hoá đến với độc giả. Song song đó là lượng nội dung bổ ích và chính xác về văn hoá phải được cập nhật thường xuyên.</p>

            <p>Hiện tại,CultureTravel muốn hợp tác với các bên phát triển dịch vụ du lịch và cá nhân đam mê du lịch.</p></div>
					<div class="col-md-4">
						<h3 class="section-title">Liên lạc</h3>
							<ul class="contact-info">
								<li><i class="fa-regular fa-map"></i>98 West 21th Street, Suite 721 New York NY 10016</li>
								<li><i class="fa-solid fa-phone-flip"></i>+ 1235 2355 98</li>
								<li><i class="fa-regular fa-envelope"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="fa-solid fa-globe"></i><a href="#">www.yoursite.com</a></li>
							</ul>
					</div>
						<div class="col-md-4">
							<h3 class="section-title">Phản hồi</h3>
							<form class="contact-form">
								<div class="form-group">
									<label for="name" class="sr-only">Tên</label>
									<input type="name" class="form-control" id="name" placeholder="Tên">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Nội dung tin nhắn</label>
									<textarea class="form-control" id="message" rows="7" placeholder="Nội dung tin nhắn"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Gửi">
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right justify-content-md-center">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>THEO DÕI CHÚNG TÔI</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="fa-brands fa-square-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
								<a href="#"><i class="fa-brands fa-dribbble"></i></a>
								<a href="#"><i class="fa-brands fa-youtube"></i></a>
							</p>
							<p>&copy; 2022 <a href="#">Culture Travel</a> at Home. All Rights Reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="/js/zooming.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            new Zooming().listen('.thuvienanh img');
            $(window).scroll(function() {

                if (this.scrollY > 400) {
                    $('.scroll-up-btn').addClass("show");
                } else {
                    $('.scroll-up-btn').removeClass("show");
                }
            });
            $('.scroll-up-btn').click(function() {
                $('html').animate({
                    scrollTop: 0
                });
                $('html').css("scrollBehavior", "auto");
            });
        </script>

</body>
</html>