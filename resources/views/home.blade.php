<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Culture Travel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	
    <!-- change here -->
    <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/pic.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/img/CultureTravel.png"/> 
    
    <link href="/css/loader.css" rel="stylesheet">
  </head>
<body>

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
padding-top: 31px;
padding-bottom: 30px;
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
				<a class="nav-link" href="#news">Tin tức</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('about') }}">Về chúng tôi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
      @if (Route::has('login'))
                          
                    @auth
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
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng nhập</a>
                    @endauth
                </div>
            @endif
		
		</ul>
	  </div>
	<div>
  
	</div>
	</div>
  </nav>
  <section id="videoCover">
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="/img/cultute1minute.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3"><b>Culture Travel at Home</b></h1>
          <p id="slogan" class="lead mb-0">Du lịch tại nhà, không lo về giá, chỉ sợ bạn mê.</p>
        </div>
      </div>
    </div>
  </section>

<!------ourMission-------->
  <section id="mission">
    <div class="container text-center">
      <h1 style="">Bằng việc thiết kế một Website với giao diện hiện đại, dễ dàng sử dụng,</h1>
      <h1 style="">chúng tôi sẽ mang đến chó bạn những kiến thức thú vị về</h1>
      <h1 style="color:#FFCC00 ">kỳ quan văn hoá của Thế giới</h1>
    </div>
  </section>
<!--------content------>


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
  <div class="col-lg-4">
      <nav  class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: Japan" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Japan</title><img class="country"  width="auto" height="140" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1280px-Flag_of_Japan.svg.png"></img></nav>

      <h2 class="fw-normal">Nhật Bản</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('nhatban.index') }}">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: VietNam" preserveAspectRatio="xMidYMid slice" focusable="false"><title>VietNam</title><img class="country" width="auto" height="140"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/188px-Flag_of_Vietnam.svg.png"></img></nav>

      <h2 class="fw-normal">Việt Nam</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('vietnam.index') }}">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  
  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: Other Country" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Other Country</title><img class="country" width="auto" height="140"  src="https://i.pinimg.com/564x/ac/e8/17/ace817891a14afe65bbbb7105866e1f1.jpg"></img></nav>

      <h2 class="fw-normal">Các nước khác</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('other') }}">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

<!--------Picture libary---------->
  <section class="full-bleed" id="picture">
  <div style=" width: 100%; height:auto; background-color: #FAEBD7 ;" class="layout text-center">
    <h1 class="piccap">Công viên Văn Hóa Thế Giới</i></h1>
      <div>
      <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/2-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>Hang động tự nhiên lớn nhất thế giới, được khám phá vào năm 2009 và khai thác du lịch vào 2013.</h3>
              <h5>HANG SƠN ĐOÒNG</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/3-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>Quần thể danh lam thắng cảnh Việt Nam nổi tiếng tại Ninh Bình. Đây là vùng đất lý tưởng của các loài động, thực vật quý hiếm trong sách đỏ Việt Nam bởi điều kiện tự nhiên vô cùng phong phú, đa dạng.</h3>
              <h5> TAM CỐC – BÁI ĐÍNH – TRÀNG AN</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/6-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>Nằm tại điểm đầu của bản đồ danh lam thắng cảnh Việt Nam, ẩn sâu bên trong là các giá trị văn hóa truyền thống lâu đời của các dân tộc thiểu số.</h3>
              <h5>CAO NGUYÊN ĐÁ ĐỒNG VĂN</h5>
            </figcaption><a href="#"></a>       
      </figure>    
      </div>

      <div>
        <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/7-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>Mang đậm vẻ đẹp tâm linh, được xây dựng ở thời vua Lý Nhân Tông để thờ Phật bà Quan Âm, xung quanh chùa là dáng vẻ yên bình, xanh tươi của những tán lá xanh khiến nơi đây càng trở thành địa điểm du lịch lý tưởng, nhất là đối với những tín đồ Phật Giáo.</h3>
              <h5>CHÙA MỘT CỘT</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/8-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>Cố đô Huế trước đây là những cung điện vàng son của triều đại nhà Nguyễn, triệu đại cuối cùng của Việt Nam. Vẻ đẹp uy nghiêm gắn liền với văn hóa lịch sử lâu đời là niềm tự hào của cả dân tộc ta.</h3>
              <h5>CỐ ĐÔ HUẾ</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/9-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>Nơi đây có thể xem là một danh lam thắng cảnh ở Việt Nam đậm chất mộc mạc, gần gũi. Tuy vậy, Phố cổ Hội An vẫn rất được nhiều người ưa thích, có lẽ đến với Hội An, họ mong muốn tìm lại cảm giác bình yên giúp thư thái trong tâm hồn.</h3>
              <h5>PHỐ CỔ HỘI AN</h5>
            </figcaption><a href="#"></a>
      </div>
      <div>
        <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/11-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>Là danh lam thắng cảnh đẹp ở Việt Nam tọa lạc tại thành phố Cam Ranh, Khánh Hòa. Đảo Bình Ba hay còn gọi là Đảo Tôm Hùm là một hòn đảo nhỏ, bao quanh là núi non hùng vĩ cùng biển cả mênh mông và sóng vỗ dạt dào. </h3>
              <h5>ĐẢO BÌNH BA</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/12-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>Nét đẹp của Đảo Ngọc – Phú Quốc có thể được xem như một kiệt tác của thiên nhiên, khiến ta chỉ cần nhìn thoáng qua đã phải ấn tượng. Không những thế, Đảo Ngọc – Phú Quốc còn là hòn đảo du lịch lớn nhất Việt Nam.</h3>
              <h5>ĐẢO NGỌC PHÚ QUỐC</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/15-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>Là địa điểm du lịch được yêu thích của các du khách, họ sẽ được chiêm ngưỡng với văn hóa mua bán truyền thống trên những chiếc ghe, thuyền…</h3>
              <h5>CHỢ NỔI CÁI BÈ</h5>
            </figcaption><a href="#"></a>
      </div>

  </div>
