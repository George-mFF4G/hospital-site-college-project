<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta description="this website is for traning" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team</title>
    <!-- styles -->
    <link rel="stylesheet" href="css/all2.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<style>
    .header a:hover {
    background: #07abd9;
    border-radius: 10px;
  }
</style>  
</head>
  <body>
    <!-- start header -->
    <div class="header" id="header">
      <div class="container">
        <a href="#" class="logo"><img src="images/logo.gif" style="width: 190px; height:170px;"></a>
        <ul class="main-nav">
          <li><a href="{{url('http://127.0.0.1:8000/')}}">Home</a></li>
          <li><a href="{{route('appoint.create')}}">Appointment Booking</a></li>
          @auth
          <li><a href="{{url('http://127.0.0.1:8000/patients')}}">Our Patients</a></li>
          <li><a href="{{Route('doctors.index')}}">Our Doctors</a></li>
          @endauth
          <li><a href="{{url('http://127.0.0.1:8000/team')}}">About Us</a></li>
          <li><a href="{{url('http://127.0.0.1:8000/covid')}}">Covid-19</a></li>
          {{-- <li>
            <a href="#">other-links</a>
            <!-- start mega menu -->
            <div class="mega-menu">
              <div class="image">
                <img src="imgs/megamenu.png" alt="megamenu" />
              </div>
              <ul class="links">
                <li>
                  <a href="#testimonials"
                    ><i class="far fa-comments fa-fw"></i> testimonials</a
                  >
                </li>
                <li>
                  <a href="#team"
                    ><i class="far fa-user fa-fw"></i> team members</a
                  >
                </li>
                <li>
                  <a href="#services"
                    ><i class="far fa-building fa-fw"></i> services</a
                  >
                </li>
                <li>
                  <a href="#skills"
                    ><i class="far fa-check-circle fa-fw"></i> our skills</a
                  >
                </li>
              </ul>
              <!-- second ul -->
              <ul class="links">
                <li>
                  <a href="#pricing"
                    ><i class="fas fa-server fa-fw"></i> pricing plans</a
                  >
                </li>
                <li>
                  <a href="#discount"
                    ><i class="fas fa-percent fa-fw"></i> request a discount</a
                  >
                </li>
              </ul>
            </div>
            <!-- end mega menu -->
          </li> --}}
        </ul>
      </div>
    </div>
    <!-- end header -->
    <!-- start team -->
    <div class="team" id="team">
      <h2 class="main-title">Departments</h2>
      <div class="container">
        <div class="box">
          <div class="data">
            <img src="images/heart3.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>Thoracic and open heart surgery</h3>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/emergency.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>Emergencies and operations</h3>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/lab2.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>Laboratories and analyzes</h3>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/intensive-care.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>Intensive care</h3>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/xray.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>x_ray place</h3>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/bones.jpg" alt="dept-01" />
          </div>
          <div class="info">
            <h3>Bones</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- end team -->
    <!-- start testimonials -->
    <div class="testimonials" id="testimonials">
      <h2 class="main-title">Our Doctors</h2>
      <div class="container">
        @foreach ($data as $val)
        <div class="box">
          {{-- <img src="imgs/avatar-01.png" alt="avatar-01" /> --}}
          <h3 style="background-color: burlywood; padding: 10px; text-align:center; border-radius:5px;">{{$val->first_name}} {{$val->last_name}}</h3>
          <span class="title">Specialization</span>
          <p>
            {{$val->specalist}}
          </p>
          <span class="title">Career Info</span>
          <p>
            Lorem ipsum dolor sit amet consectetur.
          </p>
          {{-- <span class="title">Phone</span>
          <p>
            {{$val->phone}}
          </p> --}}
        </div>
        @endforeach
        <!-- box 2 -->
          {{$data->links()}}
      </div>
    </div>
    <!-- end testimonials -->
  </body>
</html>
