@extends('layout')
@section('content')

    <title>Doctors</title>
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
   
    <center>
        
            <div style="background-color: bisque; width: 20%; margin:auto; border-radius: 15px;"><h2 style="display: block;
              font-size: 1.5em;
              margin-top: 0.83em;
              margin-bottom: -1em;
              padding:8px;
              font-weight: bold;" >Founded Result...</h2></div>
      
    </center>
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Doctors</h2>
                    <div class="ml-auto">
                      <a href="{{Route('doctors.add')}} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
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
                      <th scope="col">Age</th>
                      <th scope="col">Address</th>
                      <th scope="col">Speciality</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @forelse ($filteredusers as $doc)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$doc['first_name']}}</td>
                      <td>{{$doc['last_name']}}</td>
                      <td>{{$doc['phone']}}</td>
                      <td>{{$doc['age']}}</td>
                      <td>{{$doc['address']}}</td>
                      <td>{{$doc['specalist']}}</td>
                      <td width="150"> 
                        {{-- <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ Route('doctors.edit',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <form method="post" action="{{ Route('doctors.destroy',$doc['id']) }}" class="confirm" style="display: inline-block; margin:0px;">
                          @csrf
                          @method('DELETE')
                          <button style="color: red;" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?') type="submit"><i class="fa fa-times"></i></button>
                      </form>
                        {{-- <a href="{{ Route('doctors.destroy',$doc['id']) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a> --}}
                      </td>
                    </tr>
                    @empty
                        <td colspan="8" style="text-align: center; font-size: 30px; font-weight: bold;">No Data</td>
                @endforelse    
                  </tbody>
                </table> 

                <div class="paginate">
                  {{-- {{$filteredusers->links()}} --}}
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

@endsection