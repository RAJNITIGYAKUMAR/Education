@extends('dash')
@section('css')
<style type="text/css">
  .dashboard{
    margin-left:200px;
    display: flex;
    justify-content: center;
    padding:50px;
  }
  .card{
  	height:250px;
    text-align: center;
  }
  .dashsection{
    margin-left:200px;
  }
</style>
@endsection
@section('main-content')
<section class="dashsection">
  <div class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <h5>Student</h5>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="card">
          <h5>Teacher</h5>
          <p>{{$teacher}}</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <h5>Course</h5>
          <p>{{$course}}</p>
        </div>
      </div>
    </div>
  </div>

</div>
  <div>
    <canvas id="myChart" role="img" aria-label="chart"></canvas>
  </div>
</section>



@endsection

