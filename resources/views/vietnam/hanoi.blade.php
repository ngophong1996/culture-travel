<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Hà Nội</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style1.css" />
    <link rel="stylesheet" href="/css/tokyo.css">
    <link rel="stylesheet" href="/css/HaNoi.css">
    <link href="/css/loader.css" rel="stylesheet">
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
      <a href="#" class="logo"><img src="/img/CultureTravel.png" style="width:80px;height:auto;">Hà Nội</a>
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
      <a href="#about"><img  src="https://wallpaperaccess.com/full/1896084.jpg" class="cover" /></a>
      <div class="contentBx">
        <h2>Hà Nội</h2>
        <h4 style="background-color: dimgray;">Thủ đô Việt Nam</h4>
        <a href="#about" class="btn" style="color: #fff;background-color:dimgray;">Hiểu rõ hơn về Hà Nội</a>
      </div>
  </section>

    <!-- About Ho Chi Minh -->
  <section class="about" id="about">
    <div class="title">
      <h2>Hà Nội</h2>
    </div>
    <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <p class="lead">
                   Hà Nội là thủ đô, thành phố trực thuộc trung ương và là một đô thị loại đặc biệt của Việt Nam. 
                   Hà Nội nằm về phía tây bắc của trung tâm vùng đồng bằng châu thổ sông Hồng, 
                   với địa hình bao gồm vùng đồng bằng trung tâm và vùng đồi núi ở phía bắc và phía tây thành phố. 
                   Hà Nội là thành phố trực thuộc trung ương có diện tích lớn nhất Việt Nam, 
                   đồng thời cũng là thành phố đông dân thứ hai và có mật độ dân số cao thứ hai trong 63 đơn vị hành chính cấp tỉnh của Việt Nam, 
                   nhưng phân bố dân số không đồng đều. Hà Nội có 30 đơn vị hành chính cấp huyện, gồm 12 quận, 17 huyện và 1 thị xã.
                </p>
            </div>
        <div class="col-md-5">
            <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://wallpaperaccess.com/full/2628411.jpg"></nav>
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
            <h2>Tổng quan chung về Hà Nội</h2>
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
                          <h4 >Khí hậu Hà Nội mang đặc điểm của khí hậu nhiệt đới gió mùa.</h4>
                          <div>
                           Thời tiết có sự khác biệt rõ ràng giữa mùa nóng và mùa lạnh, do nằm khá sâu trong nội địa và gần như không có một vùng nước lớn nào giúp điều hoà khí hậu.
                            Mặc dù thời tiết được chia làm hai mùa chính là mùa mưa – từ tháng 4 tới tháng 10 – và mùa khô – từ tháng 11 tới tháng 3, 
                            nhưng Hà Nội vẫn được tận hưởng thời tiết bốn mùa nhờ các tháng giao mùa. Mùa nóng bắt đầu từ tháng 5 đến hết tháng 8, 
                            khí hậu nóng ẩm vào đầu mùa và cuối mùa mưa nhiều rồi mát mẻ, khô ráo vào tháng 9 và tháng 10. Mùa lạnh bắt đầu từ cuối tháng 11 đến hết tháng 3 năm sau. 
                            Từ cuối tháng 11 đến nửa đầu tháng 2 rét và hanh khô, từ nửa cuối tháng 2 đến hết tháng 3 lạnh ẩm và mưa phùn kéo dài từng đợt. 
                            Đôi khi mưa phùn còn có thể kéo dài đến tận cuối tháng 4. Trong khoảng tháng 9 đến giữa tháng 11, Hà Nội có những ngày thu với tiết trời mát mẻ 
                            (rõ rệt hơn Hải Phòng, Nam Định và nhiều tỉnh phía Bắc khác) do đón vài đợt không khí lạnh yếu tràn về. 
                           Tuy nhiên, do chịu sự tác động mạnh mẽ của gió mùa nên thời gian bắt đầu và kết thúc của mỗi mùa thường không đồng đều nhau giữa các năm, nên sự phân chia các tháng chỉ mang tính tương đối.
                          </div>
                          <br>
                          <div><b>Hà Nội thường xuyên nằm ở top đầu các thành phố ô nhiễm.</b></div>
                          <div>
                             Thậm chí nhiều ngày trong năm là thành phố ô nhiễm không khí nhất thế giới, với chỉ số bụi mịn ở mức nguy hiểm cho sức khỏe con người. 
                             Theo Báo cáo chất lượng không khí toàn cầu 2018 thì Hà Nội có hàm lượng bụi mịn cao gấp 4 lần mức khuyến cáo của WHO (40,8 mg/m³, mức khuyến cáo: 10 mg/m³). 
                             Theo báo cáo của Bộ Tài nguyên và Môi trường Việt Nam thì Hà Nội là thành phố ô nhiễm không khí nhất với số ngày chất lượng không khí lên mức kém, xấu, 
                             nguy hại chiếm tỷ lệ cao. Ngoài ra, các con sông chảy qua Hà Nội (sông Nhuệ, sông Tô Lịch, sông Kim Ngưu, sông Lừ, sông Sét) và 
                             các hồ cũng bị ô nhiễm rất nặng do 78% nước thải của Hà Nội xả thẳng trực tiếp ra sông, hồ mà không qua xử lý, 
                             trong đó mỗi con sông của Hà Nội tiếp nhận hàng vạn m³ nước thải đổ vào mỗi ngày.
                             <b>Tuy nhiên, tình hình ô nhiễm đã có hi vọng trở nên tốt hơn nhờ các công tác bảo vệ môi trường của các phường, xã, quận, huyện cùng với các tổ chức lớn và nhỏ khác. 
                              Nhưng chúng ta không thể chỉ trông chờ vào họ mà cách tốt nhất chính là chính chúng ta hãy cùng góp tay vào công cuộc phục hồi Hà Nội nói riêng và Trái Đất nói chung.
                             </b>
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
                                  <span>Hà Nội</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Diện tích</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span> 3.359,82 km²</span>
                                </div>
                              </div>
                            </div>
                            <div class="dientich">
                              <div class="row">
                                <div class="col-md-3">
                                  <span><strong>Dân số</strong></span>
                                </div>
                                <div class="col-md-9">
                                  <span>8,33 triệu người</span>
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
                                    12 quận, 17 huyện và 1 thị xã
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="maps">
                            <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476861.25725964556!2d105.37179704930206!3d20.97344499687456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135008e13800a29%3A0x2987e416210b90d!2z44OZ44OI44OK44OgIOODj-ODjuOCpA!5e0!3m2!1sja!2sjp!4v1663827341836!5m2!1sja!2sjp"
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
         Hà Nội đã sớm trở thành một trung tâm chính trị, kinh tế và văn hóa ngay từ những buổi đầu của lịch sử Việt Nam. 
         Với vai trò thủ đô, Hà Nội là nơi tập trung nhiều địa điểm văn hóa giải trí, công trình thể thao quan trọng của đất nước, 
         đồng thời cũng là địa điểm được lựa chọn để tổ chức nhiều sự kiện chính trị và thể thao quốc tế. Đây là nơi tập trung nhiều làng nghề truyền thống, 
         đồng thời cũng là một trong ba vùng tập trung nhiều hội lễ của miền Bắc Việt Nam. 
         Nền ẩm thực Hà Nội với nhiều nét riêng biệt cũng là một trong những yếu tố thu hút khách du lịch tới thành phố.
      </p>
    </div>

    <div class="contentBx">
      <div class="postColumn">
        <div class="postBox">
          <div class="imgBx">
            <img src="https://hanoiairporthotels.vn/media/1579/lang-chu-tich-ho-chi-minh-lang-bac.png?width=932&height=496" class="cover" />
          </div>
          <div class="textBx">
            <h3>
              <b>Quảng trường Ba Đình – Lăng Bác: </b>
              Nếu đã đặt chân tới mảnh đất ngàn năm văn hiến thì Lăng Bác – Quảng trường Ba Đình là 
              địa điểm du lịch ở Hà Nội mà các bạn không thể bỏ qua. Nơi đây là trung tâm chính trị của Việt Nam với nhà Quốc hội, Phủ Chủ tịch, Bảo tàng Hồ Chí Minh,…
              Lăng Bác là nơi lưu giữ thi hài của vị lãnh tụ kính yêu. Bên ngoài lăng là những hàng tre xanh bát ngát. 
              Lăng chủ tích mở cửa vào sáng thứ 3,4,5,7 và chủ nhật. 
              Khi vào viếng lăng Bác, bạn chú ý ăn mặc chỉnh tề, không đem theo các thiết bị điện tử ghi hành và giữ trật tự trong lăng.
            </h3>
          </div>
        </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="https://aulacviet.vn/wp-content/uploads/2021/08/Van-Mieu-Quoc-Tu-Giam.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                <b>Văn Miếu – Quốc Tử Giám: </b>
                Nếu kể tên các địa điểm du lịch Hà Nội bậc nhất xưa và nay có lẽ ai cũng sẽ nghĩ ngay đến Văn Miếu Quốc Tử Giám. 
                Đây là một quần thể kiến trúc văn hoá hàng đầu và là niềm tự hào của người dân Thủ đô khi nhắc đến 
                truyền thống ngàn năm văn hiến của Thăng Long – Đông Đô – Hà Nội. 
                Văn Miếu Quốc Tử Giám được xem là biểu tượng của tri thức, của nền giáo dục Việt Nam. Đây là nơi thờ phụng các bậc Tiên thánh, 
                Tiên sư của đạo Nho và Tư nghiệp Quốc Tử Giám Chu Văn An – người thầy tiêu biểu về đạo cao, đức trọng của nền giáo dục Việt Nam. 
              </h3>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/06/chua-tran-quoc-ha-noi-1.jpg" class="cover" />
            </div>
            <div class="textBx">
              <h3>
                <b>Chùa Trấn Quốc: </b>
                Chùa Trấn Quốc là một trong những ngôi chùa cổ nhất ở Hà Nội và Việt Nam, nằm trên một bán đảo phía Nam của Hồ Tây, 
                ở gần cuối đường Thanh Niên, quận Ba Đình, Hà Nội. Từng là trung tâm Phật giáo của kinh thành Thăng Long vào 
                thời Lý và thời Trần với những giá trị về lịch sử và kiến trúc, chùa Trấn Quốc nổi tiếng là chốn cửa Phật linh thiêng, 
                là điểm thu hút rất nhiều tín đồ Phật tử, khách tham quan, du lịch trong và ngoài nước.
                Đầu năm 2017, chùa Trấn Quốc được lọt vào danh sách 16 ngôi chùa đẹp nhất thế giới do báo Daily Mail (Anh) bình chọn.
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
            Thủ đô Việt Nam chẳng những hội tụ tinh hoa văn hoá mà còn là mảnh đất vàng son của ẩm thực. 
            Các món ngon Hà Nội thường được “nhận diện” bằng hương vị pha trộn đánh thức vị giác, trang trí “ngon mắt” và phục vụ nóng. 
            Ăn uống ở Hà Nội thích nhất là vào lúc trời se lạnh, cùng bạn bè thưởng thức mỹ vị rồi hàn huyên về những kỷ niệm đẹp.
            <br><h4>Ẩm thực Hà Nội đã tồn tại qua nhiều thế kỷ, được lưu truyền từ đời này sang đời kia, tạo nên hương vị đặc trưng.</h4>
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
                        <span style="color:burlywood;">Bánh Giò Đông Các Hà Nội</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Nem Rán Hà Nội</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Bánh Cốm Hà Nội</span>
                        </li>
                      <li class="foodinfor">
                        <span style="color:burlywood;">Tào Phớ Hà Nội</span>
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
            <h2 class="featurette-heading fw-normal lh-1">Lễ hội truyền thống: <span class="text-muted"> Thăng Long – Hà Nội là một trong ba vùng tập trung nhiều hội lễ của miền Bắc Việt Nam, cùng với vùng đất tổ Phú Thọ và xứ Kinh Bắc.</span></h2>
            <p class="lead">
              Cũng như các vùng đất khác, những lễ hội truyền thống ở khu vực Hà Nội được tổ chức nhiều nhất vào mùa xuân. 
              Phần nhiều các lễ hội tưởng nhớ những nhân vật lịch sử, truyền thuyết như Thánh Gióng, Hai Bà Trưng, Quang Trung, An Dương Vương... 
              Một vài lễ hội có tổ chức những trò chơi dân gian độc đáo như hội thổi cơm thi làng Thị Cấm, hội bơi cạn và bắt chạch làng Hồ, 
              hội chạy cờ làng Đơ Thao, lễ hội thả diều truyền thống Bá Giang.


            </p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-cac-le-hoi-o-ha-noi-dac-sac-nhat-601b68edd4efa.jpg"></nav>

      </div>
    </div>


  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Làng nghề truyền thống: <span class="text-muted">"Hà Nội 36 phố phường"</span></h2>
        <p class="lead">Thành phố Hà Nội trước kia đã có những làng nghề phong phú. 
          Theo thời gian, bộ mặt đô thị của khu phố cổ đã có nhiều thay đổi, nhưng những con phố nơi đây vẫn giữ nguyên những cái tên thuở trước 
          và không ít trong số đó vẫn là nơi buôn bán, kinh doanh những mặt hàng truyền thống cũ. 
          Sau khi Hà Tây được sáp nhập vào Hà Nội, Hà Nội còn có thêm nhiều làng nghề danh tiếng khác. 
          Theo số liệu cuối năm 2008, toàn Hà Nội có 1.264 làng nghề, là nơi tập trung làng nghề đông đúc bậc nhất Việt Nam.
        </p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://elitetour.com.vn/files/images/Blogs/l%C3%A0ng%20h%C6%B0%C6%A1ng%20Qu%E1%BA%A3ng%20Ph%C3%BA%20C%E1%BA%A7u%201.jpg"></nav>

      </div>
    </div>
  
  <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Văn hóa ứng xử: <span class="text-muted">Nơi tập trung những tinh hoa văn hóa của miền Bắc và cả Việt Nam </span></h2>
        <p class="lead"> 
          Trong hàng ngàn năm, vị trí kinh đô khiến thành phố này trở thành nơi quy tụ của những nhân vật ưu tú, những thương nhân, 
          những nghệ nhân, những thợ thủ công lành nghề. Họ tới đây lập nghiệp, mang theo những phong tục, 
          tập quán địa phương và tỉnh Hà Nội trở thành mảnh đất tiêu biểu cho nền văn hóa của cả Việt Nam. 
          Những danh nhân, nhân vật của Việt Nam phần đông xuất thân từ những vùng đất khác, nhưng kinh đô Thăng Long thường là nơi họ xây dựng nên sự nghiệp. 
          Môi trường cạnh tranh của đất kinh thành khiến những thương nhân, thợ thủ công trụ vững lại Hà Nội phải là những người xuất sắc, tài năng. 
          Khi những người dân tứ xứ về định cư tại Thăng Long, các phong tục tập quán mà họ mang theo cũng dần thay đổi, tạo nên nét văn hóa của Hà Nội.
        </p>
    </div>
    <div class="col-md-5">
    <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img width="auto" height="300px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/H%E1%BB%99i_l%C3%A0ng_Trung_T%E1%BB%B1.jpg/1280px-H%E1%BB%99i_l%C3%A0ng_Trung_T%E1%BB%B1.jpg"></nav>

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
