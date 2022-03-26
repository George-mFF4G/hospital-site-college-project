  
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


<div class="container-form">
  <form method="POST" action="{{Route('doctors.store')}}">      
    @csrf
    <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Enter Doctor Information</h2>
    </div>
    <div>            
            <input type="text" name="first_name" class="feedback-input" placeholder="First Name" value="{{old('first_name')}}">
            @error('first_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" name="last_name" class="feedback-input" placeholder="Last Name" value="{{old('last_name')}}">
            @error('last_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" name="phone" class="feedback-input" placeholder="Phone" value="{{old('phone')}}">
            @error('phone')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="number" name="age" class="feedback-input" placeholder="Age" value="{{old('age')}}">
            @error('age')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <select name="specialist" class="feedback-input" >
                <option value="">Select Department</option>
                <option value="Thoracic and open heart surgery">Thoracic and open heart surgery</option>
                <option value="Emergencies and operation">Emergencies and operations</option>
                <option value="Laboratories and analyzes">Laboratories and analyzes</option>
                <option value="Intensive care">Intensive care</option>
                <option value="x_ray place">x_ray place</option>
                <option value="Bones">Bones</option>
            </select>
            @error('specialist')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" name="address" class="feedback-input" placeholder="Address" value="{{old('address')}}">
            @error('address')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <input type="submit" name="submit" value="Add New Doctor"> 
        </div>  
  </form>
</div>


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
  margin-bottom: 100px;
  background: #1e1e28;
  height: 80px;
}
.right{
  float: right;
  margin-top:25px;
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
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

.container-form{ 
    background:rgb(30,30,40,0.85); 
    width: 50%;
    margin: auto;
    border-radius: 20px;
    padding: 10px;
}

form { max-width:420px; margin:50px auto; }

.title{
    text-align: center;
    color: #fff;
    background: #a34040;
    border-radius: 10px;
}
.title h2{
    padding: 10px;
    font-family:'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
}


.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  /* width: 100%; */
  background:#4664c5;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
  margin-left: 90px;
}
[type="submit"]:hover { background:#d449b2; }

option{
    background: rgba(30, 30, 40, 0.2);
}

</style>