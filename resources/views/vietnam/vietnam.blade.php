<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/vietnam.css">
	<script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	<!-----bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!------Ajax------>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="/js/jquery.mapael.js" charset="utf-8"></script>
    <script src="/js/france_departments.js" charset="utf-8"></script>
x

	<style type="text/css">
	.mapael .mapTooltip {
            position: absolute;
            background-color: #fff;
            moz-opacity: 0.70;
            opacity: 0.70;
            filter: alpha(opacity=70);
            border-radius: 10px;
            padding: 10px;
            z-index: 1000;
            max-width: 200px;
            display: none;
            color: #343434;
        }

        /* For all zoom buttons */
        .mapael .zoomButton {
            background-color: #fff;
            border: 1px solid #ccc;
            color: #000;
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            border-radius: 3px;
            cursor: pointer;
            position: absolute;
            top: 0;
            font-weight: bold;
            left: 10px;

            -webkit-user-select: none;
            -khtml-user-select : none;
            -moz-user-select: none;
            -o-user-select : none;
            user-select: none;
        }

        /* Reset Zoom button first */
        .mapael .zoomReset {
            top: 10px;
        }

        /* Then Zoom In button */
        .mapael .zoomIn {
            top: 30px;
        }

        /* Then Zoom Out button */
        .mapael .zoomOut {
            top: 50px;
        }

        .mapael .map {
            position: relative;
        }
    </style>
	 <script type="text/javascript">
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "france_departments",
                    zoom: {
                        enabled: true
                    },
                    defaultArea: {
                        attrs: {
                            fill: "#5ba4ff",
                            stroke: "#99c7ff",
                            cursor: "pointer"
                        },
                        attrsHover: {
                            animDuration: 0
                        },
                        text: {
                            attrs: {
                                cursor: "pointer",
                                "font-size": 10,
                                fill: "#000"
                            },
                            attrsHover: {
                                animDuration: 0
                            }
                        },
                        eventHandlers: {
                            click: function (e, id, mapElem, textElem) {
                                var newData = {
                                    'areas': {}
                                };
                                if (mapElem.originalAttrs.fill == "#5ba4ff") {
                                    newData.areas[id] = {
                                        attrs: {
                                            fill: "#0088db"
                                        }
                                    };
                                } else {
                                    newData.areas[id] = {
                                        attrs: {
                                            fill: "#5ba4ff"
                                        }
                                    };
                                }
                                $(".mapcontainer").trigger('update', [{mapOptions: newData}]);
                            }
                        }
                    }
                },
                areas: {
                }
            });
        });
    </script>
</head>
<body>

<!------------------------nav bar----------------------------------------------->
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
						<a class="nav-link" href="#">Dự án</a>
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
				</ul>
				</div>
				<div class="nav-item1">
					<a class="btn btn-success" href="loginPage/index.html" role="button">GET START</a>
				</div>
			</div>
		</div>
	</nav>
<!-----------------------------------end Nav bar---------------------------------------------------------------------->
<!--------------------slider-------------------------------------------------------------------------------->
<section id="slider">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Việt Nam</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight">Trang chủ</span><span>Việt Nam</span></div>
		  </div>
	</div>
</section>
<!-------------------------------EndSlide---------------------------->

<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-6 aboutLeft pl-3">
				<p></p>
				<h1>Việt Nam</h1>
			</div>
			<div class="col-md-6 aboutRight pr-3">
                <h3>Việt Nam đất nước con người</h3>
                <p><span>"Chào các bạn!"</span> Câu chào luôn được người Việt coi trọng trong giao tiếp, nó như mang đến sự suôn sẻ và may mắn cho một sự khởi đầu mới hay một ngày mới. Người Việt có câu “Lời chào cao hơn mâm cỗ” là thể hiện sự tôn trọng và lịch sự trong giao tiếp đối với người đối diện. Lời chào còn thể hiện sự thân thiện, tính hiếu khách của người Việt. Vì vậy, các bạn đi đến đâu trên đất nước Việt Nam hay gặp bất cứ ai bạn đều nhận được một lời chào đấy!
