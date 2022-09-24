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
<section id="slider" style=" background: url('/img/771820.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Trang phục truyền thống</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span><span class="yellowInRight"><a href="{{ url('vietnam') }}">Việt Nam</a></span>Trang phục truyền thống</div>
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
				<h2>Áo dài</h2><h1>Việt Nam</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Di sản văn hóa Việt, niềm tự hào của người Việt Nam"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Áo dài từ lâu đã trở thành quốc phục của Việt Nam, thể hiện được bản sắc văn hóa dân tộc của người Việt Nam, được nhiều đại diện sắc đẹp của Việt Nam lựa chọn là trang phục trong nhất nhiều chương trình, lễ hội lớn nhằm tôn vinh giá trị áo dài cũng như giới thiệu quảng bá văn hóa, đất nước con người Việt Nam. Từ nhỏ đến lớn, từ nam đến nữ ai ai cũng thể khoác chiếc áo dài trên người với đầy niềm kiêu hãnh và tự hào.</p></div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<section id="content">
<div class="ad-banner">
	<img width="80%" class="img-fluid" src="/img/aodaitet1.jpg" alt="">
</div>
<div class="container">
	<div class="row">
		<div data-aos="zoom-in-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left aos-init">
			<img width="80%" class="img-fluid" src="/img/aodai2.jpg" alt="">
			<p>Trang phục truyền thống ngày tết</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
			<p>Đã từ lâu, khi nhắc đến người phụ nữ Việt Nam, bạn bè quốc tế lại trầm trồ nói về chiếc áo dài. Quả thực, chiếc áo dài Việt Nam xứng đáng được coi là loại trang phục truyền thống thể hiện được vẻ đẹp và tâm hồn người phụ nữ Việt Nam.

				Gọi là <strong>"Áo dài"</strong> là theo cấu tạo của áo, thân áo gồm 2 mảnh bó sát eo của người phụ nữ rồi từ đáy lưng ong 2 thân thả bay xuống tận gót chân tạo nên những bước đi duyên dáng, mềm mại, uyển chuyển hơn cho người con gái.<br><br>Tấm áo lụa mỏng thướt tha với nhiều màu sắc kín đáo trang nhã lướt trên đường phố trở thành tâm điểm chú ý và là bông hoa sáng tôn lên vẻ yêu kiều, thanh lịch cho con người và khung cảnh xung quanh. Chiếc quần may theo kiểu quần ta ống rộng bằng thứ vải đồng chất đồng màu hay sa tanh trắng nâng đỡ tà áo và làm tăng sự mềm mại thướt tha cho bộ trang phục mượt mà duyên dáng, gợi vẻ đằm thắm đáng yêu.</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ad-1">
			<div class="img-text">
				<img data-aos="zoom-in-right" width="60%" class="img-fluid aos-init" src="/img/aodai18.jpg" alt="">
				
			</div>

			<p>Ngày Tết hay lễ hội quê hương, đám cưới hay những buổi lên chùa của các bà, các mẹ, các chị, chiếc áo dài nâu, hồng, đỏ... là một cách biểu hiện tấm lòng thành kính gửi đến cửa thiền một lòng siêu thoát, tôn nghiêm. Chiếc áo dài trùm gối, khăn mỏ quạ chít khéo như hoa sen, tay nâng mâm lễ kính cẩn lên cửa chùa, miệng "mô phật di đà"... hình ảnh ấy đã đi vào bức họa tranh dân gian Đông Hồ là một biểu tượng độc đáo của văn hóa Việt Nam.

				<br><br>Ngày nay trong muôn vàn sự cách tân về trang phục, váy đầm, áo ngắn, áo thời trang... chiếc áo dài Việt Nam vẫn chiếm độc tôn về bản sắc dân tộc, mang theo phong cách và tâm hồn người Việt đến với năm châu và trở thành trang phục công sở ở nhiều nơi.
			</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ad-2">
			<img data-aos="zoom-in-left" width="60%" class="img-fluid aos-init" src="/img/aodai7.jpg" alt="">
			<p>Áo dài học sinh</p>
			<img data-aos="zoom-in-left" width="80%" class="img-fluid mrt aos-init" src="/img/aodai23.jpg" alt="">
			
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="thuvien">
				<h4>Thư viện ảnh</h4>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 thuvienanh">
			<div class="image">
				<img class="myimg" src="/img/aodai1.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai2.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai3.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai4.jpg" alt="" style="cursor: zoom-in;">
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai7.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai8.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai9.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai10.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai11.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai12.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai13.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai14.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai15.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai16.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai17.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai18.jpg" alt="" style="cursor: zoom-in;">
				
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai19.jpg" alt="" style="cursor: zoom-in;">
		
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai20.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai21.jpg" alt="" style="cursor: zoom-in;">

			</div>

			<div class="image">
				<img class=" myimg" src="/img/aodai23.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai24.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodaitet1.jpg" alt="" style="cursor: zoom-in;">
		
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodaitet.jpg" alt="" style="cursor: zoom-in;">

			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai25.jpg" alt="" style="cursor: zoom-in;">
			
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