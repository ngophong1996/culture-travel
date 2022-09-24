<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tokyo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style1.css" />
    <link rel="stylesheet" href="/css/tokyo.css">
    <link href="/css/loader.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/img/CultureTravel.png"/> 
    <!-----fonts----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
    <!-----bootstrap-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="preloader"></div>
    <header>
      <a href="#" class="logo"><img src="/img/CultureTravel.png" style="width:80px;height:auto;">Tokyo</a>
      <div class="menuToggle"></div>
    </header>
    <ul class="navigation">
      <li><a href="{{ route('home') }}" onclick="toggleMenu()">Trang chủ</a></li>
      <li><a href="{{ route('nhatban.index') }}" onclick="toggleMenu()">Nhật Bản</a></li>
      <li><a href="{{ route('about') }}" onclick="toggleMenu()">Về chúng tôi</a></li>
      <li><a href="{{ route('blog.index') }}" onclick="toggleMenu()">Blog</a></li>
      
    </ul>

    <!-- Banner -->
  <section class="banner" id="home">
      <a href="#about"><img  src="https://wallpaperaccess.com/full/19085.jpg" class="cover" /></a>
      <div class="contentBx">
        <h2>Tokyo</h2>
        <h4>Thủ đô của Nhật Bản</h4>
        <a href="#about" class="btn" style="color: #fff;">Hiểu rõ hơn về Tokyo</a>
      </div>
  </section>

    <!-- About Hokkaido -->
  <section class="about" id="about">
    <div class="title">
      <h2>Tokyo</h2>
    </div>
    <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <p class="lead">
                    Tokyo là thủ đô trên thực tế và là một trong 47 tỉnh của Nhật Bản, nằm ở phía đông của đảo chính Honshū, vùng Kanto. 
                    Đây là nơi đặt Hoàng cung và các cơ quan đầu não của Chính phủ Nhật Bản. 
                    Không chỉ là một đô thị riêng lẻ, Tokyo ngày nay còn là trung tâm của Vùng thủ đô Tōkyō. 
                    Trung tâm hành chính của Tokyo đặt ở khu Shinjuku, khu đô thị lớn nhất là Setagaya. 
                    Vùng đô thị Tokyo là vùng đô thị đông dân nhất thế giới với dân số từ 35-39 triệu người (tùy theo cách định nghĩa) và là vùng đô thị có GDP cao nhất thế giới với GDP 1.479 tỷ đô la Mỹ theo sức mua tương đương vào năm 2008.
                </p>
            </div>
        <div class="col-md-5">
            <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://wallpaperaccess.com/full/19078.jpg"></nav>
        </div>
        </div>
  </section>

    <!-- Tourist -->
  <section id="geography">
    <div class="Tourist">
      <div class="container">
        <div class="title-top">
          <div
            class="title-house wow fadeIn wHighlight"
            style="text-align: center"
            data-wow-delay=".25s"
          >
            <h2>Tổng quan chung về Tokyo</h2>
          </div>
        </div>

        <div class="tab-top">
          <div class="row">
            <div class="col-md-12">
              <div class="top-cate">
                <div class="row">
                  <div
                    class="col-md-12 wow fadeInLeft wHighlight"
                    data-wow-delay=".25s"
                  >
                    <div class="cate-top-left">
                      <div class="title">
                        <div style="padding: 10px;">
                          <h4 >Tokyo mang tính chất khí hậu cận nhiệt đới ẩm</h4>
                          <div>
                            Khí hậu ôn đới gió mùa với 4 mùa rõ rệt: xuân, hạ, thu, đông. 
                            Mùa hè nóng ẩm và mùa đông khá rét với những đợt rét mạnh từ áp cao Siberia. 
                            Khu vực này, giống như phần lớn Nhật Bản, trải qua độ trễ theo mùa trong một tháng, với tháng ấm nhất là tháng 8 và tháng mát nhất là tháng 1. 
                            Lượng mưa hàng năm trung bình gần 1.530 mm (60,2 in), với mùa hè ẩm ướt hơn và mùa đông khô hơn. 
                            Lượng tuyết tuy rơi lẻ tẻ nhưng vẫn thường xuyên diễn ra hàng năm. 
                          </div>
                          <br>
                          <div><b>Tokyo được xem là "một ví dụ thuyết phục cho mối quan hệ giữa sự tăng trưởng đô thị và khí hậu"</b></div>
                          <div>
                            Tokyo là một ví dụ điển hình cho loại khí hậu cận nhiệt, đô thị đảo, dân số đông góp một phần quan trọng đến khí hậu thành phố.
                            Tokyo cũng thường có bão hàng năm, nhưng phần lớn là bão yếu. 
                            Khí hậu ngoài khơi của Tokyo thay đổi đáng kể so với thành phố. 
                            Khí hậu của Chichi-jima ở làng Ogasawara nằm trên ranh giới giữa khí hậu nhiệt đới savanna và khí hậu cận nhiệt đới ẩm. 
                            Nó nằm cách khu vực đại đô thị Tokyo khoảng 1.000 km về phía nam dẫn đến các điều kiện khí hậu khác nhau.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 bot-cate">
                <div class="content-tab-right">
                  <div
                    id="tab-1"
                    class="tab-content current wow fadeIn wHighlight"
                    data-wow-delay=".45s"
                  >
                    <div class="title-tab-right"><h2>Thông tin chi tiết</h2>
                    <div class="desc-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="desc-tab-left">
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Địa chỉ</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>Tokyo</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Diện tích</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>2.194 km²</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Dân số</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>7654 triệu người</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Quận</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <div>

                                        Chuo(中央区)・Minato(港区)・Shinjuku(新宿区)・Bunkyo(文京区)・Taito(台東区)・Sumida(墨田区)・Koto(江東区)

                                        ・Shinagawa(品川区)・Meguro(目黒区)・Ota(大田区)・Setagaya(世田谷区)・Shibuya(渋谷区)・Nakano(中野区)・Suginami(杉並区)

                                        ・Toshima(豊島区)・Kita(北区)・Arakawa(荒川区)・Itabashi(板橋区)・Nerima(練馬区)・Adachi(足立区)・Katsushika(葛飾区)・Edogawa(江戸川区)
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="maps">
                            <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662981.1743794712!2d138.6459005164375!3d35.504028332387406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2z5p2x5Lqs6YO9!5e0!3m2!1sja!2sjp!4v1663827289892!5m2!1sja!2sjp"
                              width="600"
                              height="450"
                              style="border: 0"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Travel -->
  <section class="post" id="post">
    <div class="title">
      <h2>DU LỊCH</h2>
      <p>
         Thủ đô Tokyo không chỉ là linh hồn của đất nước mặt trời mọc mà còn được đánh giá là một trong những thành phố lớn nhất, 
         hiện đại phát triển bậc nhất và đông đúc bậc nhất trên thế giới. Với nhịp sống hối hả của người dân, đến với thủ đô tuyệt vời này, 
         các bạn sẽ cảm nhận được sự sôi động trong mỗi khoảnh khắc, mỗi một con đường, 
         hết sức thích hợp cho những vị khách từ phương xa đam mê du lịch khám phá một vùng đất mới năng động và hiện đại.
      </p>
    </div>
    <div class="contentBx">
      <div class="postColumn">
        <div class="postBox">
          <div class="imgBx">
            <img src="https://dulichnhatban.net/static/uploads/tinymce/2016/08/01/15/160172d251947de6d200142d93b1ccdf.jpg" class="cover" />
          </div>
          <div class="textBx">
            <h3>
                Cung điện Himeji là một trong những di sản văn hóa thế giới của mảnh đất này được Unesco công nhận. 
                Nơi đây được được xem là một trong những công trình kiến trúc tinh xảo nhất mảnh đất này thu hút mọi du khách đi du lịch Tokyo Nhật Bản. 
                Himeji còn được gọi là “Lâu đài hạc trắng” do được thiết kế theo hình con hạc, 
                cũng là một địa danh du lịch ở nơi này vô cùng nổi tiếng.
            </h3>
          </div>
        </div>
        </div>
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="https://wallpaperaccess.com/full/19076.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                Tháp Tokyo một nơi lý tưởng để bạn chiêm ngưỡng toàn bộ thành phố hiện đại bậc nhất thế giới này. 
                Tòa tháp Tokyo có hình dáng giống tháp Eiffel ở Paris, tháp Tokyo thu hút khách du lịch Nhật Bản bởi từ trên cao, 
                du khách có thể có cái nhìn trọn vẹn về thành phố Tokyo, vào những ngày đẹp trời, du khách còn có thể nhìn thấy được núi Phú Sĩ.
                 Đó sẽ là một trải nghiệm tuyệt vời khi bạn đi du lịch các điểm nổi tiếng ở Tokyo.
              </h3>
            </div>
          </div>
        </div>
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="https://media.gody.vn/images/tokyo/cong-vien-giai-tri-tokyo-disneyland/12-2016/20161207092003-tokyo-disneyland-gody-(8).jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                Tokyo Disneyland là một công viên giải trí rộng 465.000 m² tọa lạc tại Tokyo Disney Resort. 
                Cổng chính nằm kề ga Maihama và ga Tokyo Disneyland. 
                Đây là công viên Disneyland đầu tiên được xây dựng bên ngoài Hoa Kỳ.
              </h3>
            </div>
          </div>
        </div>
        
    </section>

    <!-----------AMTHUC-------------->

    <section class="section">
           <div class="title food">
          <h2>ẨM THỰC</h2>
          <p style="text-align:center;margin: 0 auto;">
            Nhắc đến Tokyo, ngoài hình ảnh đô thị hiện đại sầm uất hay ngọn núi Phú Sĩ nổi tiếng hay những bông hoa anh đào tuyệt đẹp, 
            người ra còn ấn tượng với nền văn hóa ẩm thực vô cùng phong phú tại đây. 
            Không chỉ ở những nhà hàng cao cấp xếp hạng Michelin mới có những món ăn hấp dẫn mà ngay cả những món ăn đường phố cũng rất đáng để khám phá và thưởng thức. 
            Món ăn đường phố Tokyo thường khá rẻ, được làm ngay trước mắt bạn và nó có vị rất ngon. 
            Do vậy, trong khi khám phá những địa điểm, khu vực tham quan tại Tokyo đừng quên ghé thăm các quán ăn ven đường để nếm thử vài món ăn đường phố nhé. 
            Chắc chắn sẽ mang đến trải nghiệm ấn tượng và thú vị cho bạn đấy.
          </p>
        </div>
        <div>
          <div class="section full-height over-hide px-4 px-sm-0">
            <div class="container">
              <div class="row full-height justify-content-center">
                <div class="col-lg-10 col-xl-8 align-self-center padding-tb">
                  <div class="section mx-auto text-center slider-height-padding">
                          <input class="checkbox frst" type="radio" id="slide-1" name="slider" checked/>
                          <label for="slide-1"></label>
                          <input class="checkbox scnd" type="radio" name="slider" id="slider-2"/>
                          <label for="slider-2"></label>
                          <input class="checkbox thrd" type="radio" name="slider" id="slider-3"/>
                          <label for="slider-3"></label>
                          <input class="checkbox foth" type="radio" name="slider" id="slider-4"/>
                          <label for="slider-4"></label>
                    <ul class="Foodpic">
                      <li class="foodinfor">
                        <span style="color:burlywood;">Okonomiyaki</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Ikayaki</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Yakisoba</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Taiyaki</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
          </section>

    <!-- NỔI BẬT -->
    
  <section class="news">
    <div class="title">
     <h2>VĂN HÓA</h2>
     </div>
  <hr class="featurette-divider">

     <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Bảo tàng Quốc gia Tokyo <span class="text-muted"> ảo tàng quốc gia lâu đời nhất ở Nhật Bản.</span></h2>
            <p class="lead">Bảo tàng Quốc gia Tokyo là một bảo tàng nghệ thuật ở Công viên Ueno thuộc phường Taitō của Tokyo, Nhật Bản. 
                Đây là một trong bốn bảo tàng điều hành bởi Viện Di sản Văn hóa Quốc gia, được coi là bảo tàng quốc gia lâu đời nhất ở Nhật Bản, 
                là bảo tàng nghệ thuật lớn nhất ở Nhật Bản, và là một trong những bảo tàng nghệ thuật lớn nhất trên toàn thế giới. 
                Bảo tàng thu thập, bảo tồn và trưng bày một bộ sưu tập toàn diện các tác phẩm nghệ thuật và đồ vật văn hóa của châu Á, 
                tập trung vào nghệ thuật Nhật Bản thời cổ đại và trung cổ và nghệ thuật châu Á dọc theo Con đường Tơ lụa. 
                Ngoài ra còn có một bộ sưu tập lớn các tác phẩm nghệ thuật Phật giáo Greco. </p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://media.gody.vn/images/tokyo/bao-tang-quoc-gia-tokyo/12-2016/20161207091110-bao-tang-quoc-gia-tokyo-gody-(7).jpg"></nav>

      </div>
    </div>


  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Budokan - <span class="text-muted">“đấu trường võ thuật Nhật Bản”</span></h2>
        <p class="lead">Nippon Budokan, thường được gọi ngắn gọn là Budokan, là một nhà thi đấu nằm ở Chiyoda, Tokyo, Nhật Bản. 
            Nhà thi đấu được xây dựng để tổ chức các nội dung thi đấu môn judo tại Thế vận hội Mùa hè 1964, 
            kỳ Thế vận hội Mùa hè đầu tiên tổ chức giải đấu môn judo. Tên của nhà thi đấu dịch sang tiếng Anh là Martial Arts Hall. 
            Mặc dù Budokan chủ yếu tổ chức các giải đấu võ thuật, nơi đây đã trở thành một trong những địa điểm biểu diễn âm nhạc mang tính biểu tượng nhất trên thế giới. Budokan là địa điểm nổi tiếng của đấu vật chuyên nghiệp Nhật Bản trong một thời gian dài. 
            Nhà thi đấu này cũng tổ chức nhiều sự kiện thể thao khác như Giải vô địch bóng chuyền nữ thế giới 1967. Gần đây nhất, nơi đây đã tổ chức các nội dung thi đấu môn karate tại Thế vận hội Mùa hè 2020 
            cũng như các nội dung thi đấu môn judo tại Thế vận hội Mùa hè 2020 và Thế vận hội Người khuyết tật Mùa hè 2020.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://www.nipponbudokan.or.jp/CDFy5t/wp-content/themes/budokan/images/img_about01-01.jpg"></nav>

      </div>
    </div>
  
  <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Vườn quốc gia Daisetsuzan - <span class="text-muted">Khám phá công viên quốc gia lớn nhất Hokkaido  </span></h2>
        <p class="lead"> Đối với những người có ô tô và muốn hòa mình vào thiên nhiên, Vườn
              quốc gia Daisetsuzan nằm ngay phía bắc của Obihiro. Daisetsuzan
              bảo tồn một vùng núi hoang vu và là thiên đường cho những người
              thích khám phá và yêu thích hoạt động ngoài trời. Có lẽ nổi tiếng
              nhất với một loạt các suối nước nóng tự nhiên, đến từ phía Nam,
              khu vực tham quan chính sẽ là khu vực xung quanh Hồ Shikaribetsu,
              nơi bạn có thể tìm thấy khách sạn Shikaribetsu Kohan Onsen Hotel
              Fusui. Quang cảnh xung quanh hồ tương đối hoang sơ và có sẵn một
              loạt các hoạt động trên hồ, từ SUP đến chèo thuyền kayak và ca nô. </p>
    </div>
    <div class="col-md-5">
    <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Nippon_Budokan_2010.jpg/375px-Nippon_Budokan_2010.jpg"></nav>

    </div>
    </div>

  <hr class="featurette-divider">
</section>
<!------------footer------>
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
                  <label for="name" class="sr-only">Họ và tên</label>
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
    

    <script>
      const menuToggle = document.querySelector(".menuToggle");
      const navigation = document.querySelector(".navigation");

      menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        navigation.classList.toggle("active");
      };

      window.addEventListener("scroll", function () {
        const header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
      function toggleMenu() {
        menuToggle.classList.remove("active");
        navigation.classList.remove("active");
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!------Ajax------>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
    <script src="/assets/dist/js/loader.js"></script>
  </body>
</html>
