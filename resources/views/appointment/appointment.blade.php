@extends('layout')
@section('content')

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<div class="overly">
<form method="post" action="make_app.php">		
		<div>
			<div class="signup" id="book">
				
				  <div class="container-signup">
				 <!--****** Start div for photo ******-->
				 <!--    <div class="signup-photo"></div>-->
				  <!--****** End div for photo ******-->
				  <!--****** Start div for form ******-->
				 
				  <div class="container-form">
					 <h2>Get Your Appointment</h2>
					  <form target="_blank">
						  <input class="name" type="text" placeholder="Name" required>
						  <input class="age" type="text" placeholder="Age" required>
						  <select id="department">
							 <option selected>Select Department</option>
							  <option>Thoracic and open heart surgery</option>
							  <option>Emergencies and operations</option>
							  <option>Laboratories and analyzes</option>
							  <option>Intensive care</option>
							  <option>x_ray place</option>
							  <option>Bones</option>
						  </select>
						  <textarea placeholder="More Information about your condition"></textarea>
						  <label class="s">Select Time</label>
						  <input type="date" required>
						  <button type="submit" class="fade">Book An Appointment</button>
					  </form>
					</div>
 
				  </div>
					<!--****** End div for form ******-->
					</div>
				 </div>
              <!--   ./over -->
        <!--   ./home -->
</form>
</div>
       <script src="js/ss.js" type="text/javascript"></script>

@endsection