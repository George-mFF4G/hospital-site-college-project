@extends('layout')
@section('content')

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 
// 
$row = null;
$query = "SELECT * FROM appointement";                   
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result)
?>
<title>Appointement</title>

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
                    <h2 class="mb-0">Appointements</h2>
                    <div class="ml-auto">
                      <a href="{{Route('appoint.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
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
                    <?php
                    if (mysqli_num_rows($result) > 0) {$count=1;
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['patient_name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['description']; ?></td>
                {{-- //////////////////////////////////////////////////////////////////////////// --}}
                <?php $doc_id=$row['doc_id']; 
                $address_doctor_first_name = "SELECT first_name FROM doctors WHERE id=$doc_id";
                $address_doctor_last_name = "SELECT last_name FROM doctors WHERE id=$doc_id";
                $result_doctor_first_name = mysqli_query($conn, $address_doctor_first_name);
                $result_doctor_last_name = mysqli_query($conn, $address_doctor_last_name);
                $row_doctor_first_name = mysqli_fetch_assoc($result_doctor_first_name)
                $row_doctor_last_name = mysqli_fetch_assoc($result_doctor_last_name)
                ?>
<td><?php echo $row_doctor_first_name['first_name']+""+$row_doctor_last_name['last_name']; ?></td>
{{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}
                <td><?php echo $row['appointement_date']; ?></td>
                <td> 
                  <form style="margin:auto" method="post" action="{{ Route('appoint.delete',$row['id']) }}" class='confirm'>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit" style="width: 95px;">Delete</button>
                  </form>
                </td>
                        
            </tr><?php }}?>

                </table> 

                {{-- <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav> --}}
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