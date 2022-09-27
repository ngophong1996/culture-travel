<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Việt Nam</title>
	<link href="/css/loader.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vietnam.css">
	<script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	<!-----bootstrap-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    <script src="/js/vietnammap.js" charset="utf-8"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
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


    </style>
	<!---------Mapeal------>
	<script type="text/javascript">
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "vietnams",
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
		 $.ajax({
		url:"{{ route('choosenVN') }}",
		method:'GET',
		dataType:'json',
		success:function(data)
		{	$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.length/64*100)+"%  của Việt Nam");
			data.forEach(function(value, index){
				$('[data-id="' + value.areaid*10 + '"]').css('fill', '#FF4D00');
		});
		}
		});
 		function fetch_customer_data(query = ''){
			$.ajax({
            url:"{{ route('actionvn') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data){
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
	//Readmore_Readless
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
    <div id="preloader"></div>

<!------------------------nav bar----------------------------------------------->
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
  padding-top: 27px;
  padding-bottom: 27px;;
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
	  <a class="navbar-brand" href="{{ route('home') }}"><img src="/img/CultureTravel.png"></a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-left">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Tổng quan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#mienbac">Văn hoá</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#areaMap">Vùng miền</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#famousArea">Địa danh</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#nonthEvent">Sự kiện</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
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
	  </div>
	<div>
  
	</div>
	</div>
  </nav>
<!--------------------slider-------------------------------------------------------------------------------->
<section id="slider" style=" background: url('/img/771820.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Việt Nam</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span>Việt Nam</div>
		  </div>
	</div>
</section>
<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-4 aboutLeft pl-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">
				<p>Xin Chào</p>
				<h1>Việt Nam</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Việt Nam đất nước con người"</h2>
				<div style="text-align: justify;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" >
					<p>Việt Nam là một đất nước nhiệt đới nằm ở khu vực Đông Nam Á – trung tâm của tuyến đường biển quốc tế. Khí hậy nhiệt đới gió mùa tạo nên sự đa dạng tài nguyên sinh học của Việt Nam. Bên cạnh đó, đất nước Việt Nam có hình chữ S với 3260km đường biển có tiềm năng du lịch và thủy hải sản phong phú.</p>
					<p>Một trong những đặc điểm nổi bật khi nhắc tới Việt Nam là các địa điểm du lịch. Việt Nam là một đất nước nhỏ nhắn, xinh đẹp với những phong cảnh hùng vĩ. Nhờ có khí hậu nhiệt đới nên Việt Nam được biết tới với các cảnh đẹp hút hồn du khách như các ngọn núi tráng lệ, thung lũng ở phía bắc hay những bãi biển cát trắng ở phía nam. Vì Việt Nam có những bờ biển dài nên du lịch đặc biệt được chú trọng. Sapa, thủ đô Hà Nội, Đà Nẵng hay thành phố Hồ Chí Minh là những địa điểm thu hút khách du lịch nước ngoài nhiều nhất.</p>
					<p>Việt Nam có một lịch sử lâu dài với hơn 4000 ngàn năm đấu tranh chống kẻ thù xâm lược để bảo vệ bờ cõi, giành tự do, độc lập và xây dựng đất nước có từ hàng ngàn năm của người Việt cùng sự hội tụ của 54 thành phần dân tộc khác nhau đã góp phần tạo nên sự đa dạng, phong phú và đặc sắc cho nền văn hóa của Việt Nam.
						Bản sắc văn hóa của các dân tộc thể hiện rất rõ nét trong đời sống sinh hoạt cộng đồng và trong các hoạt động kinh tế từ phong tục tập quán, trang phục cho đến phong cách ẩm thực. Dưới đây là những nét đặc sắc của văn hóa Việt Nam mà bạn có thể tìm hiểu. </p></div>
			</div>
            <div class="d-flex midImage justify-content-center">
				<div class="blockImage">
            		<img src="/img/353350.jpg" alt="">
           		</div>
			</div>
		</div>
	</div>
</section>

<!-----------EndAbout---------->
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
				</div>
			</div>
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
<section id="mienbac">
	<div class="container">
		<div class="row">
			<div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 taito-mb aos-init aos-animate">
				<h1 class="css-taito-mb">
					Văn hóa truyền thống việt nam
				</h1>
			</div>
			<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 title-mb aos-init aos-animate">
				<p>Việt Nam có một nền văn hóa lâu đời và đặc biệt gắn liền với lịch sử địa lý và sự phát triển trên cả nước. Những nét đặc trưng của văn hóa Việt Nam luôn hấp dẫn du khách nước ngoài, khiến họ tò mò, tìm hiểu. Nhìn chung, Việt Nam là một xã hội, thực hành tốt nề nếp gia đình và phát huy các chức năng truyền thống.</p>
				
				<h1>︾</h1>
			</div>
			<div data-aos="zoom-in-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 img-mb aos-init aos-animate">
				<img class="img-fluid mb1" src="/img/anhchua2.jpeg" alt="" srcset="">
				<img class="img-fluid mb2" src="/img/anhchua.jpeg" alt="" srcset="">
				<img class="img-fluid mb3" src="/img/chuamotcot.jpeg" alt="" srcset="">

			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 best-dd">
				<h1 data-aos="zoom-in-left" class="aos-init">
					Nét đẹp văn hóa truyền thống việt nam
				</h1>
				<div class="row fix-center">
					<div style="margin-top: 20px;" class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('aodai')}}">
								<img src="/img/aodai19.jpg" class="img-fluid css-img-best-mb" alt="" srcset="">
								<div class="text-best-mb">
									<p class="css-text-best-mb">Trang phục truyền thống</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('ngayle')}}">
								<img src="/img/ngayle2.jpg" class="img-fluid css-img-best-mb" alt="" srcset="">
								<div class="text-best-mb">
									<p class="css-text-best-mb">Ngày lễ truyền thống</p>
								</div>
							</a>
						</div>
					</div>
					<div style="margin-top: 20px;" class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('tongiao')}}">
								<img src="/img/dlhoian6.jpg" class="img-fluid css-img-best-mb" alt="" srcset="">
								<div class="text-best-mb">
									<p class="css-text-best-mb">Tín ngưỡng-Tôn giáo</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>




