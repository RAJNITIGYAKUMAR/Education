@extends('bin/upper')
@section('js')
<script>
	$('.slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
@endsection
@section('css')
<style type="text/css">
	.title_section{
		font-size: 22px;
		font-weight:600;
		color:#4040404;
		display: inline-block;
		width:100%;
		margin:20px 0px 25px;
	}
.hovereffect{
	padding: 0;
	margin: 10px 12px 20px 10px;
	width:46%;
	}
a{
	text-decoration: none !important;
}
.hovereffect .homecard{
	width:100%;
}
.hovereffect .first-details{
	width:100%;
	position: relative;
	cursor: pointer;
	display:inline-block;
	background:white;
	outline: 0;
	box-shadow: 9px 6px 22px 0 rgb(0 0 0 / 8%);
}
.hovereffect .first-details .courseimgmain{
	display:flex;
	justify-content:center;
	align-items: center;
	height:108px;
	width:100%;
	overflow: hidden;
	position: relative;
	padding:20px 10px;
	background: linear-gradient(240deg,#fddb92,#09adef);
}
.hovereffect .first-details .course-details{
	display:inline-block;
	width: 100%;
	padding: 21px 20px 26px;

}
.hovereffect .first-details .courseimgmain .cr_title{
	display: inline-block;
	width:100%;
	font-size:16px;
	color:white;
	font-weight:bold;
	margin: 0;
	text-transform: uppercase;
	line-height:20px;
	
}
.hovereffect .first-details .course-details h3{
	display: flex;
	align-items: center;
	width: 100%;
	font-weight:600;
	margin:0px 0px 9px 0px;
	line-height: 24px;
	height:50px;
	font-size:16px;
	color:#4a4a4a;
	
}
.hovereffect .first-details .course-details .reviewtxt{
	font-size: 10px;
	font-weight:400;
	font-style: italic;
	color: #9b9b9b;
	display: inline-block;
	width:100%;
	margin-bottom:6px;
}

.hovereffect .first-details .course-details .reviewicons{
	display: inline-block;
	width:100%;
	}
	.hovereffect .first-details .course-details .reviewicons span{
	display: inline;
	margin-right:7px;
	font-size: 14px;
	}
.overlay{
	width:100%;
	height:0;
	position:absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	overflow: hidden;
	/*transition: 1s ease;*/ 
	background:rgb(13, 12, 11,0.9);

}
.hovereffect:hover >.overlay{
	height:100%;
	display: block;
	width:100%;
}
.overlay .seemorebtn{
	display: inline-block;
border:1px solid #ffffff;
width:100%;
text-align: center;
cursor: pointer;
text-transform: uppercase;
font-weight: 600;
 color:white;
 font-size:12px;
 position: absolute;
 left:10px;
 right: 10px;
 padding:9px 40px;
 background: transparent;
 bottom:20px;


}
.overlay .batchnext{
	display: inline-block;
	font-size: 15px;
	font-weight: 400;
	font-style: italic;
	color: #ffffff;
	width:100%;
	margin-bottom:4px;
	margin-top:10px;
}
</style>
@endsection
@section('body')
 


<!-- caraousel section -->
<div class="Course">
	<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> </ol>
			    <div class="carousel-inner">
			      <div class="carousel-item active">
			           <img src="{{url('image/three.jpg')}}" class="img-fluid d-block w-100" >
				        <div class="carousel-caption d-none d-md-block">
				          <h5>First slide label</h5>
				          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				        </div>
				    </div>
				       <div class="carousel-item">
				            <img src="{{url('image/two.jpg')}}" class="img-fluid d-block w-100" alt="...">
					        <div class="carousel-caption d-none d-md-block">
					          <h5>Second slide label</h5>
					          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					        </div>
				        </div>
				      <div class="carousel-item">
				           <img src="{{url('image/one.jpeg')}}" class="img-fluid d-block w-100" alt="...">
					        <div class="carousel-caption d-none d-md-block">
						          <h5>Third slide label</h5>
						          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					        </div>
				      </div>
			    </div>
			    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
		</div>
	</div>
</div>
<!-- carasouel section end -->

<!-- trending course section start-->
<section class="shadow-lg  mb-5 bg-white rounded">
	<div class="container">
		<h2 class="title_section">Trending Courses</h2>
		<div class="row slider">
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#ffaf8a,#ff6263);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#6568ff,#d879ec);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#fddb92,#09adef);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(110deg, #53a2ff, #2a387b);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#d677c0,#41bbbd);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- trending course section end -->



<!-- carrer related program -->




<section class="shadow-lg  mb-5 bg-white rounded">
	<div class="container">
		<h2 class="title_section">Carrier Releted Program</h2>
		<div class="row slider">
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#ffaf8a,#ff6263);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#6568ff,#d879ec);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#fddb92,#09adef);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(110deg, #53a2ff, #2a387b);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
			<div class="col-sm-12 p-0 hovereffect">
				<a href="#" class="homecard" >
					<div class="first-details">
						<div class="courseimgmain" style="background: linear-gradient(240deg,#d677c0,#41bbbd);">
							<h3 class="cr_title">PG Diploma Program</h3>
						</div>
							
						<div class="course-details">
							<h3 class="course-title" >
								DevOps Certification Training
							</h3>
							<span class="reviewtxt">Reviews</span>

							<div class="reviewicons">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="rating">4.7</span>
	                    		<span class="totalreviews">(36850)</span>
							</div>
						</div>
					</div>
					<div class="overlay">
						<span class="batchnext">Next</span>
						<a href="#" class="seemorebtn">view detail</a>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection