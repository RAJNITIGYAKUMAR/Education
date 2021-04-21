<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Teacher</title>
    <style type="text/css">
  body{
   
  }
  table thead{
    
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
  .table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}
.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}
.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}
.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}
</style>
  </head>
  <body>
    <div class="add">
  <a href="download" role="button" class="btn">Download PDF</a>
</div>
<div class="teachertable table-wrapper">
  <table class="table fl-table ">
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
    </tr>
   @endforeach
  
  </tbody>
</table>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>