</section>


  <!-- START THE FEATURETTES -->
<section id="news" class="news">
  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">JAPAN: <span class="text-muted"><a href="https://www3.nhk.or.jp/nhkworld/vi/news/20220916_14/">Bão lớn Nanmadol tiến gần tới Okinawa, khu vực Amami.</a></span></h2>
        <p class="lead">Theo cơ quan khí tượng Nhật Bản, cơn bão số 19 (Hagibis) đang tiến gần tới Nhật Bản và có khả năng sẽ đổ bộ vào khu vực Tokai (các tỉnh Shizuoka, Aichi, Gifu và Mie) hoặc Kanto (các tỉnh Gunma, Tochigi, Ibaraki, Saitama, Tokyo, Chiba và Kanagawa) vào thứ 7 (ngày 12/10) với cường độ cực mạnh, kèm theo gió giật, mưa lốc và sóng lớn.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://www3.nhk.or.jp/nhkworld/vi/news/20220916_14/"><img width="auto" height="300px" src="https://cdn.tuoitre.vn/2022/9/17/20220914351160404l-16634069089271923004804.png"></a></nav>

      </div>
    </div>


  <hr class="featurette-divider">

  <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">VIETNAM: <span class="text-muted"><a href="https://vietnamnet.vn/nghin-nguoi-du-le-hoi-o-chinh-dien-dat-vang-lon-nhat-thanh-hoa-2061105.html">Nghìn người dự lễ hội tại chính điện bằng gỗ dát vàng lớn nhất Thanh Hoá.</a></span></h2>
        <p class="lead">Sáng ngày 17/9/2022, tại Khu di tích Quốc gia đặc biệt Lam Kinh, huyện Thọ Xuân (Thanh Hóa) đã tổ chức Lễ hội Lam Kinh 2022, và kỷ niệm 10 năm được công nhận là di tích quốc gia đặc biệt.
Theo Ban tổ chức, Lễ hội Lam Kinh 2022 nhằm kỷ niệm 604 năm Khởi nghĩa Lam Sơn, 594 năm Vua Lê đăng quang, 589 năm ngày mất của Anh hùng dân tộc Lê Lợi và kỷ niệm 10 năm được công nhận là di tích quốc gia đặc biệt (2012-2022).</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://vietnamnet.vn/nghin-nguoi-du-le-hoi-o-chinh-dien-dat-vang-lon-nhat-thanh-hoa-2061105.html"><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/9/17/9dang-chu-y-565.jpg"></a></nav>

      </div>
    </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">ENVIRONMENT: <span class="text-muted"><a href="https://vietnamnet.vn/5-000-con-ca-heo-chet-tai-bien-den-vi-cac-hoat-dong-quan-su-2052370.html">Cá heo thiệt mạng vô số vì hoạt động quân sự ở Biển Đen.</a></span></h2>
      <p class="lead">Các hoạt động quân sự tại Biển Đen của Nga và Ukraine đang gây ảnh hưởng lớn tới các sinh vật biển, khi đã có 5.000 con cá heo chết tại khu vực này.</p>
  </div>
  <div class="col-md-5">
  <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://vietnamnet.vn/5-000-con-ca-heo-chet-tai-bien-den-vi-cac-hoat-dong-quan-su-2052370.html"><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/8/23/dolphin-251.jpg"></a></nav>

  </div>
  </div>

  <hr class="featurette-divider">
</section>

  <!-- /END THE FEATURETTES -->

</div>




<!-------fotter------->
<footer>
  <div id="footer">
    <div class="container">
      <div class="row">
       <div class="col-md-4">
            <h3 class="section-title">Giới thiệu</h3>
            <p>CultureTravel là một Website về thông tin vắn hoá của nhiều nước trên thế giới được vận hành và phát triển từ năm 2022. Các bài viết được tổng hợp đa phần từ nội dung tham khảo trên Google.</p>

            <h3 class="section-title">Cơ Hội hợp tác với CultureTravel</h3>
            <p>Cùng với mục tiêu phát triển của CultureTravel là muốn đưa thông tin nhiều hơn về văn hoá đến với độc giả. Song song đó là lượng nội dung bổ ích và chính xác về văn hoá phải được cập nhật thường xuyên.</p>

            <p>Hiện tại,CultureTravel muốn hợp tác với các bên phát triển dịch vụ du lịch và cá nhân đam mê du lịch.</p>
          </div>
      

        <div class="col-md-4">
          <h3 class="section-title">Liên lạc</h3>
          <ul class="contact-info">
            <li><i class="fa-regular fa-map"></i>Chiyoda-ku, Tokyo, Japan</li>
            <li><i class="fa-solid fa-phone-flip"></i>+ 1235 2355 98</li>
            <li><i class="fa-regular fa-envelope"></i><a href="#">internship@nal.vn</a></li>
            <li><i class="fa-solid fa-globe"></i><a href="#">https://nal.co.jp/</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="section-title">Phản hồi</h3>
          <form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">Họ và Tên</label>
              <input type="name" class="form-control" id="name" placeholder="Họ và Tên">
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
              <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
            </div>
          </form>
        </div>
      </div>
      <div class="row copy-right justify-content-md-center">
        <div class="col-md-6 col-md-offset-3 text-center">
          <p>CONNECT WITH US</p>
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
<script src="/assets/dist/js/loader.js"></script>
  <script src="/assets/dist/js/cover.js" ></script>
  </body>
</html>
