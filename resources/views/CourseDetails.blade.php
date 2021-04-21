@extends('bin/upper')
@section('css')
<style type="text/css">
	.Coursetitle{

		
	}
	.coursesection{
		background: #c9ebf0;
		padding:20px;
	}
	.row .img-fluid{
		height: 200px;
		border:2px;
		overflow:hidden;
	}
	.coursedesc{
		color: rgb(38, 50, 56);
        font-family: Roboto, sans-serif;
        font-size: 15px;
        font-weight:400;
        padding:10px;
        text-align: left;
        
	}
	.coursedesc .reviewicons{
		background:white;
		padding:5px;
	}
	.whycoursedetails{
	}
	.whycoursedetails .boxone{
		display: flex;
		justify-content: space-between;
		padding:20px;
		
	}
	.whycoursedetails .boxone p{
		font-size:12px;
		font-weight:500;
	}
	.whycoursedetails .boxone img{
		width:35px;
		height:35px;
		margin-right:10px;
	}
</style>
@endsection
@section('body')

<section class="coursesection">
	<div class="container">
		<div class="Coursetitle">
			<h4>AWS Certification Training - Solutions Architect</h4>
		</div>
		<div class="row ">
			<div class="col-md-4 col-lg-4 col-sm-5">
				<img class="img-fluid" src="{{asset('image/one.jpeg')}}">
			</div>
			<div class="col-md-8 col-lg-8 col-sm-7">
				<div class="coursedesc">
					 AWS Certification by Edureka is curated by industry professionals as per the industry requirements and demands. This AWS Training  will help you prepare for the AWS Certified Solutions Architect - Associate exam SAA-C02 With Edureka's instructor-led sessions, you will be able to effectively architect and deploy secure and robust applications using AWS. This AWS training course will help you identify the appropriate AWS service based on databases, network, storage, cost optimization, compute, and security requirements
				</div>
				<span class="reviewicons">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
            		<span class="totalreviews">96k Learner</span>
				</span>
			</div>
		</div>

		<div class="whycourse">
			<h4>Why should you take AWS Certification Training?</h4>
			<div class="whycoursedetails row">
				<div class="boxone col-sm-4">
					<img src="{{asset('image/mind.png')}} " class="img-fluid">
					<p> AWS certification is rated as one of the most popular and 
						lucrative cloud certifications in IT 
						globally - Global Knowledge Study
					</p>
				</div>
				<div class="boxone col-sm-4">
					<img src="{{asset('image/mind.png')}} " class="img-fluid">
					<p> Gartner predicts the worldwide public cloud service market will grow from $182.4B in 2018 to $331.2B in 2022, attaining a compound annual growth rate (CAGR) of 12.6% - Forbes.com
					</p>
				</div>
				<div class="boxone col-sm-4">
					<img src="{{asset('image/mind.png')}} " class="img-fluid">
					<p> The average salary for "AWS cloud solution architect" ranges from approximately $76,039 per year for Technical Specialist to $139,550 per year for Software Architect – Indeed.com
					</p>
				</div>
			</div>
		</div>
    </div>
</section>
<div class="details_title">
	<nav class="nav">
  <a class="nav-link " href="#">Upcoming Batches</a>
  <a class="nav-link" href="#">Curriculum</a>
  <a class="nav-link" href="#">Course Details</a>
  <a class="nav-link active" href="#">Certification</a>
  <a class="nav-link" href="#">Reviews</a>
  <a class="nav-link" href="#">Proects</a>
  <a class="nav-link" href="#">Features</a>
  <a class="nav-link" href="#">FAQs</a>
</nav>
</div>
@endsection