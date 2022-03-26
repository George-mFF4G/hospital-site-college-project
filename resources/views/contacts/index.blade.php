@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Our Patients</title>

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
      </style>
  </head>
  <body>
    <!-- navbar -->
    {{-- <div class="navbar">
      <div class="logo">
        <img src="/images/logo.gif" alt="">
      </div>
      <div class="right">
          <nav class="navMenu">
            <a href="{{url('http://127.0.0.1:8000/')}}">Home</a>
            <a href="{{url('http://127.0.0.1:8000/patients')}}">Our Patients</a>
            <a href="{{Route('doctors.index')}}">Our Doctors</a>
            <a href="{{url('http://127.0.0.1:8000/appoint')}}">Appointment Booking</a>
            <a href="{{url('http://127.0.0.1:8000/covid')}}">Covid 19</a>
            <div class="dot"></div>
          </nav>
      </div>
    </div> --}}
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
                    <h2 class="mb-0">All Patients</h2>
                    <div class="ml-auto">
                      <a href="{{route('contacts.create')}} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        {{-- <select class="custom-select">
                          <option value="" selected>All Departments</option>
                          <option value="Thoracic and open heart surgery">Thoracic and open heart surgery</option>
                          <option value="Emergencies and operations">Emergencies and operations</option>
                          <option value="Laboratories and analyzes">Laboratories and analyzes</option>
                          <option value="Intensive care">Intensive care</option>
                          <option value="x_ray place">x_ray place</option>
                          <option value="Bones">Bones</option>
                        </select> --}}
                      </div>
                      {{-- <div class="col">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button">
                                  <i class="fa fa-refresh"></i>
                                </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr style="background-color: rgb(238, 86, 243)">
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Address</th>
                      <th scope="col">Age</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                      <th scope="col">Doctor</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($contacts->count())
                    @foreach($contacts as $index => $contact)
                    <tr>
                      <th scope="row">{{$index+$contacts->firstItem()}}</th>
                      <td>{{$contact->first_name}}</td>
                      <td>{{$contact->last_name}}</td>
                      <td>{{$contact->phone}}</td>
                      <td>{{$contact->address}}</td>
                      <td>{{$contact->age}}</td>
                      <td>{{$contact->description}}</td>
                      <td></td>
                      <td width="150"> 
                        {{-- <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('contacts.edit',$contact->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <form method="post" action="{{route('contacts.destroy',$contact->id)}}" class="confirm" style="display: inline-block; margin:0px;">
                          @csrf
                          @method('DELETE')
                          <button style="color: red;" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?') type="submit"><i class="fa fa-times"></i></button>
                      </form>
                        {{-- <a href="{{ Route('doctors.destroy',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a> --}}
                      </td>
                    </tr>
                    @endforeach
                    @else
                        <td colspan="8" style="text-align: center; font-size: 30px; font-weight: bold;">No Data</td>
                    @endif    
                  </tbody>
                </table> 
                <div class="paginate">
                  {{$contacts->links()}}
                    
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/delete-confirm.js"></script>
  </body>
</html>

@endsection