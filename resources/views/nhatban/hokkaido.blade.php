<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Hokkaido</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style1.css">
    <link rel="stylesheet" href="/css/loader.css">
    
    <link rel="shortcut icon" type="image/png" href="/img/CultureTravel.png"/> 
    <!-----fonts----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
    <!-----bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div id="preloader"></div>
    <header>
      <a href="{{ route('home') }}" class="logo"><img src="/img//CultureTravel.png" style="width:80px;height:auto;">Hokkaido</a>
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
      <img src="/img/background1.jpg" class="cover" />
      <div class="contentBx">
        <h2>Hokkaido</h2>
        <h4>Một thành phố tuyệt đẹp tại cực bắc Nhật Bản</h4>
        <a href="#about" class="btn">Xem thêm</a>
      </div>
  </section>

    <!-- About Hokkaido -->
  <section class="about" id="about">
    <div class="title">
      <h2>Hokkaido</h2>
    </div>
    <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        
        <p class="lead"> Hokkaido là hòn đảo chính nằm ở cực bắc Nhật Bản, cách đảo Honshu
          bởi eo biển Tsugaru, được nối liền với đảo Honshu bằng đường hầm
          Seikan. Trong đó Sapporo là thành phố lớn nhất đồng thời cũng là
          trung tâm hành chính của Hokkaido. Thành phố Sapporo là cửa ngõ vào
          Hokkaido khi đi từ Tokyo và Osaka, nổi bật với đường phố được sắp
          xếp gọn gàng như hình bàn cờ. Hokkaido được thiên nhiên ưu ái vô
          cùng với vẻ đẹp diệu kỳ của cảnh sắc núi non, cao nguyên rộng lớn,
          sông hồ, biển cả và bầu trời trong vắt. Chính vì vậy nơi đây luôn là
          điểm đến làm mê đắm biết bao du khách với cảnh sắc xinh đẹp trong
          suốt 4 mùa, cùng những món ăn tươi ngon đặc sắc. Trong đôi mắt của
          người Nhật thì Hokkaido là một nơi nhìn thấy đường chân trời rõ nét
          nhất, một cách tự nhiên và đẹp đẽ nhất mà lạnh buốt, cũng là một
          trong những nơi tìm được cảm giác trở về, và cảm giác thân thiết
          nhất với cuộc sống và cội nguồn. Một mặt nước bình lặng, bãi cát
          nông màu xanh khi nước triều lên, từng bụi hoa nhỏ xinh xắn nở rộ,
          đủ mọi màu sắc, màu hồng tươi tắn, màu tím cao sang, màu vàng thắm
          thiết mà còn có màu xanh thanh tao, không có sự sắp xếp nhân tạo,
          không có bàn tay con người đụng vào song sự liên kết thành một màu
          sắc hài hòa đẹp mắt, khiến người ta không khỏi suy nghĩ miên man.
          Mặt nước yên tĩnh, bãi cát nông màu xanh khi nước triều dâng,
          Hokkaido là nơi hiền lành chất phác nhất và cũng là nơi say đắm lòng
          người. Hình dáng Hokkaido giống như một con cua to lớn thu hết chận
          lại nằm co ro ở phương bắc xa xôi vì giá lạnh. Hokkaido là một trong
          bốn hòn đảo lớn ở Nhật Bản, ngày nay nó là biểu tượng cho sự thu nhỏ
          của thiên nhiên, đất đai rộng rãi và là vùng đồng bằng rộng lớn mênh
          mông, đồng cỏ tươi tốt, không khí trong lành và nguồn nước thì sạch
          đến lạ kỳ.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://wallpaperaccess.com/full/1489760.png"></nav>

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
            <h2>Tổng quan chung về Hokkaido</h2>
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
                        <div>
                          <h4 style="text-align: center;">Thời tiết ở Hokkaido chia ra:</h4>
                          <div><b>Tháng 1 đến tháng 3 là khí hậu mùa xuân khô hạn.</b></div>
                          <div>
                            ⇒　Nhiệt độ tối thiểu là 10 đến 15 độ C và nhiệt độ tối đa là khoảng 25 độ C. Trời không mưa nhiều.
                          </div>
                          <div><b>Tháng 4 đến tháng 6 khí hậu mùa hè khô hạn.</b></div>
                          <div>
                           ⇒　Tháng 4 đến tháng 6 là thời điểm nóng nhất. 
                           Nhiệt độ tăng từ khoảng 25 ° C đến khoảng 39 ° C vào tháng Sáu. 
                           Khi nhiệt độ tăng, nó trở nên rất nóng và ẩm ướt.
                          </div>
                          <div><b>Tháng 7-9 là mùa mưa, khí hậu mùa Thu.</b>　</div>
                          <div>
                            ⇒　Mưa nhiều từ tháng bảy đến tháng chín. 
                            Nhiệt độ sẽ trên 25 ° C và trời sẽ mưa nhiều. Những ngày rất nóng và ẩm ướt, vì vậy hãy cẩn thận để không bị ốm.
                          </div>
                          <div><b>Tháng 10 đến tháng 12 khí hậu mùa đông khô hạn.</b></div>
                          <div>
                            ⇒　Mưa ít hơn và nhiệt độ mát mẻ hơn. Vào tháng 10, nhiệt độ tối đa là khoảng 29 ° C, nhưng vào tháng 12, nhiệt độ giảm xuống khoảng 13 ° C và nhiệt độ tối thiểu giảm xuống dưới 8 ° C.
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
                    <div class="title-tab-right"><h2>Thông tin chi tiết</h2></div>
                    <div class="desc-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="desc-tab-left">
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Tên </strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>Hokkaido</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Diện tích</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>3329 km²</span>
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
                                  <span><strong>Di chuyển</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <div>
                                    Có các chuyến bay trực tiếp từ Narita, Haneda, Kansai, Chubu và Fukuoka. 5-6 giờ từ Narita hoặc Haneda, 4 giờ 30-5 giờ từ Kansai, 5 giờ 30 phút từ Chubu, 4 giờ 30 phút từ Fukuoka. Có 2 chuyến bay hàng ngày từ Narita và Haneda, 1 chuyến bay hàng ngày từ Kansai và Chubu, và 2-4 chuyến bay mỗi tuần từ Fukuoka.
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="maps">
                            <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2060335.8361374282!2d140.1930675848809!3d43.65124879088831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9f59209f6c888b%3A0x1c3cc3564fce038f!2z5YyX5rW36YGT!5e0!3m2!1sja!2sjp!4v1663466487961!5m2!1sja!2sjp"
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
      <h2>TRAVEL</h2>
      <p>
          Với nhiều cảnh quan tự nhiên, những ngọn núi, hồ và công viên,
          Hokkaido hứa hẹn các chuyến tham quan thú vị quanh năm dành cho những
          người yêu thiên nhiên. Trong những mùa ấm hơn, du khách sẽ được tận
          hưởng khung cảnh ấn tượng từ các con đường đi bộ đường dài và hồ nước,
          thời điểm này cũng chính là mùa nở rộ của hoa anh đào ở công viên. Vào
          mùa đông, hòn đảo thu hút du khách với nhiều suối nước nóng thư giãn
          và nhiều địa điểm thể thao mùa đông nổi tiếng. Đối những những du
          khách muốn khám phá cảnh quan đô thị, các thành phố của Hookkaido như
          Sapporo, Otaru và Hakodate có nhiều bảo tàng, nhà hàng và nhiều hơn
          thế.
      </p>
    </div>
    <div class="contentBx">
      <div class="postColumn">
        <div class="postBox">
          <div class="imgBx">
            <img src="/img/hokkaido-top-10-217476.jpg" class="cover" />
          </div>
          <div class="textBx">
            <h3>
                Hồ xanh, hoặc Aoiike nằm ở một thị trấn nhỏ ở Biei. Du khách có
                thể đến Hồ Xanh vào bất cứ thời điểm nào trong năm, bất kể là
                hình ảnh những cái cây ngập lớp tuyết vào mùa đông hay khung
                cảnh bầu trời mùa hè ấn tượng được phản chiếu trên mặt hồ nước
                chắc chắn sẽ để lại nhiều dấu ấn khó quên.
            </h3>
          </div>
        </div>
        </div>
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="/img/hokkaido-top-10-217512.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                Thành phố Hakodate nằm ở mũi phía nam của hòn đảo, được bao bọc
                bởi Biển Nhật Bản và biển Thái Bình Dương. Với lịch sử là một
                thành phố cảng, Hakodate nổi tiếng với trữ lượng đồ biển tươi
                mới dồi dào, là nguồn cung chất lượng cho món cơm cuộn sushi
                tinh tế. Những người sành ăn có thể tự thưởng cho bản thân mình
                bằng cách dạo bộ qua khu chợ buổi sáng của thành phố nơi họ có
                thể quan sát thành quả của một ngày lao động.
              </h3>
            </div>
          </div>
        </div>
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="/img/hokkaido3.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                Nằm ở phía đông của hòn đảo, khu vực này là một trong những vườn
                quốc gia đầu tiên của Nhật Bản. Vẻ đẹp tự nhiên phong phú khiến
                nó trở thành nơi lý tưởng để tham quan và đi bộ đường dài. Vườn
                quốc gia có ba hồ: hồ Akan, hồ Kussharo và hồ Mashu. Chuyến đi
                đến vườn quốc gia Akan sẽ không đầy đủ nếu bạn không ghé thăm hồ
                Mashu.
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
           Tự hào là vùng đất được thiên nhiên ưu đãi, Hokkaido không thiếu những nguyên liệu thực phẩm tươi sống có chất lượng cao như rau củ, 
           thịt, hải sản,... Bạn sẽ không thể đếm được hết có bao nhiêu món ăn địa phương tại đây. 
           Có thể nói, Hokkaido chính là điểm đến hấp dẫn dành cho những người sành ăn. 
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
                        <span style="color:burlywood;">Jingisukan</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Ruibe</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Khoai tây bơ</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Kaisendon</span>
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
  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Đường đua Obihiro -   <span class="text-muted">Vòng quanh thành phố Obihiro</span></h2>
        <p class="lead">Văn hóa ngựa là văn hóa lớn ở Hokkaido do phạm vi rộng lớn của các vùng đất thảo nguyên. 
          Các giống ngựa ồ ạt đã được mang đến từ châu Âu vào những năm 1900, và những con ngựa đã được thay thế cùng các thiết bị hiện đại, văn hóa ngựa vẫn còn lớn mạnh. 
          Để bắt đầu, hãy dành một buổi chiều với cuộc đua xe trượt tuyết Banei (loại hình duy nhất trên thế giới) tại Trường đua Obihiro, nơi bạn sẽ tìm thấy những con ngựa nặng hơn một tấn kéo những chiếc xe trượt tuyết bằng sắt nặng một tấn qua cát và tuyết. 
          Bảo tàng Ngựa Obihiro gần đó cho bạn trải nghiệm khám phá lịch sử địa phương và giải trí, mặc dù hầu hết các dịch vụ chỉ có tiếng Nhật. Cuối cùng, bạn sẽ muốn đặt chỗ trên quầy bar xe ngựa gọi là Basha Bar. Chuyến tham quan quán bar và ăn uống độc đáo này được mở ra bởi Musashikoma, người đã từng là một tay đua tích cực trên Đường đua Obihiro. 
          Trải nghiệm ăn uống trên Basha Bar là một cách đáng nhớ để khám phá trung tâm thành phố Obihiro.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="/img/hokkaido4.jpg"></nav>

      </div>
    </div>


  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Lâu đài rượu vang Ikeda - <span class="text-muted">Thưởng thức các loại rượu vang của phương bắc  </span></h2>
        <p class="lead">Trong khi khu vực Tokachi được biết đến với những vùng đất bằng
              phẳng rất thích hợp cho việc trồng trọt và chăn nuôi gia súc, thì
              cũng có những ngọn đồi trong khu vực nơi không khí đạt đến nhiệt
              độ lý tưởng cho việc trồng nho và lên men rượu vang. Rượu vang
              Kiyomi được sản xuất ở đây được biết đến là có màu sắc nhẹ nhàng,
              độ chua sảng khoái và một loạt các hương vị phong phú. Nơi sản
              sinh ra rượu vang Tokachi, Lâu đài Rượu vang Ikeda , được xây dựng
              trên một ngọn đồi có tầm nhìn tuyệt vời ra dãy núi Hidaka. Ban đầu
              được xây dựng như một hầm rượu, người dân địa phương đã mang đến
              hơn 200 thùng gỗ sồi Pháp để tạo ra rượu vang sủi bọt của Nhật Bản
              giống như cách tạo ra rượu sâm panh ở Pháp. Trong tòa nhà lâu đài,
              hãy tham gia một chuyến tham quan rượu vang và nếm thử các loại
              rượu vang và rượu mạnh khi bạn ngắm nhìn quang cảnh xung quanh. Du
              khách cũng có thể mua nhiều loại đặc sản địa phương tại khu vực
              cửa hàng quà tặng. </p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="/img/hokkaido5.jpg"></nav>

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
    <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="/img/hokkaido6.jpg"></nav>

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
    <script src="./assets/dist/js/loader.js"></script>
  </body>
</html>
