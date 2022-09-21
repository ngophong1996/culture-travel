<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>HOME</title>

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
    
    
    
  </head>
<body>
            
  <nav class="navbar navbar-expand-md navbar-light sticky-top">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="/img/CultureTravel.png" style="width:100px;height:auto;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="me-3 justify-content-end collapse navbar-collapse" id="navbarResponsive">
          <div class="yellowInRight">
          <ul class="navbar-nav ml=auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Đất Nước</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bản đồ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nổi tiếng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sự kiện</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Về Chúng Tôi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          </div>


          @if (Route::has('login'))
            @auth
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
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng nhập</a>
            @endauth
          @endif
          
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
      <h1 style="margin-bottom: 1rem ;">Đến với chúng tôi, bạn sẽ tìm thấy những nét đẹp về văn hóa về các nước trên thế giới như Việt Nam, Nhật Bản,... </h1>
    </div>
  </section>
<!--------content------>


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
  <div class="col-lg-4">
      <nav  class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: Japan" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Japan</title><img  width="auto" height="140" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1280px-Flag_of_Japan.svg.png"></img></nav>

      <h2 class="fw-normal">Nhật Bản</h2>
      
      <p><a class="btn btn-secondary" href="{{ url('/nhatban') }}">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: VietNam" preserveAspectRatio="xMidYMid slice" focusable="false"><title>VietNam</title><img width="auto" height="140"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/188px-Flag_of_Vietnam.svg.png"></img></nav>

      <h2 class="fw-normal">Việt Nam</h2>
      
      <p><a class="btn btn-secondary" href="{{ url('/vietnam') }}">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  
  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: Other Country" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Other Country</title><img width="auto" height="140"  src="https://i.pinimg.com/564x/ac/e8/17/ace817891a14afe65bbbb7105866e1f1.jpg"></img></nav>

      <h2 class="fw-normal">Các nước khác</h2>
      
      <p><a class="btn btn-secondary" href="#">Xem nội dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">HOT NEWS: <span class="text-muted"><a href="https://www3.nhk.or.jp/nhkworld/vi/news/20220916_14/">Bão lớn Nanmadol tiến gần tới Okinawa, khu vực Amami.</a></span></h2>
        <p class="lead">Theo cơ quan khí tượng Nhật Bản, cơn bão số 19 (Hagibis) đang tiến gần tới Nhật Bản và có khả năng sẽ đổ bộ vào khu vực Tokai (các tỉnh Shizuoka, Aichi, Gifu và Mie) hoặc Kanto (các tỉnh Gunma, Tochigi, Ibaraki, Saitama, Tokyo, Chiba và Kanagawa) vào thứ 7 (ngày 12/10) với cường độ cực mạnh, kèm theo gió giật, mưa lốc và sóng lớn.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://cdn.tuoitre.vn/2022/9/17/20220914351160404l-16634069089271923004804.png"></nav>

      </div>
    </div>


  <hr class="featurette-divider">

  <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">VIETNAM: <span class="text-muted"><a href="https://vietnamnet.vn/nghin-nguoi-du-le-hoi-o-chinh-dien-dat-vang-lon-nhat-thanh-hoa-2061105.html">Nghìn người dự lễ hội tại chính điện bằng gỗ dát vàng lớn nhất Thanh Hoá.</a></span></h2>
        <p class="lead">Sáng ngày 17/9/2022, tại Khu di tích Quốc gia đặc biệt Lam Kinh, huyện Thọ Xuân (Thanh Hóa) đã tổ chức Lễ hội Lam Kinh 2022, và kỷ niệm 10 năm được công nhận là di tích quốc gia đặc biệt.
Theo Ban tổ chức, Lễ hội Lam Kinh 2022 nhằm kỷ niệm 604 năm Khởi nghĩa Lam Sơn, 594 năm Vua Lê đăng quang, 589 năm ngày mất của Anh hùng dân tộc Lê Lợi và kỷ niệm 10 năm được công nhận là di tích quốc gia đặc biệt (2012-2022).</p>
      </div>
      <div class="col-md-5 order-md-1">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/9/17/9dang-chu-y-565.jpg"></nav>

      </div>
    </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">ENVIRONMENT: <span class="text-muted"><a href="https://vietnamnet.vn/5-000-con-ca-heo-chet-tai-bien-den-vi-cac-hoat-dong-quan-su-2052370.html">Cá heo thiệt mạng vô số vì hoạt động quân sự ở Biển Đen.</a></span></h2>
      <p class="lead">Các hoạt động quân sự tại Biển Đen của Nga và Ukraine đang gây ảnh hưởng lớn tới các sinh vật biển, khi đã có 5.000 con cá heo chết tại khu vực này.</p>
  </div>
  <div class="col-md-5">
  <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/8/23/dolphin-251.jpg"></nav>

  </div>
  </div>

  <hr class="featurette-divider">

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
  </body>
</html>
