<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
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
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Tổng quan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Văn hoá</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Vùng miền</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Địa danh</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Sự kiện</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
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
	<div>
  
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
<!------------------->

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
<section id="content">
<div class="ad-banner">
	<img width="80%" class="img-fluid" src="/img/aodaitet1.jpg" alt="">
</div>
<div class="container">
	<div class="row">
		<div data-aos="zoom-in-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center aodai-left aos-init">
			<img width="80%" class="img-fluid" src="/img/aodai2.jpg" alt="">
			<p>テットの祝日の伝統的な衣装</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 aodai-right">
			<h2>
				ベトナムの伝統的な衣装
			</h2>
			<p>長い間、ベトナムの女性に関しては、国際的な友人はアオザイを賞賛してきました。確かに、ベトナムのアオザイは、ベトナムの女性の美しさと魂を示す伝統的な衣装と見なされるに値します。ユネスコの無形文化遺産に認定され、優しくて優しいベトナム人女性のシンボルになりました。シャツの構造から青台と呼ばれ、体は2束になっています。女性の腰に近く、その後、背中の底から2つのボディがかかとに落ちて、女の子のためのより優雅で柔らかく柔軟なステップを作成します。<br><br> 多くの控えめな色がエレガントに通りを滑る薄いシルクシャツが注目を集め、明るい花になります。それは人々と周囲の優雅さと優雅さを高めます。同色のユニフォーム生地や白のサテンで作られたワイドレッグパンツのスタイルで作られたパンツは、裾をサポートし、柔らかさと優雅さを高めて滑らかで優雅な衣装を作り、素敵な愛らしさを呼び起こします。</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ad-1">
			<div class="img-text">
				<img data-aos="zoom-in-right" width="60%" class="img-fluid aos-init" src="/img/aodai18.jpg" alt="">
				<p class="adhs">学生のアオザイ</p>
			</div>

			<p>元日や地元のお祭り、結婚式、茶色、ピンク、赤のアオザイ...は、超越した威厳のある心で禅門にあなたの誠実な心を表現する方法です。 枕を覆うロングドレス、蓮の花のように巧妙なスカーフ、お寺の扉に敬意を表してトレイを持ち上げる手、…これらの画像は、ユニークなドンホー版画に入っています。ベトナムの文化の象徴。 今、コスチューム、ドレス、ショートドレス、ファッションドレスの多くの革新の中で...ベトナムのアオザイは今でも国民的アイデンティティのユニークな位置を占めており、ベトナムの人々のスタイルと魂を世界にもたらしています。5つの大陸とオフィスウェアになります。多くの場所で。
			</p>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ad-2">
			<img data-aos="zoom-in-left" width="60%" class="img-fluid aos-init" src="/img/aodai7.jpg" alt="">
			<p>学生のアオザイ</p>
			<img data-aos="zoom-in-left" width="80%" class="img-fluid mrt aos-init" src="/img/aodai23.jpg" alt="">
			<p class="adhs">歴史的な衣装</p>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="thuvien">
				<h4>フォトライブラリ</h4>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 thuvienanh">
			<div class="image">
				<img class="myimg" src="/img/aodai1.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai2.jpg" alt="" style="cursor: zoom-in;">
				<p>テトの祝日の伝統的な衣装</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai3.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai4.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai7.jpg" alt="" style="cursor: zoom-in;">
				<p>アオザイ</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai8.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai9.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai10.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai11.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai12.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai13.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai14.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai15.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai16.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai17.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai18.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai19.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai20.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>
			<div class="image">
				<img class="myimg" src="/img/aodai21.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>

			<div class="image">
				<img class=" myimg" src="/img/aodai23.jpg" alt="" style="cursor: zoom-in;">
				<p>歴史的な衣装</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai24.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodaitet1.jpg" alt="" style="cursor: zoom-in;">
				<p>テトの祝日の伝統的な衣装</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodaitet.jpg" alt="" style="cursor: zoom-in;">
				<p>テトの祝日の伝統的な衣装</p>
			</div>
			<div class="image">
				<img class=" myimg" src="/img/aodai25.jpg" alt="" style="cursor: zoom-in;">
				<p>学生のアオザイ</p>
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