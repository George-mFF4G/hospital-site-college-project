@extends('layout')
@section('content')
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<div class="container-form">
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
	<form method="POST" action="{{Route('appoint.store')}}">
		@csrf      
	  <div class="title">
		  <i class="fas fa-pencil-alt"></i>
		  <h2>Get Your Appointment</h2>
	  </div>
		<div>            
			<input class="feedback-input" name="patient_name" type="text" placeholder="Name" required>
			<input class="feedback-input" name="phone" type="text" placeholder="Phone" maxlength="11" minlength="11" required>
			<input class="feedback-input" name="age" type="text" placeholder="Age" required>
			<textarea class="feedback-input" name="description" placeholder="More Information about your condition"></textarea>
			<label style="color:#fff; font-weight:500;">Select Date</label>
			<input class="feedback-input" name="appointement_date" type="date" required>
			{{-- ///////////////////////////////////////////////////////////////////////// --}}
			<select id="doc_id" name="doc_id" class="form-control feedback-input" style="color:white; background-color:#0000008c;">
			<?php
                $address_check = "SELECT * FROM doctors ";
                $result = mysqli_query($conn, $address_check);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']." ".$row['last_name']." - ".$row['specalist']; ?></option>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>

			</select>
			{{-- //////////////////////////////////////////// --}}
			<button type="submit" class="fade" name="add_appointement">Book An Appointment</button>		  			
		</div>  
	</form>
  </div>    
<script src="js/ss.js" type="text/javascript"></script>   
@endsection


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
	.nav-item{
		display: none;
	}
	.navbar .dropdown-menu{
		display: none;
		/* max-height: 30px;
		margin-bottom: 10px; */
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