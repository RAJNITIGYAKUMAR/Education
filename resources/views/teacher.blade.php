@extends('dash')
@section('css')
<style type="text/css">
  .teachertable{
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
    display:flex;
    justify-content:space-between;
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
<div class="add">
  <a href="addteacher" role="button" class="btn">Add Teacher</a>
  <a href="download" role="button" class="btn">Download PDF</a>
</div>
<div class="teachertable">
  <table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Education</th>
      <th scope="col">Mobile</th>
      <th scope="col">Salary</th>
      <th scope="col">DOB</th>
      <th scope="col">DOJ</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teacher as $item)
    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['Education']}}</td>
      <td>{{$item['Mobile']}}</td>
      <td>{{$item['Salary']}}</td>
      <td>{{$item['DOB']}}</td>
      <td>{{$item['DOJ']}}</td>
      <td>
        <a href="edit/{{$item['id']}}">Edit</a>
        <a href="del/{{$item['id']}}">Delete</a>
      </td>
    </tr>
   @endforeach
  
  </tbody>
</table>
</div>
@endsection