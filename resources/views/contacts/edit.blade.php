<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<div class="navbar">
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
</div>


<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Update Patient Information</strong>
            </div>           
            <div class="card-body">
              <form action="{{route('contacts.update',$contact->id)}}" method="Post">
                @method('Put')
                @csrf
              @include('contacts._form')
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>





<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
body{
  margin: 0;
  background-image: url('/images/padge4.png');
  background-repeat: no-repeat;
  background-size: cover;
}

.navbar{
  font-family:'open sans',sans-serif;
  margin-bottom: 20px;
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
  margin-top:-45px;
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

/* ----------------------- */
.card-header{
    border-radius: 15px;
    margin-bottom: 20px;
    text-align: center;
    font-family: 'open sans',sans-serif;
    font-size: 1.5rem;
}

.card{
  background: #00000080;
  color: #fff;
  font-family: 'open sans',sans-serif;
  font-size: 1.1rem;
}

.form-group{
    margin-left: 80px;
}

</style>

