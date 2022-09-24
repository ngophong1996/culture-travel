<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/img/CultureTravel.png" />
  <title>Blogger</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/css/about.css">
  <link rel="stylesheet" href="/assets/css/news.css">
  <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="/css/cover.css"> -->
    
  <link rel="stylesheet" href="/assets/css/grid.css" />
  <link rel="stylesheet" href="/assets/css/base.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/responsive.css" />

</head>

<body>
  <header class="header">
    
    <nav class="header__nav">
      <div class="header__nav__container">
        <div class="grid wide">
          <div class="row">
            <div class="l-3 m-6 c-8">
              <a href="#">
                <div class="header__nav__container--logo">
                  <img src="/img/CultureTravel.png" style="height: 28px ; width: 28px;" alt="" />  Blogger

                </div>
              </a>
            </div>
            <div class="l-6 hide-on-tablet_mobile">
              <ul class="header__nav__container--list">
                
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a class="active">Bài viết</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle user-profile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @if(Auth::user()->image)
                          <img class="image rounded-circle" src="{{'/img/'.Auth::user()->image}}" alt="profile_image">
                      @endif
                      {{ Auth::user()->name }}
                  </a>
                  <style>
                      .dropdown-menu li a {
                          color: #000 !important;
                      }
                  </style>
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
            <div class="l-3 m-6 c-4">
              <i class="fas fa-bars list-tablet-mobile" id="menu_open"></i>
              <div class="header__nav__container--search">
                <i class="fas fa-search" id="search"></i>
                <br />
                <input type="text" placeholder="Search ..." />
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="header__menu">
      <div class="header__menu__overlay"></div>
      <div class="header__menu__body--content">
        <ul>
          <li><a href="{{ route('home') }}">Trang chủ</a></li>
          <li><a class="active" >Bài viết</a></li>
          <li><a href="{{ route('blog.create') }}">New Post</a></li>
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
        <i class="fas fa-times" id="menu_close"></i>
      </div>
    </div>
    <div class="scroll-top">
      <i class="fas fa-arrow-up"></i>
    </div>
  </header>
  <div class="home">
    <div class="home__background"></div>
    <div class="grid wide">
      <div class="row">
        <div class="home__container__slider">
          <div class="home__container__slider--content">
            <h1>Blog</h1>
            <h1>Culture Travel</h1>
          </div>
          <div class="home__container__slider--btn">
            <div class="btn__bgc"></div>
            <a href="{{ route('blog.create') }}">+ Bài viết mới
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="search">
    <div class="grid wide">
      
    </div>
  </div>
  <div class="blog">
    <div class="grid wide custom">
      <div class="blog__container">
        <div class="grid wide custom">
        
          @foreach ($posts as $post )
          <div class="row margin-top">
            <div class="l-8 m-8 c-12">
                <div class="blog__container__post">
                  <div class="blog__container__post--time">
                    <span>{{ $post->created_at->day }}</span>
                    <span>{{ $post->created_at->month }}/{{$post->created_at->year}}</span>
                  </div>
                    <img src="{{asset('/storage/images/'.$post->image)}}" alt="">
                    <ul class="mt-40">
                        <li>Người đăng {{ $post->user }} |</li>
                        <li>{{ $post->area }}</li>
                    </ul>
                    <a href="#" class="blog__container__post--title">{{ $post->title }}</a>
                    <p>{{ $post->content }}</p>

                </div>
            </div>
          </div>
          @endforeach



                    
                     
                     
                  </div>
  
              </div>
          </div>
      </div>
      <footer class="footer">
        <div class="footer__container">
          <div class="grid wide">
            <div class="row">
              <div class="col l-3 m-6 c-6 s-12">
                <div class="footer__container__about">
                  <div class="container__about--logo">
                    <a href="#">
                      <img src="/assets/images/logo.webp" alt="" />About Us
                    </a>
                  </div>
                  <div class="container__about--text">
                    <p>
                      All around us, both in places far away and in places near us, there are always beautiful things that in the midst of the busyness of life that we rarely notice.
Come to us, you will see it. We wil make you curious and amazed about the wonderfull cultures in the world.
                    </p>
                  </div>
                  <div class="container__about--social">
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-github"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-6 c-6 s-12">
                <div class="footer__container__blog">
                  <h2>Blog Posts</h2>
                  <div class="footer__container__blog--content">
                    <div class="container__blog__item">
                      <div class="container__blog__item--img">
                        <img src="/assets/images/xfooter_blog_1.jpg.pagespeed.ic.n5JT1wzbm-.webp" alt="" />
                        <div class="container__blog__item--text">
                          <a href="#">Travel with us this year</a><br />
                          <span>July 20, 2021</span>
                        </div>
                      </div>
                    </div>
                    <div class="container__blog__item">
                      <div class="container__blog__item--img">
                        <img src="/assets/images/xfooter_blog_2.jpg.pagespeed.ic.u_Bp7zMu38.webp" alt="" />
                        <div class="container__blog__item--text">
                          <a href="#">New destinations for you</a><br />
                          <span>July 20, 2021</span>
                        </div>
                      </div>
                    </div>
                    <div class="container__blog__item">
                      <div class="container__blog__item--img">
                        <img src="/assets/images/xfooter_blog_3.jpg.pagespeed.ic.XDkX_CloU3.webp" alt="" />
                        <div class="container__blog__item--text">
                          <a href="#">Travel with us this year</a><br />
                          <span>July 20, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-6 c-6 s-12">
                <div class="footer__container__tags">
                  <h2>Drop us a line</h2>
                  <form action="contact-form">
                    <div class="footer__container__tags__content">
                      <div class="form-group">
                       <label for="name" class="sr-only">Name</label>
                          <input type="name" class="form-control" id="name" placeholder="Name">
                      </div>
                     <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-6 c-6 s-12">
                <div class="footer__container__contact">
                  <h2>Contact Info</h2>
                  <div class="footer__container__contact__content">
                    <div class="container__contact__info">
                      <div class="container__contact__info--img">
                        <img src="/assets/images/fi1.svg" alt="" />
                      </div>
                      <span>Chiyoda-ku, Tokyo, Japan</span>
                    </div>
                    <div class="container__contact__info">
                      <div class="container__contact__info--img">
                        <img src="/assets/images/phone-svgrepo-com.svg" alt="" />
                      </div>
                      <span>+ 1235 2355 98</span>
                    </div>
                    <div class="container__contact__info">
                      <div class="container__contact__info--img">
                        <img src="/assets/images/mail-svgrepo-com.svg" alt="" />
                      </div>
                      <span>internship@nal.vn</span>
                    </div>
                    <div class="container__contact__info">
                      <div class="container__contact__info--img">
                        <img src="/assets/images/planet-earth.svg" alt="" />
                      </div>
                      <span>https://nal.co.jp/</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <span class="copyright">
              Copyright © 2022 
              <a href="#">NAL</a></span>
          </div>
          <ul></ul>
        </div>
      </footer>

  
  <script src="/assets/js/main.js" type="text/javascript"></script>
</body>

</html>