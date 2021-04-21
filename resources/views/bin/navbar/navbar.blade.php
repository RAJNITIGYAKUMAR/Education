

<div class="header sticky-top">  

  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h3>Education</h3></a>
      </div>
    
    <div class="search_header d-flex">
      <input type="text" name="search">
      <button><i class="fa fa-search"></i></button>
    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ml-auto ">
       <li class="nav-item">
        <a class="nav-link" href="#">Corporatae Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Course">Courses</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      @if(!Session()->has('user'))
       <li class="nav-item">
        <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSignup">Signup</a>
      </li>
      @else
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dashboard
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="dashboard">Dashboard</a>
            <a class="dropdown-item" href="Logout">Logout</a>
          </div>
        </div>
      </li>
      @endif
    </ul>
    </div>
  </nav>
</div>

<!-- Login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
<img class="lazyImages" style="min-height: 5px;" width="35" height="35" fullbase="true" alt="" src="https://d1jnx9ba8s6j9r.cloudfront.net/imgver.1616755020/img/elearningpop.svg">
        <h5 class="modal-title" id="exampleModalLongTitle">
             Lets Get Started</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="loginform">
    <form action="logindata" method="post">
    @csrf
    <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="forgotpassword">
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
            <a href="#">Forgot Password? </a>
          </div>
         </div>
    <div class="submit">
      <input type="submit" value="SIGN IN">
    </div>    
  </form>
    <div class="forgot">
    <p class="m-3">Don't have an account? <a href="#"> Sign Up </a></p>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>

<!-- signup Modal -->
<div class="modal fade" id="ModalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img class="lazyImages" style="min-height: 5px;" width="35" height="35" fullbase="true" alt="" src="https://d1jnx9ba8s6j9r.cloudfront.net/imgver.1616755020/img/elearningpop.svg">
        <h5 class="modal-title" id="exampleModalLongTitle">Lets Get Started</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="loginform">
    <form method="post" action="/registerdata">
      @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="name" name="name"class="form-control" id="name" placeholder="" required="">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email"  class="form-control" id="email" placeholder="" required="">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="" required="">
         </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Mobilenumber" required="">
         </div>    
        <div class="conditiontxt">
          <p>Please Note: By continuing and signing up, you agree to Education's<strong> Terms & Conditions and Privacy Policy.</strong></p>
        </div>
        <div class="submit">
          <input type="submit" value="Signup">
        </div>    
  </form>
    <div class="forgot">
    <p>Already have an account? <a href="Signup">Login </a></p>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>