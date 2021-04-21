@extends('dash')
@section('css')
<style type="text/css">
  .coursetable{
    margin-left:200px;
    overflow-x:auto;
  }
    table thead{
    background:#7d6414;
    color: white;
    font-size:15px;
  }
  .add{
    margin-left:200px;
  }
   .add a{
    background:#1b1e1f;
    padding:5px;
    color:white;
    font-size:16px;
    font-weight:600;
  }
  .add a:hover{
    background:green;
  }
</style>
@endsection
@section('main-content')
<section class="courses">
  <div class="add">
  <a href="addcourses" role="button" class="btn">Add Course</a>
</div>
<div class="coursetable">
  <table class="table table-bordered ">
  <thead >
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">fee</th>
      <th scope="col">language</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($course as $item)
    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['category']}}</td>
      <td>{{$item['description']}}</td>
      <td>{{$item['price']}}</td>
      <td>{{$item['language']}}</td>
      <td>
        <a href="edit">Edit</a>
        <a href="del">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</section>
@endsection