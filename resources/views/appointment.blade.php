@extends('layout')
@section('content')

<div class="signup" id="book">
    <div class="overly">
      <div class="container-signup">
     <!--****** Start div for photo ******-->
     <!--    <div class="signup-photo"></div>-->
      <!--****** End div for photo ******-->
      <!--****** Start div for form ******-->
     
      <div class="container-form">
         <h2>Get Your Appointment</h2>
          <form target="_blank">
              <input class="name" type="text" placeholder="Name" required>
              <input class="email" type="email" placeholder="Email" required>
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
       {{-- <div class="imgdoc">
          <img src="images/imgdoc.png" alt="not founded">
       </div> --}}
          
       
      </div>
        <!--****** End div for form ******-->
        </div>
     </div>
@endsection