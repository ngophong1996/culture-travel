<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>HOME</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="bootstrap-5.2.1/css/bootstrap-grid.min.css" rel="stylesheet"> 
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	
    <!-- change here -->
    <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/pic.css" rel="stylesheet">
     <link href="/css/loader.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="CultureTravel.png"/> 
    
    
  </head>
<!------------LOADING------------>
<body >
  <div id="preloader"></div>
 

<!------------NAVBAR------------>
       
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
				<a class="nav-link active" aria-current="page" href="#">T???ng quan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#news">Tin t???c</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('about') }}">V??? ch??ng t??i</a>
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
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">C??i d???t t??i kho???n</a></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="route('logout')"
                            onclick="event.preventDefault();
                                  this.closest('form').submit();">
                            {{ __('????ng xu???t') }}
                          </a>
                          </form></li>
                        </ul>
                          </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">????ng nh???p</a>
                    @endauth
                </div>
            @endif
		
		</ul>
	  </div>
	<div>
  
	</div>
	</div>
  </nav>

          <h1 style="color: gray; text-align: center;">Sorry! We have not update yet.</h1>
          <h5 style="color: gray; text-align: center;"><a href="{{ route('home') }}">Return</a></h5>
          

  <!-------fotter------->
<footer>
  <div id="footer">
    <div class="container">
      <div class="row">
       <div class="col-md-4">
            <h3 class="section-title">Gi???i thi???u</h3>
            <p>CultureTravel l?? m???t Website v??? th??ng tin v???n ho?? c???a nhi???u n?????c tr??n th??? gi???i ???????c v???n h??nh v?? ph??t tri???n t??? n??m 2022. C??c b??i vi???t ???????c t???ng h???p ??a ph???n t??? n???i dung tham kh???o tr??n Google.</p>

            <h3 class="section-title">C?? H???i h???p t??c v???i CultureTravel</h3>
            <p>C??ng v???i m???c ti??u ph??t tri???n c???a CultureTravel l?? mu???n ????a th??ng tin nhi???u h??n v??? v??n ho?? ?????n v???i ?????c gi???. Song song ???? l?? l?????ng n???i dung b??? ??ch v?? ch??nh x??c v??? v??n ho?? ph???i ???????c c???p nh???t th?????ng xuy??n.</p>

            <p>Hi???n t???i,CultureTravel mu???n h???p t??c v???i c??c b??n ph??t tri???n d???ch v??? du l???ch v?? c?? nh??n ??am m?? du l???ch.</p>
          </div>
      

        <div class="col-md-4">
          <h3 class="section-title">Li??n l???c</h3>
          <ul class="contact-info">
            <li><i class="fa-regular fa-map"></i>Chiyoda-ku, Tokyo, Japan</li>
            <li><i class="fa-solid fa-phone-flip"></i>+ 1235 2355 98</li>
            <li><i class="fa-regular fa-envelope"></i><a href="#">internship@nal.vn</a></li>
            <li><i class="fa-solid fa-globe"></i><a href="#">https://nal.co.jp/</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="section-title">Ph???n h???i</h3>
          <form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">H??? v?? T??n</label>
              <input type="name" class="form-control" id="name" placeholder="H??? v?? T??n">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">N???i dung tin nh???n</label>
              <textarea class="form-control" id="message" rows="7" placeholder="N???i dung tin nh???n"></textarea>
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
  
  <script src="assets/dist/js/cover.js" ></script>

  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="./assets/dist/js/loader.js"></script>
  </body>
</html>
