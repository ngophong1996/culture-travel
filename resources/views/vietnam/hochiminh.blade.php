<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Thành phố Hồ Chí Minh</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style1.css" />
    <link rel="stylesheet" href="/css/tokyo.css">
    <link rel="stylesheet" href="/css/HCM.css">
    <link href="/css/loader.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="CultureTravel.png"/> 
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
      <a href="#" class="logo"><img src="/img/CultureTravel.png" style="width:80px;height:auto;">Thành phố Hồ Chí Minh</a>
      <div class="menuToggle"></div>
    </header>
    <ul class="navigation">
      <li><a href="{{ route('home') }}" onclick="toggleMenu()">Trang chủ</a></li>
      <li><a href="{{ route('vietnam.index') }}" onclick="toggleMenu()">Việt Nam</a></li>
      <li><a href="{{ route('about') }}" onclick="toggleMenu()">Về chúng tôi</a></li>
      <li><a href="{{ route('blog.index') }}" onclick="toggleMenu()">Blog</a></li>
      
    </ul>

    <!-- Banner -->
  <section class="banner" id="home">
      <a href="#about"><img  src="https://wallpaperaccess.com/full/3967718.jpg" class="cover" /></a>
      <div class="contentBx">
        <h2>Thành phố Hồ Chí Minh</h2>
        <h4 style="background-color: dimgray;">Thành phố lớn nhất Việt Nam</h4>
        <a href="#about" class="btn" style="color: #fff;background-color:dimgray;">Hiểu rõ hơn về Thành phố Hồ Chí Minh</a>
      </div>
  </section>

    <!-- About Ho Chi Minh -->
  <section class="about" id="about">
    <div class="title">
      <h2>Thành phố Hồ Chí Minh</h2>
    </div>
    <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <p class="lead">
                   Thành phố Hồ Chí Minh, còn gọi bằng tên cũ phổ biến là Sài Gòn. 
                    Đây còn là trung tâm kinh tế, chính trị, văn hóa, giải trí và giáo dục tại Việt Nam. 
                    Thành phố Hồ Chí Minh là thành phố trực thuộc trung ương thuộc loại đô thị đặc biệt của Việt Nam cùng với thủ đô Hà Nội. 
                    Nằm trong vùng chuyển tiếp giữa Đông Nam Bộ và Tây Nam Bộ, 
                    thành phố này hiện có 16 quận, 1 thành phố và 5 huyện, tổng diện tích 2.095 km².
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
            <h2>Tổng quan chung về Thành phố Hồ Chí Minh</h2>
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
                          <h4 >Nằm trong vùng nhiệt đới xavan</h4>
                          <div>
                            Cũng như một số tỉnh Nam Bộ khác, Thành phố Hồ Chí Minh không có bốn mùa: xuân, hạ, thu, đông.
                            Nhiệt độ cao đều và mưa quanh năm (mùa khô ít mưa). Trong năm, Thành phố Hồ Chí Minh có 2 mùa là biến thể của mùa hè: mùa mưa – khô rõ rệt. 
                            Mùa mưa được bắt đầu từ tháng 5 tới tháng 11 (khí hậu nóng ẩm, nhiệt độ cao mưa nhiều), 
                            còn mùa khô từ tháng 12 tới tháng 4 năm sau (khí hậu khô, nhiệt độ cao và mưa ít).
                            Trên phạm vi không gian thành phố, lượng mưa phân bố không đều, khuynh hướng tăng theo trục Tây Nam – Đông Bắc. 
                            Các quận nội thành và các huyện phía bắc có lượng mưa cao hơn khu vực còn lại.
                          </div>
                          <br>
                          <div><b>Thành phố Hồ Chí Minh chịu ảnh hưởng bởi hai hướng gió chính là gió mùa Tây – Tây Nam và Bắc – Đông Bắc.</b></div>
                          <div>
                             Có thể nói Thành phố Hồ Chí Minh thuộc vùng không có gió bão.
                             Với những biến đổi khí hậu, Sài Gòn thuộc danh sách 10 thành phố trên thế giới bị đe dọa vì nguy cơ mực nước biển dâng cao. 
                             Theo dự tính của Liên Hợp Quốc thì đến năm 2050 nước biển sẽ dâng 26 cm và 70% khu đô thị Sài Gòn sẽ bị ngập lụt.
                             Ngân hàng Phát triển Á châu ước lượng hậu quả là thiệt hại kinh tế lên đến hàng tỷ USD.
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
                                  <span>Thành phố Hồ Chí Minh</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Diện tích</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span> 2.095 km²</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Dân số</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>8.993.082 người (năm 2019)</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Thành-Quận-Huyện</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <div>

                                        Quận 1・Quận 2・Quận 3・Quận 4・Quận 5・Quận 6・Quận 7・Quận 8・Quận 9・Quận 10・Quận 11・Quận 12
                                        ・Bình Tân・Bình Thạnh・Gò Vấp・Phú Nhuận・Tân Bình・Tân Phú・Thủ Đức・Bình Chánh・Cần Giờ・Củ Chi
                                        ・Hóc Môn・Nhà Bè
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="maps">
                            <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.46147737344!2d106.41434639036972!3d10.754665781787615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2z44OZ44OI44OK44OgIOODm-ODvOODu-ODgeODu-ODn-ODsyDjg5vjg7zjg4Hjg5_jg7M!5e0!3m2!1sja!2sjp!4v1663827366331!5m2!1sja!2sjp"
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
         Đến thành phố Hồ Chí Minh, các bạn sẽ được tham quan nhiều nơi mang đậm dấu ấn lịch sử, văn hóa của cộng đồng người Việt và cả khu vực Đông Nam Á. 
         Với hệ thống bảo tàng nhiều nhất so với các tỉnh thành trong cả nước (11 bảo tàng), điểm tham quan nổi tiếng là hệ thống kiến trúc thời Pháp với nhiều trường phái kiến trúc, 
         phong cách nghệ thuật khác nhau, những điểm du lịch độc đáo nhất vẫn là căn cứ cách mạng với hệ thống đường hầm như mạng nhện trong lòng đất: Địa đạo Củ Chi,
        đền Bến Dược và khu du lịch sinh thái Củ Chi - điểm hẹn xanh trên đất thép. Nổi tiếng không kém là rừng ngập mặn Cần Giờ với những trận diệt tàu lừng lẫy, 
        nay trở thành Khu dự trữ sinh quyển thế giới, một điểm du lịch sinh thái hấp dẫn…
        Khi đến với Sài Gòn quý khách sẽ có cảm nhận thấy Mùi hương đồng nội nồng nàn quen thuộc  với người dân Việt Nam hòa quyện với cảnh vật đơn sơ, 
        bình dị nơi đây sẽ mang đến cho du khách những giây phút thư giãn, thoải mái sau những bộn bề lo toan trong cuộc sống.
      </p>
    </div>

    <div class="contentBx">
      <div class="postColumn">
        <div class="postBox">
          <div class="imgBx">
            <img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/bao-tang-chung-tich-chien-tranh.jpg" class="cover" />
          </div>
          <div class="textBx">
            <h3>
              <b>Bảo Tàng Chứng tích Chiến tranh.</b>
              Thành lập T9- 1975, tiền thân là nhà trưng bày tội ác chiến tranh Mỹ- Ngụy.
              Năm 1998, Bảo tàng Chứng tích Chiến tranh được Liên hiệp quốc công nhận la một trong số 61 bảo tàng thuộc hệ thống “ Bảo tàng vì hòa bình” của thế giới.
              Thông qua những gì trưng bày, du khách tham quan có thêt phần nào thấy được sự ác liệt của chiến tranh cũng như sự can trường của người dân Việt Nam.
            </h3>
          </div>
        </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="http://hanoimoi.com.vn/Uploads/images/anhthu/2019/07/06/Ben_NhaRong-(01).jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                <b>Bến nhà Rồng:</b>
                Toà nhà có đôi rồng gắn trên nóc, kiểu "lưỡng long chầu nguyệt" nên thường được gọi là "Nhà Rồng", do vậy bến cảng thuộc khu vực này cũng mang tên Bến Nhà Rồng.
                Bến Nhà Rồng hiện nay là Bảo tàng Hồ Chí Minh - Chi nhánh Thành phố Hồ Chí Minh, là một chi nhánh nằm trong hệ thống các Bảo tàng và di tích lưu niệm về Chủ tịch Hồ Chí Minh trong cả nước.
              </h3>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="https://thanhlamhotspring.com/wp-content/uploads/2015/02/Dia-Dao-Cu-Chi-003.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                <b>Địa đạo Củ Chi</b>
                  Địa đạo Củ Chi cách Thành phố Hồ Chí Minh 70 km về phía Tây Bắc. Đây là nơi thu nhỏ trận đồ biến hóa của quân và dân Củ Chi trong cuộc kháng chiến lâu dài ác liệt suốt 30 năm chống kẻ thù xâm lược. 
                  Với tầm vóc chiến tranh của mình, địa đạo Củ Chi đã đi vào lịch sử đấu tranh anh hùng của nhân dân Việt Nam như một huyền thoại của thế kỷ 20 và trở thành một địa danh nổi tiếng trên thế giới. 
                  Đến Thành phố Hồ Chí Minh, bạn hãy đến thăm Khu di tích lịch sử địa đạo Củ Chi, để hiểu thế nào là cuộc chiến đấu trường kỳ gian khổ.
              </h3>
            </div>
          </div>
        </div>

    </section>

   <!-----------AMTHUC------------->
        <section class="section">
           <div class="title food">
          <h2>ẨM THỰC</h2>
          <p style="text-align:center;margin: 0 auto;">
            Đến với du lịch Sài Gòn các bạn yêu thích ẩm thực có thể thỏa mãn với thực đơn đậm chất phương nam, 
            dân cư ba miên hội tụ, khiến cho mảnh đất Sài Gòn trở thành địa điểm du lịch có nền ẩm thực phong phú nhất. 
            Nếu có dịp du lịch Sài Gòn quý khách có thể yên tâm thưởng thức món ăn mà không sợ không hợp khẩu vị của mình. 
            <br><h4>Sài Gòn nơi hội tụ tinh hoa văn hóa ẩm thực.</h4>
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
                    <ul class="Foodpic" >
                      <li class="foodinfor">
                        <span style="color:burlywood;">Cơm tấm Sài Gòn</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Bún chả Sài Gòn</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Bánh tráng Sài Gòn</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Hủ tiếu Sài Gòn</span>
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
            <h2 class="featurette-heading fw-normal lh-1">Truyền thông: <span class="text-muted"> Một trong hai trung tâm truyền thông của Việt Nam</span></h2>
            <p class="lead">
              Thành phố Hồ Chí Minh hiện nay có 38 đơn vị báo chí thành phố và 113 văn phòng đại diện báo chí trung ương và các tỉnh, 
              3 nhà xuất bản của thành phố và 21 chi nhánh nhà xuất bản trung ương cùng mạng lưới thông tấn xã, các đài phát thanh, 
              truyền hình địa phương và trung ương. Tổng cộng, trên địa bàn thành phố hiện nay có trên 1000 người hoạt động trong lĩnh vực báo chí. 
              Sài Gòn cũng là nơi ra đời tờ Gia Định báo, tờ báo quốc ngữ đầu tiên. Sài Gòn giải phóng, Thanh Niên, Tuổi Trẻ nằm trong số những tờ báo lớn nhất Việt Nam hiện nay. 
              Truyền hình đã xuất hiện tại Sài Gòn từ trước năm 1975 do Mỹ xây dựng nhằm phục vụ quân viễn chinh Mỹ, khi miền Bắc còn đang trong giai đoạn thử nghiệm. Ngay sau ngày Chính phủ Sài Gòn sụp đổ, Đài truyền hình Giải phóng đã thu giữ các cơ sở do Mỹ để lại và bắt đầu phát sóng. 
              Đến nay, Đài Truyền hình Thành phố Hồ Chí Minh – HTV trở thành đài truyền hình địa phương quan trọng bậc nhất Việt Nam. </p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Buu_Dien_Trung_Tam_Saigon%2C_Cong_xa_Pari%2C_phuong_Ben_thanh%2C_quan_1%2C_tp_hcmvn_-_panoramio.jpg"></nav>

      </div>
    </div>


  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Thể dục, thể thao: <span class="text-muted">Phát triển mạnh mẽ</span></h2>
        <p class="lead">Theo số liệu thống kê vào năm 1994, toàn Thành phố Hồ Chí Minh có 492,7 hecta dành cho hoạt động thể thao, tức trung bình 1,02 m²/người, 
          trong đó nội thành là 0,26 m²/người. Với sự gia tăng dân số, con số thực tế hiện nay thấp hơn.[157] Vào năm 2005, toàn thành phố có 91 sân bóng đá, 86 bể bơi, 
          256 phòng tập thể thao.[158] Sân vận động lớn nhất thành phố hiện nay là sân Thống Nhất, với 25.000 chỗ ngồi. Sân vận động lớn thứ hai là sân Quân khu 7, 
          nằm ở quận Tân Bình. Không chỉ dành cho thi đấu thể thao, đây còn là địa điểm tổ chức nhiều chương trình ca nhạc quy mô lớn. 
          Một địa điểm thể thao quan trọng khác của thành phố là Trường đua Phú Thọ. Xuất hiện từ thời thuộc địa, 
          Trường đua Phú Thọ hiện nay là trường đua ngựa duy nhất của Việt Nam. 
          Sở Thể dục – Thể thao thành phố cũng quản lý một số câu lạc bộ như Phan Đình Phùng, Thanh Đa, Yết Kiêu.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://static.kinhtedothi.vn/images/upload/2021/12/25/68ccd461-a129-44bb-8b51-d4573c830531.jpg"></nav>

      </div>
    </div>
  
  <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Trung tâm văn hóa, giải trí: <span class="text-muted">Thành phố đa dạng văn hóa </span></h2>
        <p class="lead"> 
          Ngay từ giai đoạn thành lập, dân cư của Sài Gòn đã thuộc nhiều dân tộc khác nhau: Kinh, Hoa, Chăm,... 
          Thời kỳ thuộc địa rồi Chiến tranh Việt Nam, Sài Gòn hấp thụ thêm nền văn hóa Âu – Mỹ. 
          Cho tới những thập niên gần đây, những hoạt động kinh tế, du lịch tiếp tục giúp thành phố có nền văn hóa đa dạng hơn.
          Với vai trò trung tâm văn hóa của Việt Nam, Thành phố Hồ Chí Minh hiện nay có 22 đơn vị nghệ thuật, 9 rạp hát, 11 bảo tàng, 22 rạp chiếu phim, 25 thư viện.[159][160] Hoạt động của ngành giải trí ở Thành phố Hồ Chí Minh nhộn nhịp hơn bất cứ thành phố nào ở Việt Nam. 
          Hầu hết các hãng phim tư nhân lớn của Việt Nam hiện nay, như Phước Sang, Thiên Ngân, HKFilm, Việt Phim... đều có trụ sở chính ở Thành phố Hồ Chí Minh.
          Doanh thu các rạp của thành phố chiếm khoảng 60–70% doanh thu chiếu phim của cả nước. <br>Thành phố Hồ Chí Minh sở hữu những sân khấu đa dạng.
        </p>
    </div>
    <div class="col-md-5">
    <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://image.phunuonline.com.vn/fckeditor/upload/2022/20220525/images/chua-dien-ngay-xua-ngay-_561653479501.jpg"></nav>

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
