<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Nhật Bản</title>
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
    <script src="/js/nhatbanmap.js" charset="utf-8"></script>
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
                    name: "nhatbans",
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
					@foreach ($nhatbans as $nhatban )
					"{{ $nhatban->id*10 }}": {
                        tooltip: {content: "<span style=\"font-weight:bold;\">{{ $nhatban->name }}</span><br />Diện tích : {{ number_format($nhatban->area,0, ',', ',') }}km2<br />Dân số : {{ number_format($nhatban->population,0, ',', ',') }}"}
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
		url:"{{ route('choosenjp') }}",
		method:'GET',
		dataType:'json',
		success:function(data)
		{	$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.length/47*100)+"%  của Nhật Bản");
			
			data.forEach(function(value, index){
				$('[data-id="' + value.areaid*10 + '"]').css('fill', '#FF4D00');
			// console.log(data[1].areaid*10);
			// $('[data-id="' + data[1].areaid*10 + '"]').css('fill', '#FF4D00');
		});
		}
		});
 		function fetch_customer_data(query = '')
 		{
			$.ajax({
            url:"{{ route('actionjp') }}",
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
	<link href="/css/loader.css" rel="stylesheet">
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
	  <a class="navbar-brand" href="#"><img src="/img/CultureTravel.png"></a>
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
<section id="slider"  style=" background: url('/img/mount5.jpg') rgba(64, 64, 64, 0.65);background-size: cover; background-blend-mode: multiply;">
	<div class="slider container-fluid">
		<div class="d-flex slider_center align-items-center justify-content-center flex-column">
			<div class="p-2"><h1>Nhật Bản</h1></div>
			<div class="p-2 m-2"><span class="yellowInRight"><a href="{{ url('/home') }}">Trang chủ</a></span>Nhật Bản</div>
		  </div>
	</div>
</section>
<!-----------StartAbout------->
<section id="about">
	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-md-4 aboutLeft pl-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">
				<p>Ohayo</p>
				<h1>Nhật Bản</h1>
				<div id="test"></div>
			</div>
			<div class="col-md-8 aboutRight pr-3">
				<h2 data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" >"Xứ sở Hoa Anh Đào - Đất nước Mặt Trời Mọc"</h2>
				<div style="text-align: justify;"  >
					<p data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">Nhật Bản – Đất nước mặt trời mọc không chỉ nổi tiếng với hoa Anh Đào, núi Phú Sĩ mà còn là cái nôi của một nền văn hóa đặc sắc, đa dạng với những con người thân thiện, hiếu khách và nền khoa học tiên tiến.</p>
					<p data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">Nhật Bản theo tiếng Hán có nghĩ là “Mặt trời – 日本”, cho nên nước Nhật mới được gọi là đất nước mặt trời mọc. Với diện tích 377.972,28 km2 (xếp hạng 62 thế giới), trải dài từ bờ biển Okhotsk ở phía Bắc đến phía Nam biển Đông Hải của Trung Quốc. Phía Đông giáp với Hàn Quốc và Nga đã tạo cho Nhật Bản một địa thế giao thương thuận lợi. Đặc biệt, Nhật bản còn là đất nước có nhiều đảo nhất thế giới với gần 7.000 hòn đảo, trong đó có 5 đảo lớn nhất và có nhiều người sinh sống nhất là Honshu, Hokkaido, Kyushu, Shikoku và Okinawa.</p>
					<p data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">Do nằm trên vành đai Thái Bình Dương, nên khí hậu Nhật Bản thuộc vùng ôn đới, với 4 mùa rõ rệt và thiên nhiên tươi đẹp, cây cối màu mỡ, xanh tốt, thực vật phong phú và đa dạng. Bởi thế mà không phải tự nhiên Nhật Bản được xếp vào Top 10 những đất nước đẹp nhất thế giới.</p>
						<p data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
						Thế nhưng, cũng chính vì địa thế này mà mỗi năm Nhật Bản phải hứng chịu hàng trăm trận động đất, núi lửa phun trào và sóng thần lớn nhỏ. Vì những thiên tai này mà đất nước Nhật Bản đã tưởng như bị xóa sổ khỏi bản đồ. Nhưng với ý chí kiên cường, mạnh mẽ và quyết tâm, người dân đất nước này đã chung tay xây dựng và giữ vững quê hương của mình.</p></div>
			</div>
            <div class="d-flex midImage justify-content-center">
				<div class="blockImage">
            		<img src="/img/mount2.jpg" alt="">
           		</div>
			</div>
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
							<div class="elementor-counter-description">Dân số hiện tại của Nhật Bản</div>
								<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">125,468,876</span><br>
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
							<span class="count-num">364,571</span> <br>
							<span class="elementor-counter-number-suffix">km2</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="elementor-counter">
					<div class="elementor-counter-wrapper">
						<div class="elementor-counter-title-wrap">
							<div class="elementor-counter-description">Mật độ dân số của Nhật Bản</div>
							<span class="heading-decor"></span>
						</div>
						<div class="elementor-counter-number-wrapper">
							<span class="elementor-counter-number-prefix"></span>
							<span class="count-num">344</span><br>
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
					Văn hóa truyền thống Nhật Bản
				</h1>
			</div>
			<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 title-mb aos-init aos-animate">
				<p>Nhắc đến Nhật Bản, người ta thường nói đến một siêu cường quốc trong thời kỳ hội nhập với nền kinh tế, công nghệ hiện đại hàng đầu. Bên cạnh đó, người ta cũng không thể không nhắc đến một quốc gia Á Đông với nền văn hóa truyền thống đậm đà và giàu bản sắc. Không chỉ mang nét đẹp và đặc trưng riêng, Nhật Bản cũng là quốc gia có sự thống nhất về văn hóa. Nơi đây được bao quanh bởi biển đảo và chưa hề có cuộc chiến tranh xâm lược nào nên không có văn hóa du nhập.</p>
				<p>Những nét văn hóa này được thể hiện qua những lễ hội, nghi lễ hay phong tục tập quán, và trong cả chính cuộc sống hàng ngày của người dân quốc gia này, trở thành một nét đẹp, một “món ăn’ tinh thần.</p>
				<h1>︾</h1>
			</div>
			<div data-aos="zoom-in-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 img-mb aos-init aos-animate">
				<img class="img-fluid mb1" src="/img/mount5.jpg" alt="" srcset="">
				<img class="img-fluid mb2" src="/img/mount7.jpg" alt="" srcset="">
				<img class="img-fluid mb3" src="/img/mount3.jpg" alt="" srcset="">

			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 best-dd">
				<h1 data-aos="zoom-in-left" class="aos-init">
					Nét đẹp văn hóa truyền thống Nhật Bản
				</h1>
				<div class="row fix-center">
					<div style="margin-top: 20px;" class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('aojp')}}">
								<img src="/img/aojp.jpg" class="img-fluid css-img-best-mb" alt="" srcset="">
								<div class="text-best-mb">
									<p class="css-text-best-mb">Trang phục truyền thống</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('lehoijp')}}">
								<img src="/img/lehoijp.jpeg" class="img-fluid css-img-best-mb" alt="" srcset="">
								<div class="text-best-mb">
									<p class="css-text-best-mb">Ngày lễ truyền thống</p>
								</div>
							</a>
						</div>
					</div>
					<div style="margin-top: 20px;" class="col-xl-4 col-lg-4 col-md-4">
						<div data-aos="zoom-in-up" class="img-best-mb aos-init">
							<a href="{{ route('tongiaojp')}}">
								<img src="/img/mount3.jpg" class="img-fluid css-img-best-mb" alt="" srcset="">
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
					<h1 class="text-dark">Bản đồ Nhật Bản</h1>
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
				
				$.ajaxSetup({
        			headers: {
            			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        			}
    			});
				//delete btn
				$(".deleteRecord").click(function(){
    				var id = $(this).data("id");
					var url = "nhatban/"+id;
    			$.ajax(
   				 {
       				url: url,
        			type: 'DELETE',
					dataType:'json',
        			data: {
            			"id": id,
        			},
        		success: function (data){
					console.log(data.length);
					$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.choosenArea.length/47*100)+"%  của Nhật Bản");
					$('[data-id="' + data.deletedid[0].areaid*10 + '"]').css('fill', '');
    			}});
   
				});
				//create btn
				$(".createRecord").click(function(){
    				var id = $(this).data("id");
					var url = "nhatban";
					
    			$.ajax(
   				 {
       				url: url,
        			type: 'POST',
					dataType:'json',
        			data: {
            			"id": id,
				
        			},
        		success: function (data){
					$('#percentage').html("Chúc mừng bạn đã đi được " + Math.round(data.length/47*100)+"%  của Nhật Bản");
            		data.forEach(function(value, index){
				$('[data-id="' + value.areaid*10 + '"]').css('fill', '#FF4D00');
				});
        		}
    			});
   
				});
				//default area when load
				//click path
				$('[data-id="1060"]').addClass( "active" );

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
					@foreach ($nhatbans as $nhatban )
						@if ($nhatban->id === 106)
							<li id="" class="infoArea {{ $nhatban->id*10 }} active">
							<h1>{{ $nhatban->name }}</h1>							<button type="button" class="btn btn-success createRecord" data-id="{{ $nhatban->id  }}">Đã đến</button>
							<button type="button" class="btn btn-danger deleteRecord" data-id="{{ $nhatban->id  }}" >Xoá điểm đến</button>
							<p>{{ $nhatban->title }}</p>
							<div class="title-mb">
								<a href="{{ route($nhatban->id ) }}" class="">Xem thêm</a>
							</div>
							</li>
						@else
							<li id="" class="infoArea {{ $nhatban->id*10 }}">
							<h1>{{ $nhatban->name }}</h1>							<button type="button" class="btn btn-success createRecord" data-id="{{ $nhatban->id  }}">Đã đến</button>
							<button type="button" class="btn btn-danger deleteRecord" data-id="{{ $nhatban->id  }}" >Xoá điểm đến</button>
							<p>{{ $nhatban->title }}</p>
							<div class="title-mb">
								<a href="/{{ $nhatban->id }}" class="">Xem thêm</a>
							</div>
							</li>
						@endif
					@endforeach
				</ul>