Các bạn biết không, mỗi một quốc gia đều có một nét văn hóa đặc trưng riêng, Việt Nam cũng như vậy các bạn ạ! Sau đây, tôi xin giới thiệu với các bạn nét đặc trưng của văn hóa Việt.
Với một quá trình lịch sử đấu tranh chống kẻ thù xâm lược để bảo vệ bờ cõi, giành tự do, độc lập và xây dựng đất nước có từ hàng ngàn năm của người Việt cùng sự hội tụ của 54 thành phần dân tộc khác nhau đã góp phần tạo nên sự đa dạng, phong phú và đặc sắc cho nền văn hóa của Việt Nam.
Bản sắc văn hóa của các dân tộc thể hiện rất rõ nét trong đời sống sinh hoạt cộng đồng và trong các hoạt động kinh tế từ phong tục tập quán, trang phục cho đến phong cách ẩm thực. Dưới đây là những nét đặc sắc của văn hóa Việt Nam mà bạn có thể tìm hiểu.</p>
			</div>
            <div class="d-flex midImage justify-content-center">
				<div class="blockImage">
            <img src="/img/353350.jpg" alt="">
            </div></div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->


<!-------StartMap------->
<section id="areaMap">
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-12 my-4">
				<p class="text-dark">Khám phá văn hoá qua</p>
				<h1 class="text-dark">Bản đồ Việt Nam</h1>
			</div>
		<div class="col-md-5">
			<div class="map_inner mt-3">
				
			
			</div>
		</div>
		<div class="col-md-7 text-bg-success">
			<div class="mapcontainer">
				<div class="map"><span>Alternative content for the map</span>
		
				</div>
			</div>
		</div>
	</div></div>
</section>




<!--------EndMap--------->





<!-------Start_famousArea---------->
<hr>
<section id="famousArea">
<div class="container text-center">

	<div class="row">
		<div class="col-md-12 my-4">
			<p class="text-dark">Cùng khám phá một số</p>
			<h1 class="text-dark">Địa danh nổi tiếng</h1>
		</div>
		<div class="col-4">
			<figure class="snip1084 red">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample43.jpg" alt="sample43" />
				<figcaption>
				  <h2><span>Hà Nội</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
			  <div class="col-4">
			  <figure class="snip1084 blue"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample51.jpg" alt="sample51" />
				<figcaption>
				  <h2><span>Hồ Chí Minh</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
			  <div class="col-4">
			  <figure class="snip1084 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample49.jpg" alt="sample49" />
				<figcaption>
				  <h2><span>Đà Nẵng</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
		<div class="col-4">
	<figure class="snip1084 red">
		<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample43.jpg" alt="sample43" />
		<figcaption>
		  <h2><span>Nha Trang</span></h2>
		  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
		</figcaption>
		<a href="#"></a>
	  </figure></div>
	  <div class="col-4">
	  <figure class="snip1084 blue"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample51.jpg" alt="sample51" />
		<figcaption>
		  <h2><span>Huế</span></h2>
		  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
		</figcaption>
		<a href="#"></a>
	  </figure></div>
	  <div class="col-4">
	  <figure class="snip1084 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample49.jpg" alt="sample49" />
		<figcaption>
		  <h2><span>Vũng Tàu</span></h2>
		  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
		</figcaption>
		<a href="#"></a>
	  </figure></div>
	</div>
	</div>
</div>
</section>
<!-------End_famousArea---------->












		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h3 class="section-title">About Us</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						</div>
					

						<div class="col-md-4">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="fa-regular fa-map"></i>98 West 21th Street, Suite 721 New York NY 10016</li>
								<li><i class="fa-solid fa-phone-flip"></i>+ 1235 2355 98</li>
								<li><i class="fa-regular fa-envelope"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="fa-solid fa-globe"></i><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h3 class="section-title">Drop us a line</h3>
							<form class="contact-form">
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
</body>
</html>