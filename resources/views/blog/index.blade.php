<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="//assets/img/CultureTravel.png" />
  <title>Blogger</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/css/about.css">
  <link rel="stylesheet" href="/assets/css/news.css">
    
  <link rel="stylesheet" href="/assets/css/grid.css" />
  <link rel="stylesheet" href="/assets/css/base.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/responsive.css" />
</head>

<body>
  <header class="header">
    <div class="header__topbar">
      <div class="grid wide">
        <div class="header__topbar__container">
          <div class="row">
            <div class="l-6 m-8 c-8">
              <div class="header__topbar__container--contacts">
                <span></span>
                <a href="https://m.facebook.com/login/?locale=vi_VN"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/login"><i class="fab fa-github"></i></a>
              </div>
            </div>
            <div class="l-6 m-4 c-4">
              <ul class="header__topbar__container--register">
                <a href="https://accounts.google.com/v3/signin/identifier?dsh=S671362705%3A1663212398206493&continue=https%3A%2F%2Fwww.google.com%2F%3Fhl%3Dvi&ec=GAZAmgQ&hl=vi&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWrSe_X_ZS37G9KFIQhN8HQAnFawnZYzRs9pwIe113Aq8J4aQrMBFV5vq65iWs4ohpQK47Tj">
                  <li>Login</li>
                </a>
                <a href="#">
                  <li>|</li>
                </a>
                <a href="https://accounts.google.com/signup/v2/webcreateaccount?continue=https%3A%2F%2Faccounts.google.com%2FManageAccount%3Fnc%3D1&parent_directed=true&flowName=GlifWebSignIn&flowEntry=SignUp">
                  <li>Register</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                <li><img src="/assets/img/rewind-svgrepo-com.svg" style="width: 25px;" alt=""><a class="active" href="#"></a></li>
                <li><img src="/assets/img/new-svgrepo-com.svg"style="width: 25px;"  alt=""><a href="#"></a></li>
                <li><img src="/assets/img/origin-svgrepo-com.svg"style="width: 25px;"  alt=""> <a href="#"></a></li>
                <li><img src="/assets/img/notification-svgrepo-com.svg" style="width:25px ;" alt=""><a href="#"></a></li>
                <li><img src="/assets/img/menu-svgrepo-com (1).svg" style="width: 25px;"  alt=""><a href="#"></a></li>
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
          <li><a href="#">Home</a></li>
          <li><a class="active" href="#">Friends</a></li>
          <li><a href="#">Groups</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Check In</a></li>
          <li><a href="#"></a></li>
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
            <h1>Discover</h1>
            <h1>the world</h1>
          </div>
          <div class="home__container__slider--btn">
            <div class="btn__bgc"></div>
            <a href="/01_blog/pages/news.html">+ New Post
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
      <div class="search__container__tabs grid wide">
        <div class="row">
          <div class="search__container__tab d-flex active">
            <img src="/assets/img/home-svgrepo-com.svg" style="width: 25px;" alt="" />
            <span><i class="fa-solid fa-house"></i>home</span>
          </div>
          <div class="search__container__tab d-flex">
            <img src="/assets/img/add-friend-svgrepo-com.svg" style="width: 25px;" alt="" />
            <span>friends</span>
          </div>
          <div class="search__container__tab d-flex">
            <img src="/assets/img/group-of-users-svgrepo-com.svg" style="width: 25px;" alt="" />
            <span>Groups</span>
          </div>
          <div class="search__container__tab d-flex">
            <img src="/assets/img/pages-svgrepo-com.svg"style="width: 25px;"  alt="" />
            <span>Pages</span>
          </div>
          <div class="search__container__tab d-flex">
            <img src="/assets/img/storys.svg"style="width: 25px;"  alt="" />
            <span>memories</span>
          </div>
          <div class="search__container__tab d-flex">
            <img src="/assets/img/activities.svg"style="width: 25px;"  alt="" />
            <span>Activities</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blog">
    <div class="grid wide custom">
      <div class="blog__container">
        <div class="grid wide custom">
          <div class="row">
            <div class="l-8 m-8 c-12">
              <div class="blog__container__post">
                <div class="blog__container__post--time">
                  <span>01</span>
                  <span>July, 2017</span>
                </div>
                <img src="/assets/img/353350.jpg" alt="">
              </div>
                          </div>
                          <div class="l-4 m-4 c-12">
                              <div class="blog__container__sidebar">
                                  <input type="text">
                                  <i class="fas fa-search"></i>
                                  <div class="container__sidebar--year">
                                      <span>Archives</span>
                                      <ul>
                                          <li>March 2017</li>
                                          <li>April 2017</li>
                                          <li>May 2017</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row margin-top">
                          <div class="l-8 m-8 c-12">
                              <div class="blog__container__post">
                                  <ul>
                                      <li><a href="#">by Lore Papp |</a></li>
                                      <li><a href="#">Uncategorized |</a></li>
                                      <li><a href="#">3 Comments</a></li>
                                  </ul>
                                  <a href="#" class="blog__container__post--title">Try these new dream destinations</a>
                                  <p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus
                                      nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
                                  <a href="#" class="blog__container__post--btn">Read More</a>
                              </div>
                          </div>
                          <div class="l-4 m-4 c-12 top">
                              <div class="blog__container__sidebar">
                                  <div class="container__sidebar--list">
                                      <span>Categories</span>
                                      <ul>
                                          <li><a href="#">Travel</a></li>
                                          <li><a href="#">Exotic Destinations</a></li>
                                          <li><a href="#">City Breaks</a></li>
                                          <li><a href="#">Travel Tips</a></li>
                                          <li><a href="#">Lifestyle &amp; Travel</a></li>
                                          <li><a href="#">City Breaks</a></li>
                                          <li><a href="#">Uncategorized</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row margin-top">
                          <div class="l-8 m-8 c-12">
                              <div class="blog__container__post">
                                  <ul>
                                      <li><a href="#">by Lore Papp |</a></li>
                                      <li><a href="#">Uncategorized |</a></li>
                                      <li><a href="#">3 Comments</a></li>
                                  </ul>
                                     <img src="/assets/img/blog_background.jpg" alt="">

                                  <a href="#" class="blog__container__post--title">Try these new dream destinations</a>
                                  <p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus
                                      nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
                                  <a href="#" class="blog__container__post--btn">Read More</a>
                              </div>
                          </div>
                          <div class="l-4 m-4 c-12 top">
                              <div class="blog__container__sidebar">
                                  <div class="container__sidebar--list">
                                      <span>Instagram</span>
                                      <div class="container__sidebar--list-img">
                                          <img src="/assets/img/xoffer_4.jpg.pagespeed.ic.sP-uVX8-UR.webp" alt="">
                                          <img src="/assets/img/xoffer_1.jpg.pagespeed.ic.LnLHOsFCJq.webp" alt="">
                                          <img src="/assets/img/gallery_3.jpg" alt="">
                                          <img src="/assets/img/gallery_4.jpg" alt="">
                                          <img src="/assets/img/gallery_5.jpg" alt="">
                                          <img src="/assets/img/gallery_6.jpg" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row margin-top">
                          <div class="l-8 m-8 c-12">
                              <div class="blog__container__post">
                                  <div class="blog__container__post--time">
                                      <span>01</span>
                                      <span>July, 2017</span>
                                  </div>
                                  <img src="/assets/img/blog_1.jpg" alt="">
                              </div>
                          </div>
                          <div class="l-4 m-4 c-12 top">
                              <div class="blog__container__sidebar">
                                  <div class="container__sidebar--list">
                                      <span>Categories</span>
                                      <ul>
                                          <li><a href="#">Travel</a></li>
                                          <li><a href="#">Exotic Destinations</a></li>
                                          <li><a href="#">City Breaks</a></li>
                                          <li><a href="#">Travel Tips</a></li>
                                          <li><a href="#">Lifestyle &amp; Travel</a></li>
                                          <li><a href="#">City Breaks</a></li>
                                          <li><a href="#">Uncategorized</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row margin-top">
                          <div class="l-8 m-8 c-12">
                              <div class="blog__container__post">
                                  <ul>
                                      <li><a href="#">by Lore Papp |</a></li>
                                      <li><a href="#">Uncategorized |</a></li>
                                      <li><a href="#">3 Comments</a></li>
                                  </ul>
                                  <a href="#" class="blog__container__post--title">Try these new dream destinations</a>
                                  <p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus
                                      nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
                                  <a href="#" class="blog__container__post--btn">Read More</a>
                              </div>
                          </div>
                          <div class="l-4 m-4 c-12">
  
                          </div>
                      </div>
                  </div>
  
              </div>
          </div>
      </div>
  

  
  <script src="/assets/js/main.js" type="text/javascript"></script>
</body>

</html>