<script>

$(document).ready(function () {
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


	$(".areaBtn").on("click",function(){

	var classID = $(this).attr("data-id").toString();

	$("path").removeClass( "active" );
	$(".infoArea").removeClass( "active" );

	
});
});
				
</script>
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
				<img src="/img/tokyo.jpg" alt="sample43" />
				<figcaption>
				  <h2><span>Tokyo</span></h2>
				  <p>Thủ đô Tokyo không chỉ là trung tâm kinh tế của nước Nhật mà còn có sự giao thoa hài hòa về văn hóa giữa nét hiện đại và truyền thống tạo nên vẻ đẹp đặc biệt của nó trong mắt du khách quốc tế</p>
				</figcaption>
				<a href="/106"></a>
			  </figure></div>
			  <div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			  <figure class="snip1084 blue"><img src="/img/hokkaido.jpg" alt="sample51" />
				<figcaption>
				  <h2><span>Hokkaido</span></h2>
				  <p>Cảnh sắc thiên nhiên ở Hokkaido đẹp tựa như một bức tranh khiến cho những ai khi nhìn thấy đều không khỏi ngẩn ngơ.</p>
				</figcaption>
				<a href="/78"></a>
			  </figure></div>
			  <div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
			  <figure class="snip1084 yellow"><img src="/img/kyoto.jpg" alt="sample49" />
				<figcaption>
				  <h2><span>Kyoto</span></h2>
				  <p>Kyoto là thành phố vẫn còn lưu lại các công trình kiến trúc và văn hoá từ xa xưa của Nhật Bản. </p>
				</figcaption>
				<a href="/88"></a>
			  </figure></div>
		<div class="col-4" data-aos="zoom-in-up" data-aos-offset="300">
	<figure class="snip1084 red">
		<img src="/img/nara.jpg" alt="sample43" />
		<figcaption>
		  <h2><span>Nara</span></h2>
		  <p>tỉnh Nara có những dãy núi rợp bóng cây, những đền chùa được công nhận là Di sản thế giới, quang cảnh thiên nhiên tuyệt diệu khi nhìn từ trên cao, những khu phố cổ kính không dành cho xe hơi và nhiều điều hấp dẫn khác.</p>
		</figcaption>
		<a href="/94"></a>
	  </figure></div>
	  <div class="col-4 " data-aos="zoom-in-up" data-aos-offset="300">
	  <figure class="snip1084 blue"><img src="/img/osaka.jpg" alt="sample51" />
		<figcaption>
		  <h2><span>Osaka</span></h2>
		  <p>Osaka là một thành phố sôi động, người dân cực kỳ thân thiện vui vẻ, là một địa điểm du lịch không thể bỏ qua khi bạn tới Nhậ</p>
		</figcaption>
		<a href="/97"></a>
	  </figure></div>
	  <div class="col-4" data-aos="zoom-in-up" data-aos-offset="300"> 
	  <figure class="snip1084 yellow"><img src="/img/okinawa.jpg" alt="sample49" />
		<figcaption>
		  <h2><span>Okinawa</span></h2>
		  <p>Nước biển màu xanh ngọc hòa lẫn với những dải cát trắng biến nơi đây thành thiên đường nghỉ mát của không chỉ người Nhật mà còn của nhiều du khách nước ngoài khi đến Nhật Bản.</p>
		</figcaption>
		<a href="/96"></a>
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
							<h3>Tháng 9 – thời điểm giao mùa giữa hạ và thu, thời tiết dễ chịu và không khí cũng trở nên trong lành hơn hẳn. Đây sẽ là khoảng thời gian lý tưởng để bạn đi đây đi đó, khám phá đất nước Nhật Bản tươi đẹp. 
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/eventjp2.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"> Lễ hội pháo hoa mùa thu Katagai<span class="fh5co-border"></span></h3>
							<p>Lễ hội pháo hoa – Lễ hội Katagai được tổ chức vào tháng 9 hàng năm tại thị trấn Katagai, thành phố Ojiya, tỉnh Niigata. Pháo hoa Shosanshakudama trứ danh được biểu diễn tổng cộng 4 lần, mang đến cho khán giả màn trình diễn pháo hoa hoành tráng và đẹp mắt, không hổ danh là một trong ba lễ hội pháo hoa hoành tráng nhất Nhật Bản.</p>
							<p><a href="https://katakaimachi-enkakyokai.info/" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/eventjp1.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Lễ hội cỏ san hô hồ Notoro<span class="fh5co-border"></span></h3>
							<p>Cỏ san hô hồ Notoro ở thành phố Abashiri, Hokkaido là quần thể cỏ san hô lớn nhất ở Nhật Bản. Thời gian tốt nhất để ngắm lá cỏ đổi màu là từ giữa tháng 9 đến cuối tháng 9.

								Vào tháng 9, “Lễ hội cỏ san hô hồ Notoro” được tổ chức tại khu vực Ubaranai, nơi bạn có thể thưởng thức ca hát, nhảy múa và các sự kiện khác trong khi thưởng ngoạn quang cảnh ngoạn mục.</p>
							<p><a href="https://en.visit-hokkaido.jp/destinations/lake-notoro-coral-grass" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>
				
				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/eventjp3.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"> Lễ hội Owara Kaze no Bon<span class="fh5co-border"></span></h3>
							<p>Owara Kaze no Bon được tổ chức từ ngày 1 đến ngày 3 tháng 9 hàng năm. Đây là một sự kiện hát dân ca được tổ chức trong ba ngày ba đêm tại Yatsuomachi, thành phố Toyama, tỉnh Toyama và toàn bộ thị trấn trở thành địa điểm tổ chức. Một điểm không thể bỏ qua là thị trấn Nagashi, nơi các vũ công diễu hành khắp thị trấn theo giai điệu của buổi biểu diễn!</p>
							<p><a href="https://www.info-toyama.com/events/10012" class="btn btn-primary btn-sm">Xem thêm</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6" data-aos="zoom-in-up" data-aos-offset="300">
					<!-- Press Item -->
					<div class="fh5co-press-item to-animate">
						<div class="fh5co-press-img" style="background-image: url(/img/eventjp4.jpeg);background-position:50% 50%;">
						</div>
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title">Lễ hội bia Đức Oktoberfest<span class="fh5co-border"></span></h3>
							<p>Oktoberfest, lễ hội bia số một thế giới, được tổ chức tại Munich, Đức hàng năm từ tháng 9 đến tháng 10. Bạn sẽ có cơ hội thưởng thức nhiều loại bia Đức khác nhau, chẳng hạn như bia trắng vị chuối và bia đen có vị đắng! Đĩa xúc xích, dưa cải muối và các món ngon khác của Đức rất hợp với bia. Bạn có thể tận hưởng cảm giác như đang đi du lịch Đức ngay giữa lòng Tokyo.</p>
							<p><a href="https://www.oktober-fest.jp/" class="btn btn-primary btn-sm">Xem thêm</a></p>
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