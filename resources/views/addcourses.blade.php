@extends('dash')
@section('css')
<style type="text/css">
  .addcourse{
    margin-left:200px;
    background:#cee2ed;
  }
 .addcourseform{
  display: flex;
  justify-content: center;
  
 }
 form{
  width:400px;
  padding:10px 30px;
 }
 .submit{
  display: flex;
  flex-direction: row-reverse;
  padding:0px 50px;
  

 }
 .submit input{
  font-size:14px;
  border:none;
  outline:none;
  color:#fff;
  padding:8px 20px;
  background:#f23d3d;
  outline:none;
   }
 .addcourse h3{
    padding:20px;
    background:#9ff5a9;
  }
  .form-group label{
    color:#d62f61;
    font-size:16px;
    font-weight:600;
  }
</style>
@endsection
@section('main-content')
  <div class="addcourse">
  <h3>ADD New Course</h3>
  <div class="addcourseform">
         <form action="addcourses" method="post">
    @csrf
    <div class="form-group">
          <label for="name">Course Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter Course Name" required="">
      </div>
      <div class="form-group">
          <label for="desc">Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
          <label for="category">Category</label>
          <input type="category" name="category" class="form-control" id="category" placeholder="Enter Course Category" required="">
      </div>
      <div class="form-group">
          <label for="language">language</label>
          <input type="language" name="language" class="form-control" id="language" placeholder="Course Language" required="">
      </div>
      <div class="form-group">
          <label for="fee">fee</label>
          <input type="fee" name="fee" class="form-control" id="fee" placeholder="Course Fee" required="">
      </div>
    <div class="submit">
      <input type="submit" value="Add">
    </div>    
  </form>
  </div>
</div>
@endsection