<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="css/vietnam.css">
	<script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	<!-----bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!------Ajax------>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="/js/jquery.mapael.js" charset="utf-8"></script>
    <script src="/js/france_departments.js" charset="utf-8"></script>

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
            border: 2px solid #ccc;
            color: #000;
            width: 25px;
            height: 25px;
			margin-bottom: 20px;
            line-height: 15px;
            text-align: center;
            border-radius: 3px;
            cursor: pointer;
            position: absolute;
            top: 0;
            font-weight: bold;
            right: 30px;

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
            top: 40px;
        }

        /* Then Zoom Out button */
        .mapael .zoomOut {
            top: 70px;
        }

        .mapael .map {
            position: relative;
        }
		.mapael .mapTooltip {
            position: absolute;
            background-color: #fff;
            moz-opacity: 0.70;
            opacity: 0.80;
            filter: alpha(opacity=70);
            border-radius: 10px;
            padding: 10px;
            z-index: 1000;
            max-width: 200px;
            display: none;
            color: #343434;
        }
    </style>
	<!---------Mapeal------>
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
    
                 
                        },
                        attrsHover: {
                            "stroke-width": 2
                        }
                    }
                },
                areas: {
					@foreach ($vietnams as $vietnam )
					"{{ $vietnam->id*10 }}": {
                        tooltip: {content: "<span style=\"font-weight:bold;\">{{ $vietnam->name }}</span><br />Diện tích : {{ number_format($vietnam->area,0, ',', ',') }}km2<br />Dân số : {{ number_format($vietnam->population,0, ',', ',') }}"}
                    	},
					@endforeach

                }
            });
        });
    </script>

	<script type="text/javascript">
		$(document).ready(function(){

 		fetch_customer_data();

 		function fetch_customer_data(query = '')
 		{
			$.ajax({
            url:"{{ route('action') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#listArea').html(data.table_data);
             
            }
        })
 		}

 			$(document).on('keyup', '#search', function(){
	 		var query = $(this).val();
	 		fetch_customer_data(query);
 			});
		});
		</script>
	<script type="text/javascript">
		function myFunction() {
  		var moreText = document.getElementById("more");
  		var btnText = document.getElementById("myBtn");

  		if (moreText.style.display === "none") {
    		btnText.innerHTML = "Rút gọn";
    		moreText.style.display = "block";
 		} else {
    		btnText.innerHTML = "Xem thêm";
   			 moreText.style.display = "none";
  }
}

	</script>
	
</head>
<body>


<!------------------------nav bar----------------------------------------------->
<nav class="navbar navbar-expand-md navbar-light sticky-top">
	<div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tổng quán</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Văn hoá</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vùng miền</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="#">Địa danh</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Sự kiện</a>
			  </li>
          </ul>
        </div>
		  <a href="#" class="">
			<img src="/img/CultureTravel.png" style="width:90px;height:auto;">
		</a>
		<div class=" navbar-collapse justify-content-end">
		  <ul class="navbar-nav">
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle user-profile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<img src="https://khoinguonsangtao.vn/wp-content/uploads/2022/02/anh-dai-dien-fb-dep.jpg" alt="">{{ Auth::user()->name }}
			</a>
			<ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#">Cài dặt tài khoản</a></li>
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
	 
	</div>
  </nav>
<!--------------------slider-------------------------------------------------------------------------------->
<section id="slider">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Việt Nam</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight">Trang chủ</span><span>Việt Nam</span></div>
		  </div>
	</div>
