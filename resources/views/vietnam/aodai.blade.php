<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="css/vietnam.css">
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
<nav class="navbar navbar-expand-md navbar-light sticky-top">
	<div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
            	<a class="nav-link active" aria-current="page" href="#">Tổng quan</a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="#mienbac">Văn hoá</a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="#areaMap">Vùng miền</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="#famousArea">Địa danh</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#nonthEvent">Sự kiện</a>
			</li>
          </ul>
        </div>
		<a href="#" class="">
			<img src="/img/CultureTravel.png" style="width:90px;height:auto;">
		</a>
		<div class=" navbar-collapse justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle user-profile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					@if(Auth::user()->image)
                        <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image">
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
	</div>
  </nav>
<!--------------------slider-------------------------------------------------------------------------------->
<section id="slider">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Việt Nam</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span>Việt Nam</span></div>
		  </div>
	</div>
</section>
<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-4 aboutLeft pl-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">
				<p>Xin Chào</p>
				<h1>Việt Nam</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Việt Nam đất nước con người"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Việt Nam là một đất nước nhiệt đới nằm ở khu vực Đông Nam Á – trung tâm của tuyến đường biển quốc tế. Khí hậy nhiệt đới gió mùa tạo nên sự đa dạng tài nguyên sinh học của Việt Nam. Bên cạnh đó, đất nước Việt Nam có hình chữ S với 3260km đường biển có tiềm năng du lịch và thủy hải sản phong phú.</p>
					<p>Một trong những đặc điểm nổi bật khi nhắc tới Việt Nam là các địa điểm du lịch. Việt Nam là một đất nước nhỏ nhắn, xinh đẹp với những phong cảnh hùng vĩ. Nhờ có khí hậu nhiệt đới nên Việt Nam được biết tới với các cảnh đẹp hút hồn du khách như các ngọn núi tráng lệ, thung lũng ở phía bắc hay những bãi biển cát trắng ở phía nam. Vì Việt Nam có những bờ biển dài nên du lịch đặc biệt được chú trọng. Sapa, thủ đô Hà Nội, Đà Nẵng hay thành phố Hồ Chí Minh là những địa điểm thu hút khách du lịch nước ngoài nhiều nhất.</p>
					<p>Việt Nam có một lịch sử lâu dài với hơn 4000 ngàn năm đấu tranh chống kẻ thù xâm lược để bảo vệ bờ cõi, giành tự do, độc lập và xây dựng đất nước có từ hàng ngàn năm của người Việt cùng sự hội tụ của 54 thành phần dân tộc khác nhau đã góp phần tạo nên sự đa dạng, phong phú và đặc sắc cho nền văn hóa của Việt Nam.
						Bản sắc văn hóa của các dân tộc thể hiện rất rõ nét trong đời sống sinh hoạt cộng đồng và trong các hoạt động kinh tế từ phong tục tập quán, trang phục cho đến phong cách ẩm thực. Dưới đây là những nét đặc sắc của văn hóa Việt Nam mà bạn có thể tìm hiểu. </p></div>
			</div>
            <div class="d-flex midImage justify-content-center">
				<div class="blockImage">
            		<img src="/img/353350.jpg" alt="">
           		</div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<style>
	#countNumber{
	margin-top: 100px;
    margin-bottom: 120px;
    padding: 30px 0px 0px 0px;
	position: relative;
	}
	.elementor-counter .heading-decor {
		display: inline-block;
		width: 60px;
		height: 3px;
		margin-top: 25px;
		background-color: #ffcc00;
	}
	.elementor-counter {
		text-align: center;
		padding: 15px 50px 30px 50px;
		border-right: 1px solid #f0efef;
	}
	.elementor-counter .elementor-counter-number-wrapper {
		font-weight: 400;
		font-family: "takeEasy";

	}
	.elementor-counter .count-num {
		font-family: "takeEasy";
		font-size: 60px;
	}
	.elementor-counter-number-prefix, .elementor-counter-number-suffix {
		font-family: "takeEasy";
		font-size: 30px;
	}
	hr.hrForCount{
		border-top: 2px solid #b3b3b3;
		width: 100%;
		margin: 70px 0;
	}
	.elementor-counter-description{
		color: #575757 !important;
	}

</style>

<section id="countNumber">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
							<div class="elementor-counter-description">Dân số hiện tại của Việt Nam</div>
								<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">99,113,159</span><br>
							<span class="elementor-counter-number-suffix">người</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
							<div class="elementor-counter-description">Tổng diện tích đất</div>
							<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">310,060</span> <br>
							<span class="elementor-counter-number-suffix">km2</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
							<div class="elementor-counter-description">Mật độ dân số của Việt Nam</div>
							<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">320</span><br>
							<span class="elementor-counter-number-suffix">người/km2</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="hrForCount">
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
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="/assets/js/jquery.rcounterup.js"></script>
<script src="/assets/js/active.js"></script>
<script>
	AOS.init();

</script>
</body>
</html>