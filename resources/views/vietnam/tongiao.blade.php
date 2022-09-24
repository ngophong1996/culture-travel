<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Tín ngưỡng và Tôn giáo</title>
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


	

	
	<style>
		[data-id="30"]{fill:  blue;}
	</style>
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
<section id="slider" style=" background: url('/img/771820.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Tín ngưỡng và Tôn giáo</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span><span class="yellowInRight"><a href="{{ url('vietnam') }}">Việt Nam</a></span>Tín ngưỡng - Tôn giáo</div>
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
				<h1>Tín ngưỡng và Tôn giáo</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Việt Nam luôn bảo đảm sự đa dạng, hòa hợp và bình đẳng tôn giáo"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Việt Nam là quốc gia đa tín ngưỡng, đa tôn giáo. Theo thống kê chưa đầy đủ cho thấy Việt Nam có khoảng 95% dân số có đời sống tín ngưỡng, tôn giáo (trong hàng nghìn tín ngưỡng thì tín ngưỡng phổ biến là thờ cúng ông bà tổ tiên và tín ngưỡng thờ Mẫu).Tính đến nay, cả nước có khoảng 45.000 cơ sở tín ngưỡng, trong đó có hơn 2.900 di tích gắn với cơ sở tín ngưỡng, tôn giáo, một số di tích được UNESCO công nhận là di sản thế giới.</p><p> Hàng năm, Việt Nam có gần 13.000 lễ hội, gồm 5 loại: lễ hội dân gian, lễ hội lịch sử cách mạng, lễ hội tôn giáo, lễ hội du nhập từ nước ngoài, lễ hội văn hóa - thể thao và ngành nghề. Riêng trong lĩnh vực tôn giáo, Việt Nam có khoảng hơn 26,5 triệu tín đồ (chiếm 27% dân số), 43 tổ chức thuộc 16 tôn giáo được nhà nước công nhận hoặc cấp chứng nhận đăng ký hoạt động. Cả nước hiện có hơn 57,4 ngàn chức sắc, trên 147 ngàn chức việc, hơn 29,6 ngàn cơ sở thờ tự. Số lượng tín đồ theo các tôn giáo hiện nay khoảng: Phật giáo: 15,1 triệu; Công giáo: 7,1 triệu; Cao đài: 1,1 triệu; Tin lành: 1 triệu; Hồi giáo: 80.000; Phật giáo Hòa hảo: 1,3 triệu, còn lại là các tôn giáo khác (Tịnh độ Cư sỹ Phật hội, Tứ ân Hiếu nghĩa, Bà La môn, Bửu Sơn Kỳ Hương, Minh sư đạo, Minh lý đạo…).</p></div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<section id="content">
    <div class="ad-banner">
        <img width="80%" class="img-fluid" src="/img/nhathodb.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left">
                <img data-aos="zoom-in-right" width="80%" class="img-fluid" src="/img/vh6.jpg" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
                
                <p>Việt Nam là một quốc gia có nhiều loại hình tín ngưỡng và tôn giáo. Việt Nam nằm trong khu vực Đông Nam Á, ba mặt giáp biển nên rất thuận lợi cho việc giao lưu với các nước trên thế giới, đồng thời cũng là nơi rất dễ tiếp thu các dòng chảy của các nền văn hóa, tín ngưỡng, tôn giáo thế giới mà mình có. . Do sự đa dạng về tín ngưỡng, tôn giáo nên người ta thường so sánh Việt Nam với các bảo tàng tôn giáo của thế giới. Về văn hóa, sự đa dạng về tín ngưỡng, tôn giáo góp phần tạo nên sự phong phú và độc đáo của văn hóa Việt Nam.<br><br>Có nhiều tôn giáo khác nhau ở Việt Nam, bao gồm Thiên chúa giáo, Phật giáo và Ấn Độ giáo. Vì vậy, nếu khám phá văn hóa nơi đây, bạn sẽ tìm thấy vô số tác phẩm. Các tôn giáo không giống nhau, nhiều nơi đã trở thành điểm du lịch thu hút hàng nghìn du khách. Ghé thăm và khám phá mỗi năm. Chẳng hạn như chùa Một Cột (Hà Nội), Văn Miếu (Hà Nội), Nhà thờ Đức Bà (TP. Hồ Chí Minh), đền thờ Bà Mariamman.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center ad-1">
                <img data-aos="zoom-in-right" width="80%" class="img-fluid" src="/img/vh1.jpg" alt="">
                <p>Cũng vậy, phong tục thờ cúng gia tiên là một trong những nét đẹp không thể bỏ qua khi nói về văn hóa của người Việt. Việc thờ cúng cũng giống như thể hiện hành động uống nước nhớ nguồn, ghi nhớ công ơn sinh thành, dưỡng dục. Của cha anh ấy, anh ấy đã đi trước. Vì vậy, hầu hết tất cả các gia đình Việt Nam đều có ít nhất một bàn thờ gia tiên. Ngoài những ngày kỷ niệm lớn, người Việt thường thắp hương tưởng nhớ những ngày đặc biệt khác như Tết Nguyên tiêu, ngày rằm tháng Giêng, Thanh minh, Táo quân, Thần minh. Thờ cúng tổ tiên là một nét sinh hoạt văn hóa lâu đời và cho đến nay, hoạt động này vẫn được lưu truyền nhằm tỏ lòng thành kính đối với những người đã khuất.
                </p>
            </div>
            <div data-aos="zoom-in-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center ad-2">
                <img width="80%" class="img-fluid" src="/img/vh9.jpg" alt="">
                <img width="80%" class="img-fluid mrt" src="/img/vh13.jpg" alt="">
            </div>


        </div>
</section>
<!---------------->

<!-------StartMap------->


<!--------EndMap--------->





<!-------Start_famousArea---------->

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