</section>
<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-4 aboutLeft pl-3">
				<p>Xin Chào</p>
				<h1>Việt Nam</h1>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2>"Việt Nam đất nước con người"</h2>
				<div style="text-align: justify;">
					<p>Việt Nam là một đất nước nhiệt đới nằm ở khu vực Đông Nam Á – trung tâm của tuyến đường biển quốc tế. Khí hậy nhiệt đới gió mùa tạo nên sự đa dạng tài nguyên sinh học của Việt Nam. Bên cạnh đó, đất nước Việt Nam có hình chữ S với 3260km đường biển có tiềm năng du lịch và thủy hải sản phong phú.</p>
			
					<p>Một trong những đặc điểm nổi bật khi nhắc tới Việt Nam là các địa điểm du lịch. Việt Nam là một đất nước nhỏ nhắn, xinh đẹp với những phong cảnh hùng vĩ. Nhờ có khí hậu nhiệt đới nên Việt Nam được biết tới với các cảnh đẹp hút hồn du khách như các ngọn núi tráng lệ, thung lũng ở phía bắc hay những bãi biển cát trắng ở phía nam. Vì Việt Nam có những bờ biển dài nên du lịch đặc biệt được chú trọng. Sapa, thủ đô Hà Nội, Đà Nẵng hay thành phố Hồ Chí Minh là những địa điểm thu hút khách du lịch nước ngoài nhiều nhất.</p>
					<p>Việt Nam có một lịch sử lâu dài với hơn 4000 ngàn năm đấu tranh chống kẻ thù xâm lược để bảo vệ bờ cõi, giành tự do, độc lập và xây dựng đất nước có từ hàng ngàn năm của người Việt cùng sự hội tụ của 54 thành phần dân tộc khác nhau đã góp phần tạo nên sự đa dạng, phong phú và đặc sắc cho nền văn hóa của Việt Nam.
						Bản sắc văn hóa của các dân tộc thể hiện rất rõ nét trong đời sống sinh hoạt cộng đồng và trong các hoạt động kinh tế từ phong tục tập quán, trang phục cho đến phong cách ẩm thực. Dưới đây là những nét đặc sắc của văn hóa Việt Nam mà bạn có thể tìm hiểu. </p></div>
                
			</div>
            <div class="d-flex midImage justify-content-center">
				<div class="blockImage">
            <img src="/img/353350.jpg" alt="">
            </div></div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
<style>
#countNumber{
	margin-top: 100px;
    margin-bottom: 120px;
    padding: 30px 0px 0px 0px;
	position: relative;
}
.elementor-counter .heading-decor {
    display: inline-block;
    width: 60px;
    height: 3px;
    margin-top: 25px;
	background-color: #ffcc00;
}
.elementor-counter {
    text-align: center;
	padding: 15px 50px 30px 50px;
	border-right: 1px solid #f0efef;
}
.elementor-counter .elementor-counter-number-wrapper {
    font-weight: 400;
    font-family: "takeEasy";

}
.elementor-counter .count-num {
    font-family: "takeEasy";
	font-size: 60px;
}
.elementor-counter-number-prefix, .elementor-counter-number-suffix {
    font-family: "takeEasy";
	font-size: 30px;
}
hr.hrForCount{
	border-top: 2px solid #b3b3b3;
	width: 100%;
	margin: 70px 0;
}
.elementor-counter-description{
	color: #575757 !important;
}

</style>

<section id="countNumber">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
						
								<div class="elementor-counter-description">Dân số hiện tại của Việt Nam</div>
								<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">99,113,159</span><br>
							<span class="elementor-counter-number-suffix">người</span>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
						
							<div class="elementor-counter-description">Tổng diện tích đất</div>
							<span class="heading-decor"></span>
					</div>
					<div class="elementor-counter-number-wrapper">
						<span class="elementor-counter-number-prefix"></span>
						<span class="count-num">310,060</span> <br>
						<span class="elementor-counter-number-suffix">km2</span>
					</div>
				</div>
			</div></div>
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
						
							<div class="elementor-counter-description">Mật độ dân số của Việt Nam</div>
							<span class="heading-decor"></span>
					</div>
					<div class="elementor-counter-number-wrapper">
						<span class="elementor-counter-number-prefix"></span>
						<span class="count-num">320</span><br>
						<span class="elementor-counter-number-suffix">người/km2</span>
					</div>
				</div>
				</div>
			</div>
		</div>
		<hr class="hrForCount">
	</div>

</section>





<!---------------->

