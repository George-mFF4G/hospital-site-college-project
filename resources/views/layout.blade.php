
<!DOCTYPE html>
<html lang="en">
    <head>
<!--   for english and arabic     -->
        <meta charset="utf-8">
<!--      description  -->
        <meta name="description" content=" Hospital  serve the wide-ranging needs of the community,
        as well as emergency, psychiatric, and rehabilitation services. In addition,
        provide strictly ambulatory (outpatient) care and day surgery.">
<!--      title  -->
        <title>  Hospital </title>
         <!-- add icon link -->
       <link rel="shortcut icon" type="image" href="images/m.png" >
<!--   for fonts     -->
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<!--   for icons     -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/style-page.css">
         <link rel="stylesheet" href="css/style-department.css"> 
        <link rel="stylesheet" href="css/hover.css">
          <link rel="stylesheet" href="css/covid style.css" >
          <link rel="stylesheet" href="css/doctors.css">
          <link rel="stylesheet" href="css/style-appointment.css">
          <link rel="stylesheet" href="css/style-form.css">
          {{-- ------------------ --}}
<style>
  .navbar{
    font-family:'open sans',sans-serif;
    /* margin-bottom: 30px; */
    background: #1e1e28;
    height: 90px;
  }
  .right{
    float: left;
    margin-top:25px;
    margin-right: 200px;
  }
  .logo{
    float: left;
    margin-right: 200px;
  }
  .logo img{
    width: 180px;
    height: 170px;
    margin-top:-40px;
    margin-left: 45px;
  }
  .navMenu {
    /* background-color: #a34040; */
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
    display: inline;
    float: left;
    margin-top:15px;
  }
  .login label{
    margin-right: 15px;
    margin-bottom: 10px;
    color: #fff;
    font-weight: 700;
  }
  .navbar .dropdown-menu{
      /* margin-left: 85px; */
      background-color: rgb(60, 112, 224);
      border-radius: 10px;
      text-align: center;
      padding: .25rem 1.5rem;
  }
  span{
    text-transform: uppercase;
    color: chartreuse;
  }
  .btn-login{
    color: #fff;
    font-weight: bold;
  }
  .navbar .dropdown-menu:hover{
    background: #07d9ab;
  }
  .btn-login2{
    float: right;
    color: #fff;
    font-weight: bold;
    background: #0773d9;
    padding: 10px;
    border-radius: 10px;
  }
  .btn-login2:hover{
    background: #07d9ab;
  }
</style>

    </head>

    <body>
       
        <!--************************home section****************************-->
       
         <!--   **********************  HEADER************************ -->
          
          <div class="navbar">
                      <div class="logo">
                        <img src="/images/logo.gif" alt="">
                      </div>
                      <div class="right">
                          <nav class="navMenu">
                            <a href="{{url('http://127.0.0.1:8000/')}}">Home</a>
                            @auth
                            <a href="{{url('http://127.0.0.1:8000/patients')}}">Our Patients</a>
                            <a href="{{Route('doctors.index')}}">Our Doctors</a>
                            @endauth
                            @guest
                            <a href="{{route('appoint.create')}}">Appointment Booking</a>
                            @else
                            <a href="{{route('appoint.index')}}">Appointment Booking</a>
                            @endguest
                            <a href="{{url('http://127.0.0.1:8000/vaccaine')}}">Vaccaine</a>
                            <a href="{{url('http://127.0.0.1:8000/team')}}">About Us</a>
                            <a href="{{url('http://127.0.0.1:8000/covid')}}">Covid 19</a>
                            {{-- <div class="dot"></div> --}}
                          </nav>
                      {{-- ---------------- --}}
                        </div>
                        <div class="login">
                          <ul class="navbar-nav ml-auto" style="list-style: none;">
                            @guest
                            <li class="nav-item mr-2"><a href="{{route('login')}}" class="btn btn-outline-secondary btn-login2">Login</a></li>
                            @else
                            <li class="nav-item dropdown">
                              <label>User Name: <span>{{auth()->user()->name}}</span></label>
                              <div class="dropdown-menu btn" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item btn-login" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
    
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                            </li>
                            @endguest
                          </ul>
                        </div>
                    </div>
                    
            <!-- /.navbar-header -->
          <!--   **********************end  HEADER************************ -->
          <!--   **********************end  HEADER************************ -->
          <!-- *****************************************************************************
********************************* page 1 **********************************************
************************************************************************************-->
		{{-- @if($check=='true') --}}
			<div class="home" id="home">
				@yield('home')
			</div>
		{{-- @endif --}}

      <div>
        @yield('content')
      </div> <!--   ./home -->
<!-- *****************************************************************************
********************************* page 2**********************************************
************************************************************************************-->
            
     
      <!-- ***********************************end page2*********************************
************************************************************************************-->
   
    
<!-- ***********************************end page3*********************************
************************************************************************************-->


    <!-- ***********************************end page4*********************************
************************************************************************************-->
   
    
    
       <script src="js/ss.js" type="text/javascript"></script>
	
    </body>     
</html>