<!---------------->

<!-------StartMap------->
<section id="areaMap">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="padding: 0;">
				<div class="col-12 py-4" style="background-color: #FDFDFD;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" >
					<p class="text-dark">Khám phá văn hoá qua</p>
					<h1 class="text-dark">Bản đồ Việt Nam</h1>
				</div>
				<div class="col-12 infoCol1 d-flex flex-column" >
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
    				fill: #FFCC00 !important;
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
				//clickOnListArea
				$('#listArea').on('click','li', function(event){
					var classID = $(this).attr('data-id');
					console.log(classID);
					$("path").removeClass( "active" );
					$(".infoArea").removeClass( "active" );
					var containString = "." + classID+"0";
					var $newID= $(containString);
					$('[data-id=' + classID + '0]').addClass( "active" );
					$newID.addClass("active");
				});


				$.ajaxSetup({
        			headers: {
            			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        			}
    			});
				//delete btn
				$(".deleteRecord").click(function(){
    				var id = $(this).data("id");
					var url = "vietnam/"+id;
    				$.ajax(
   				 	{	url: url,
        				type: 'DELETE',
						dataType:'json',
        				data: {
            			"id": id,
        				},
        			success: function (data){
						console.log(data.length);
						$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.choosenArea.length/64*100)+"%  của Việt Nam");
						$('[data-id="' + data.deletedid[0].areaid*10 + '"]').css('fill', '');
    				}});
				});
				//create btn
				$(".createRecord").click(function(){
    				var id = $(this).data("id");
					var url = "vietnam";
					
    				$.ajax(
   				 	{	url: url,
        				type: 'POST',
						dataType:'json',
        				data: {
            				"id": id,
        				},
        			success: function (data){
						$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.length/64*100)+"%  của Việt Nam");
						data.forEach(function(value, index){
						$('[data-id="' + value.areaid*10 + '"]').css('fill', '#FF4D00');
						});
        			}
    			});
				});
				//default area when load
				//click path
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
							<h1>{{ $vietnam->name }}</h1>							<button type="button" class="btn btn-success createRecord" data-id="{{ $vietnam->id  }}">Đã đến</button>
							<button type="button" class="btn btn-danger deleteRecord" data-id="{{ $vietnam->id  }}" >Xoá điểm đến</button>
							<p>{{ $vietnam->title }}</p>
							<div class="title-mb">
								<a href="{{ route($vietnam->id ) }}" class="">Xem thêm</a>
							</div>
							</li>
						@else
							<li id="" class="infoArea {{ $vietnam->id*10 }}">
							<h1>{{ $vietnam->name }}</h1>							<button type="button" class="btn btn-success createRecord" data-id="{{ $vietnam->id  }}">Đã đến</button>
							<button type="button" class="btn btn-danger deleteRecord" data-id="{{ $vietnam->id  }}" >Xoá điểm đến</button>
							<p>{{ $vietnam->title }}</p>
							<div class="title-mb">
								<a href="/{{ $vietnam->id  }}" class="">Xem thêm</a>
							</div>
							</li>
						@endif
					@endforeach
				</ul>

			</div>
		</div>
		<div class="col-md-6" style="background-color: #f7f2e9">
				<p id="percentage"></p>
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
		<div class="col-md-12 my-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
			<p class="text-dark">Cùng khám phá một số</p>
			<h1 class="text-dark">Địa danh nổi tiếng</h1>
		</div>
		<div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			<figure class="snip1084 red">
				<img src="/img/hanoi.jpg" alt="sample43" />
				<figcaption>
				  <h2><span>Hà Nội</span></h2>
				  <p>Thành phố Hà Nội là Thủ đô ngàn năm văn hiến với những di tích cổ xưa, cuộc sống yên bình.</p>
				</figcaption>
				<a href="/63"></a>
			  </figure></div>
			  <div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			  <figure class="snip1084 blue"><img src="/img/hochiminh.jpg" alt="sample51" />
				<figcaption>
				  <h2><span>Hồ Chí Minh</span></h2>
				  <p>Được mệnh danh là “Hòn ngọc Viễn Đông”, TP.HCM từ lâu đã là trung tâm văn hóa, kinh tế, chính trị của Việt Nam.</p>
				</figcaption>
				<a href="/66"></a>
			  </figure></div>
			  <div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			  <figure class="snip1084 yellow"><img src="/img/danang.jpeg" alt="sample49" />
				<figcaption>
				  <h2><span>Đà Nẵng</span></h2>
				  <p>Đà Nẵng còn là trung tâm của 3 di sản văn hóa thế giới là Cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. </p>
				</figcaption>
				<a href="/62"></a>
			  </figure></div>
		<div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			<figure class="snip1084 red">
				<img src="/img/camau.jpeg" alt="sample43" />
				<figcaption>
				<h2><span>Cà Mau</span></h2>
				<p>Cà Mau được biết đến là vùng đất tận cùng của Tổ quốc và luôn là điểm du lịch Miền Tây nhất định phải đến một lần trong đời của mọi người dân Việt Nam. </p>
				</figcaption>
				<a href="/50"></a>
			</figure></div>
			<div class="col-4 " data-aos="zoom-in-up" data-aos-offset="300">
			<figure class="snip1084 blue"><img src="/img/hue.jpeg" alt="sample51" />
				<figcaption>
				<h2><span>Huế</span></h2>
				<p>Huế là một trong những vùng đất du lịch nổi tiếng bởi nền văn hóa cố đô lâu đời, giàu giá trị lịch sử, có nhiều nét đẹp về văn hóa nghệ thuật, nhiều công trình kiến trúc độc đáo, cùng ẩm thực đặc sắc.</p>
				</figcaption>
				<a href="/20"></a>
			</figure></div>
			<div class="col-4" data-aos="zoom-in-up" data-aos-offset="300"> 
			<figure class="snip1084 yellow"><img src="/img/vungtau.jpg" alt="sample49" />
				<figcaption>
				<h2><span>Vũng Tàu</span></h2>
				<p>Với cát vàng biển xanh, cùng vô vàn món ngon hấp dẫn từ hải sản đến bánh khọt, một khách sạn ở Vũng Tàu hẳn là địa chỉ "đi trốn" không thể hoàn hảo hơn</p>
				</figcaption>
				<a href="/35"></a>
			</figure></div>
		</div>
	</div>