<!-------StartMap------->
<section id="areaMap">
	<div class="container">
		<div class="row">
		<div class="col-md-6" style="padding: 0;">
			<div class="col-12 py-4" style="background-color: #FDFDFD;">
				<p class="text-dark">Khám phá văn hoá qua</p>
				<h1 class="text-dark">Bản đồ Việt Nam</h1>
			</div>
			<div class="col-12 infoCol1 d-flex flex-column">
				<style>
					.infoCol1{
						box-sizing: border-box;
					}
					#search-box{
 						background: #fff;
  						border-radius: 30px;
						width: 80%;
						margin-left: auto;
   						margin-right: auto;
    					margin-top: 10px;
						margin-bottom: 20px;
					}
					#search-box #search{
						border: none;
						outline: none;
						background: none;
						font-size: 16px;
						width: 0;
						padding: 0;
						transition: all 0.25s ease-in-out;
					}
					#search-box:hover #search{
						width: 460px;
						padding: 10px 0px 10px 15px;
					}
					#search-box #search-btn{
						background-color: #fff;
						cursor: pointer;
						border: none;
						padding: 10px;
						border-radius: 50%;
						font-size: 12px;

					}
					#listArea ul{
						list-style-type: none;
						columns: 3;
						margin-bottom: 0rem;
						font-size: 16px;
						color: #FDFDFD !important;
					}
					

					
				</style>
				<form action="" method="POST" id="search-box">
					<input type="text" name="search" id="search" placeholder="Bạn muốn tìm địa điểm nào?">
					<button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
				</form>
				<div id="listArea">
						
				</div>
			</div>
			<style>
				[d] .active{
					fill: #ccc !important;
				}
				path.area.active {
    				fill: #fff;
				}
				.infoArea{
					display: none;
					transition: 0.5s;
				}
				.infoArea.active{
					display: block;
					transition: 0.5s;
				}
				.snip1084 span{
					text-shadow: black 0.1em 0.1em 0.2em;
				}
			</style>

			<script type="text/javascript">
			$(document).ready(function () {
				//default area when load
				$('[data-id="630"]').addClass( "active" );

				$("path").on("click",function(){

					var classID = $(this).attr("data-id").toString();
				

					$("path").removeClass( "active" );
					$(".infoArea").removeClass( "active" );
					$(this).addClass( "active" );

					var containString = "." + classID;
					var $newID= $(containString);

					$newID.addClass("active");
			
				});
			});
			</script>
			<div class="col-12 infoCol2">
				<ul>
					@foreach ($vietnams as $vietnam )
						@if ($vietnam->id === 63)
							<li id="" class="infoArea {{ $vietnam->id*10 }} active">
							<h1>{{ $vietnam->name }}</h1>
							<p>{{ $vietnam->title }}</p>
							</li>
						@else
							<li id="" class="infoArea {{ $vietnam->id*10 }}">
							<h1>{{ $vietnam->name }}</h1>
							<p>{{ $vietnam->title }}</p>
							</li>
						@endif
					@endforeach

				</ul>

				

			</div>
		</div>
		<div class="col-md-6" style="background-color: #f7f2e9">
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
				<img src="/img/hanoi.jpg" alt="sample43" />
				<figcaption>
				  <h2><span>Hà Nội</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
			  <div class="col-4">
			  <figure class="snip1084 blue"><img src="/img/hochiminh.jpg" alt="sample51" />
				<figcaption>
				  <h2><span>Hồ Chí Minh</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
			  <div class="col-4">
			  <figure class="snip1084 yellow"><img src="/img/danang.jpeg" alt="sample49" />
				<figcaption>
				  <h2><span>Đà Nẵng</span></h2>
				  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
				</figcaption>
				<a href="#"></a>
			  </figure></div>
		<div class="col-4">
	<figure class="snip1084 red">
		<img src="/img/camau.jpeg" alt="sample43" />
		<figcaption>
		  <h2><span>Cà Mau</span></h2>
		  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
		</figcaption>
		<a href="#"></a>
	  </figure></div>
	  <div class="col-4">
	  <figure class="snip1084 blue"><img src="/img/hue.jpeg" alt="sample51" />
		<figcaption>
		  <h2><span>Huế</span></h2>
		  <p>You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you.</p>
		</figcaption>
		<a href="#"></a>
	  </figure></div>
	  <div class="col-4">
	  <figure class="snip1084 yellow"><img src="/img/vungtau.jpg" alt="sample49" />
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
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="/assets/js/jquery.rcounterup.js"></script>
<script src="/assets/js/active.js"></script>
</body>
</html>