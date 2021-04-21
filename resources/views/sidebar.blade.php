<div class="sidebar">
	<div class="sidebar-header">
		<h5 class="text-dark">LOGO</h5>
	</div>
	<div class="nameicon">
		
		<a href="dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
	</div>

	<div class="theme">
		<div class="nameicon">
			<a href="/"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
		</div>
		<div class="nameicon">
			<a href="student"><i class="fas fa-user-tie"></i>Student</a>
		</div>
		<div class="nameicon">
			<a href="teacher"><i class="fas fa-chalkboard-teacher"></i>Teachers</a>
		</div>
		<div class="nameicon">
			<a href="courses"><i class="fas fa-book-open"></i>Courses</a>
		</div>				
	</div>
</div>
<style type="text/css">

	.sidebar{
		width:200px;
		height:100vh;
		background:#075446;
		position:fixed;
		color:#fff;

	}

	.sidebar-header{
		display:flex;
		justify-content: center;
		align-items: center;
		height:60px;
		background:#49c4ae;
	}
	
	.nameicon a{
		font-size: 14px;
		display:block;
		padding:10px ;	
		color:#fff;
		text-decoration: none;
		margin:5px 0px;
	}
	.nameicon a i{
		
		padding:5px 15px;
	}
	.nameicon a:hover{
		background:blue;		
		text-decoration: none;
	}

	.component-icon{
		border:2px solid red;
		padding:10px 20px;
	}
	.component-icon:hover{
		background:blue;
		color:#fff;
		text-decoration:none;
	}
</style>