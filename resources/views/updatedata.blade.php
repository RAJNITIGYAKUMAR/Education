@extends('dash')
@section('css')
<style type="text/css">
  .addteacher{
    margin-left:200px;
    background:#cee2ed;
  }

  .addteacher h3{
    padding:20px;
    background:#9ff5a9;
  }
  .addteacherform{
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
    .form-group label{
    color:#d62f61;
    font-size:16px;
    font-weight:600;
  }
</style>
@endsection
@section('main-content')
<div class="addteacher">
  <h3>Update Data</h3>
     <div class="addteacherform">
       <form action="../update" method="post">
    @csrf
    <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$item['name']}}" placeholder="Enter Your Name" required="">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="{{$item['email']}}" id="email" placeholder="Enter Your Email"required="">
        </div>
      <div class="form-group">
          <label for="education">Education</label>
          <input type="text" name="education" class="form-control" value="{{$item['Education']}}" id="education" placeholder="Enter Your last Education"required="">
        </div>
        <div class="form-group">
          <label for="salary">Salary</label>
          <input type="text" name="salary" class="form-control" value="{{$item['Salary']}}" id="salary" placeholder="Enter Your Salary" required="">
        </div>
        <div class="form-group">
          <label for="mobile">Mobile</label>
          <input type="text" name="mobile" class="form-control" value="{{$item['Mobile']}}"  id="mobile" placeholder="Enter Your Contact Number" required="">
        </div>
        <div class="form-group">
          <label for="DOB">DOB</label>
          <input type="date" name="DOB" class="form-control" id="DOB" value="{{$item['DOB']}}"  placeholder="Enter  Date of Birth" required="">
        </div>
        <div class="form-group">
          <label for="DOJ">DOJ</label>
          <input type="date" name="DOJ" class="form-control" value="{{$item['DOJ']}}" id="DOJ" placeholder="Enter Date Of joining" required="">
        </div>
    <div class="submit ">
      <input type="submit" value="Update">
    </div>    
  </form>
     </div>
</div>
@endsection