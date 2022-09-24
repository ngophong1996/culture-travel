<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Ngày lễ truyền thống</title>
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
<section id="slider" style=" background: url('/img/771820.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Ngày lễ truyền thống</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span><span class="yellowInRight"><a href="{{ url('vietnam') }}">Việt Nam</a></span>Ngày lễ truyền thống</div>
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
				<h1>Ngày lễ truyền thống</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Ngày lễ truyền thống là nét đẹp văn hoá của người Việt Nam"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Ngày lễ truyền thống là loại hình văn hóa đặc sắc, là sản phẩm tinh thần của 54 dân tộc anh em Việt Nam, được truyền từ đời nay qua đời khác. Các hoạt động lễ hội như một bảo tàng sống về phong tục, tập quán, về lối sống độc đáo, đặc thù của từng dân tộc, từng địa phương. Đây còn là sự kiện tưởng nhớ, tỏ lòng biết ơn của nhân dân đối với các vị thần linh, các anh hùng dân tộc có công với cộng đồng, với đất nước</p></div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<section id="content">
    <div class="ad-banner">
        <img width="80%" class="img-fluid" src="/img/ngayle1.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left">
                <img data-aos="zoom-in-right" width="80%" class="img-fluid aos-init aos-animate" src="/img/vh5.jpg" alt="">
                <p>Lễ hội Trung thu</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
                <h2>
                    Một số ngày lễ lớn trong năm
                </h2>
                <p>Không chỉ ở Việt Nam mà các quốc gia khác trên thế giới cũng có rất nhiều ngày lễ để kỷ niệm, ghi nhớ và ghi dấu những thời khắc quan trọng trong lịch sử.</p>
                <p style="font-weight: 800;">Ngày lễ quan trọng theo Âm lịch</p>
                <ul>
                    <li>Tết Nguyên Đán</li>
                    <li>Tết Nguyên Tiêu</li>
                    <li>Tết Hàn Thực</li>
                    <li>Giỗ tổ Hùng Vương</li>
                    <li>Lễ Phật Đản</li>
                    <li>Tết Đoan Ngọ</li>
                    <li>Lễ Vu Lan</li>
                    <li>Tết Trung Thu</li>

                </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ad-1">
                <div class="img-text">
                    <img data-aos="zoom-in-right" width="80%" class="img-fluid aos-init" src="/img/ngayle3.jpg" alt="">
                    <p class="adhs"></p>
                </div>
                <p style="font-weight: 800;">Ngày lễ theo Dương lịch
                </p><br>
                <ul>
                    <li>Ngày văn hoá dân gian Việt Nam</li>
                    <li>Ngày giải phóng miền Nam</li>
                    <li>Ngày quốc tế lao động</li>
                    <li>Ngày trẻ em Quốc tế</li>
                    <li>Ngày thương binh liệt sĩ</li>
                    <li>Ngày thành lập Quốc gia</li>
                    <li>Ngày quốc tế Phụ nữ</li>
                    <li>Ngày Cách mạng Tháng 8</li>
                    <li>Ngày giải phóng thủ đô HÀ Nội</li>
                    <li>Ngày thành lập Mặt trận thống nhất dân tộc Việt Nam</li>
                    <li>Ngày thành lập Quân đội nhân dân Việt Nam</li>
                    <li>Ngày nhà giáo Việt Nam</li>
                    <li>Giáng sinh</li>
                </ul>
            </div>
            <div data-aos="zoom-in-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ad-2 aos-init">
                <img width="80%" class="img-fluid" src="/img/ngayle.jpg" alt="">
                
                <img width="80%" class="img-fluid mrt" src="/img/ngayle7.jpg" alt="">
               
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="thuvien">
                    <h4>Thư viện ảnh</h4>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 thuvienanh">
                <div class="image">
                    <img class="myimg" src="/img/ngayle1.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class="myimg" src="/img/ngayle2.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class="myimg" src="/img/ngayle3.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/ngayle4.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/ngayle5.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/ngayle6.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/ngayle7.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/ngayle8.jpg" alt="" style="cursor: zoom-in;">
                </div>
                <div class="image">
                    <img class=" myimg" src="/img/vh5.jpg" alt="" style="cursor: zoom-in;">
                </div>

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