</div>
</section>
<!-------End_famousArea---------->

<section id="nonthEvent">
	<div id="fh5co-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
					<h2 class="single-animate animate-press-1">Sự kiện trong tháng 9</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2" style="margin-left: auto;margin-right: auto;">
							<h3>Tháng 9 – thời điểm giao mùa giữa hạ và thu, thời tiết dễ chịu và không khí cũng trở nên trong lành hơn hẳn. Đây sẽ là khoảng thời gian lý tưởng để bạn đi đây đi đó, khám phá đất nước Việt Nam tươi đẹp. 
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/quockhanh.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Ngày Quốc khánh Việt Nam<span class="fh5co-border"></span></h3>
							<p>Ngày Quốc khánh Việt Nam là một dịp lễ vô cùng quan trọng đối với nhân dân ta, diễn ra vào ngày 2/9 hằng năm.
							Đây là ngày kỷ niệm Chủ tịch Hồ Chí Minh đọc bản Tuyên ngôn độc lập tại Quảng trường Ba Đình, Hà Nội, khai sinh ra nước Việt Nam Dân chủ Cộng hòa, nay là nước Cộng hòa Xã hội Chủ nghĩa Việt Nam vào ngày 2/9/1945.</p>
							<p><a href="https://vi.wikipedia.org/wiki/Ng%C3%A0y_Qu%E1%BB%91c_kh%C3%A1nh_(Vi%E1%BB%87t_Nam)" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/trungthu.webp);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Tết Trung Thu<span class="fh5co-border"></span></h3>
							<p>Tết Trung thu là ngày Tết truyền thống và đặc biệt của dân tộc Việt Nam. Đây là dịp để các thành viên trong gia đình quây quần, sum vầy, cùng nhau ngắm trăng, trò chuyện, thưởng trà,rước đèn,phá cỗ,...
								Tết Trung thu được tổ chức hằng năm vào ngày 15/08 (Rằm tháng 8) âm lịch. Trung thu 2022 rơi vào thứ Bảy, ngày 10/9 dương lịch.</p>
							<p><a href="https://vi.wikipedia.org/wiki/T%E1%BA%BFt_Trung_thu" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>
				
				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/nhacnuoc.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Lễ hội nhạc nước<br>“The Fountain Festival”<span class="fh5co-border"></span></h3>
							<p>Không cần phải đến Singapore hay Dubai, lần đầu tiên người dân và du khách tại TP.HCM sẽ được tận mắt chiêm ngưỡng chuỗi sự kiện “Lễ hội Nhạc nước lớn nhất Đông Nam Á” quy mô, hoành tráng và đẳng cấp quốc tế ngay tại khu kênh đào thuộc đại đô thị The Global City, đặc biệt sự kiện sẽ diễn ra hàng tuần và bắt đầu vào đúng dịp lễ 2/9</p>
							<p><a href="https://masterisehomes.com/the-global-city/the-fountain-festival/" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/lehoiamthuc.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Lễ hội Văn hóa - Ẩm thực Việt Nam<span class="fh5co-border"></span></h3>
							<p>Lễ hội Văn hóa - Ẩm thực Việt Nam năm 2022 dự kiến sẽ diễn ra tại Khu dịch vụ du lịch Cửa Việt, tỉnh Quảng Trị từ ngày 23 - 25/9. Lễ hội góp phần tôn vinh sự đa dạng, đặc sắc của nền ẩm thực Việt Nam nói chung và ẩm thực miền Trung nói riêng trong chuỗi các hoạt động kích cầu, mở cửa lại hoạt động du lịch trong điều kiện bình thường mới</p>
							<p><a href="https://baochinhphu.vn/le-hoi-van-hoa-am-thuc-viet-nam-nam-2022-tai-quang-tri-102220906154116929.htm" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

			</div>
		</div>
	</div>
</section>

<!--------Event----------------->
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
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="/assets/js/jquery.rcounterup.js"></script>
<script src="/assets/js/active.js"></script>
<script>
	AOS.init();

</script>
<script src="/assets/dist/js/loader.js"></script>
</body>
</html>