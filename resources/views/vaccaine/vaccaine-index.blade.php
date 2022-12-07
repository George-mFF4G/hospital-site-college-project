@extends('layout')
@section('content')

<title>Vaccaine</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<style>
  body{
    background-image: url('/images/form-background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .navbar{
    font-family:'open sans',sans-serif;
    margin-bottom: 30px;
    background: #1e1e28;
    height: 90px;
  }
  .right{
    float: right;
    margin-top:-50px;
    margin-right: 400px;
  }
  .logo{
    float: left;
  }
  .logo img{
    width: 180px;
    height: 170px;
    margin-top:-50px;
    margin-left: 45px;
  } 
  .navMenu a {
    color: #f6f4e6;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 200;
    /* width: 150px; */
    padding: 10px;
  }
  
  .navMenu a:hover {
    /* color: #fddb3a; */
    background: #07abd9;
    border-radius: 10px;
  }
  .login{
        margin-bottom:65px;
        margin-right: 50px;
        margin-top:0px; 
  }
  .container{
    float: none;
  }
  .navbar-nav .nav-link{
  padding: 10px;
  border-radius: 10px;
}
.nav-link{
  background-color: #e8eff1;
  font-weight: bold;
}
.navbar-nav .dropdown-menu{
  position: absolute;
  display: inline-block;
  top:65%;
  padding: 0rem;
  text-align: center;
}
a:hover{
  border-radius: 10px;
}
.btn-login{
  color: #fff;
  font-weight: bold;
}
.table td, .table th {
  vertical-align: inherit;
}
  </style>    
    <center>
      @if(Session::has('msg')) 
          <div style="background-color: bisque; width: 20%; margin:auto; border-radius: 15px;"><h2 style="display: block;
            font-size: 1.5em;
            margin-top: 0.83em;
            margin-bottom: -1em;
            padding:8px;
            font-weight: bold;" >{{Session::get('msg')}}</h2></div>
      @endif
  </center>
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">vaccaines</h2>
                    <div class="ml-auto">
                      <a href="{{Route('vaccaine.add')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        {{-- Select --}}
                      </div>
                      <div class="col">
                        {{-- Search --}}
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr style="background-color: #cc36d1;">
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Age</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $doc)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$doc['patient_name']}}</td>
                      <td>{{$doc['phone']}}</td>
                      <td>{{$doc['age']}}</td>
                      <td>{{$doc['description']}}</td>
                      <td>{{$doc['appoint_date']}}</td>
                      <td width="150"> 
                        {{-- <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a> --}}
                        {{-- @if($doc['confirmed']==1) --}}
                            {{-- <a href="{{ Route('vaccaine.edit',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit" style="margin-left: 10px;" hidden><i class="fa fa-edit"></i></a> --}}
                        {{-- @else     --}}
                            <a href="{{ Route('vaccaine.edit',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit" style="margin-left: 10px;"><i class="fa fa-edit"></i></a>
                        {{-- @endif --}}
                        <form method="post" action="{{ Route('vaccaine.destroy',$doc['id']) }}" class="confirm" style="display: inline-block; margin:0px;">
                          @csrf
                          @method('DELETE')
                          <button style="color: red;" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?') type="submit"><i class="fa fa-times"></i></button>
                        </form>
                        <form method="post" action="{{ Route('vaccaine.confirm',$doc['id']) }}" style="display: flex; margin:5px 0px 0px 0px;">
                          @csrf
                          @method('PUT')
                          <button class="btn btn-warning" type="submit" style="padding: 0px; border:0px; width: 80px;">Tooken</button>
                            @if($doc['confirmed']==1)
                            <input class="feedback-input" name="confirm" type="checkbox" value="1" style="display: inline-block; width:20px;" checked>
                            @else
                            <input class="feedback-input" name="confirm" type="checkbox" value="1" style="display: inline-block; width:20px;">
                            @endif
                        </form>
                        {{-- <a href="{{ Route('doctors.destroy',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a> --}}
                      </td>
                    </tr>
                    @empty
                        <td colspan="8" style="text-align: center; font-size: 30px; font-weight: bold;">No Data</td>
                @endforelse

                </table> 
                {{$data->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/delete-confirm.js"></script>
@endsection