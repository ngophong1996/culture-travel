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
<section id="slider" style=" background: url('/img/mount5.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Tín ngưỡng và Tôn giáo</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span><span class="yellowInRight"><a href="{{ url('nhatban') }}">Nhật Bản</a></span>Tín ngưỡng - Tôn giáo</div>
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
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Tôn giáo Nhật Bản là sự uyển chuyển linh hoạt"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Thần đạo (神道 ( しんとう) là một tôn giáo đa thần, có nguồn gốc từ những tín ngưỡng thời cổ xưa ở Nhật Bản. Người ta thờ cúng các sự vật, hiện tượng được coi là có năng lực linh thiêng trong tự nhiên và xã hội, như đỉnh núi, con sông, biển, mặt trời, mưa, dông bão, các vị anh hùng và tổ tiên để mong được sự phù hộ, chở che trong cuộc sống hiện tại. Những truyền thuyết về nguồn gốc thần linh của Hoàng tộc đã trở thành một phần quan trong của giáo lý Thần đạo.</p>
					<p> Từ Thần đạo (神道 ( しんとう) chỉ những nghi lễ tế thần và đền thờ được thấy xuất hiện rất sớm, nhưng phải đến tận cuối thế kỷ thứ XII thuật ngữ này mới mang ý nghĩa chỉ một loại giáo lý tôn giáo nhất định. Thần đạo có một quá trình kết hợp lâu dài với Phật giáo dưới dạng tín ngưỡng Thần Phật tập hợp.</p>
				<p></p></div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<section id="content">
    <div class="ad-banner">
        <img width="80%" class="img-fluid" src="/img/jpton4.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left">
                <img data-aos="zoom-in-right" width="80%" class="img-fluid" src="/img/jpton2.jpg" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
                
                <p>Đầu thế kỷ XIX một phong trào Thần đạo phục cổ đã nổi lên và dần chiếm ưu thế, Phật giáo bị tách ra khỏi Thần đạo vì bị coi là một tôn giáo ngoại lai. Sau cải cách Minh Trị và đặc biệt trong Chiến tranh Thế giới thứ II, Thần đạo được các nhà chức trách đưa lên thành quốc giáo.<br><br>Kết thúc Chiến tranh Thế giới thứ II quân Đồng Minh đã chiếm đóng Nhật Bản, giải thể Thần đạo Nhà nước- một tổ chức Thần đạo được coi là có liên quan đến việc cổ súy tư tưởng dân tộc cực đoan và chủ nghĩa quân phiệt. Theo Hiến pháp Nhật Bản sau chiến tranh, Thần đạo không còn được hưởng bất kỳ một đặc quyền nào và tồn tại bình đẳng như các tôn giáo khác. Ngày nay trong ý thức dân chúng Thần đạo tồn tại song song và đôi khi hoà trộn với Phật giáo. Nhiều người Nhật kết hôn theo nghi thức Thần đạo và được mai táng theo nghi thức Phật giáo.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center ad-1">
                <img data-aos="zoom-in-right" width="80%" class="img-fluid" src="/img/jpton5.jpg" alt="">
                <p>Theo thống kê, Nhật Bản là quốc gia Phật giáo, với hơn 85% dân số theo Đạo Phật. Hiện ở Nhật Bản có 75.000 chùa với gần 200.000 sư. Phật giáo được truyền vào Nhật Bản khoảng năm 552 sau công nguyên từ vương quốc Bách Tế (nay thuộc Triều Tiên). Lúc bấy giờ quốc vương Bách Tế đã cử một sứ đoàn mang đến biếu Thiên hoàng Nhật Bản một pho tượng Phật quý và một số sách kinh điển nhà Phật.<br>
<br>
                    Đến thời Hei-an (794- 1185) đã xuất hiện và phát triển hai tông phái lớn là Chân Ngôn tông và Thiên Thai tông. Bước vào thời Kamakura (1185-1333) Phật giáo trên quần đảo này phát triển rực rỡ với sự truyền bá của hàng loạt các tông phái mới khác từ Trung Quốc như Thiền tông (Zen), Tào Động tông, Tịnh Thổ tông… đem lại hy vọng được giải thoát cho đông đảo các tầng lớp dân chúng.
					<br><br>Có thể nói đặc điểm cơ bản cuả tôn giáo Nhật Bản là sự uyển chuyển linh hoạt. Tất cả đã được Nhật Bản hoá để cho phù hợp với điều kiện đặc biệt của xứ sở hoa anh đào.
                </p>
            </div>
            <div data-aos="zoom-in-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center ad-2">
                <img width="80%" class="img-fluid" src="/img/jpton3.jpg" alt="">
                <img width="80%" class="img-fluid mrt" src="/img/jpton2.jpg" alt="">
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