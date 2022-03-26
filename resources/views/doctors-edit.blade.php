
<div class="container">
    <form method="POST" action="{{ Route('doctors.update',[$data->id]) }}"">      
      @csrf
      @method('PUT')
      <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Update Doctor Information</h2>
      </div>
      <div>

        <input class="feedback-input" type="text" name="first_name" placeholder="First Name" value="{{$data->first_name}}">
        @error('first_name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="text" name="last_name" class="feedback-input" placeholder="Last Name" value="{{$data->last_name}}">
        @error('last_name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="text" name="phone" class="feedback-input" placeholder="Phone" value="{{$data->phone}}">
        @error('phone')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="number" name="age" class="feedback-input" placeholder="Age" value="{{$data->age}}">
        @error('age')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <select name="specialist" class="feedback-input">
            <option value="">Select Department</option>
            <option value="Thoracic and open heart surgery" {{($data->specalist=='Thoracic and open heart surgery')? 'selected' :''}}>Thoracic and open heart surgery</option>
            <option value="Emergencies and operations" {{($data->specalist=='Emergencies and operations')? 'selected' :''}}>Emergencies and operations</option>
            <option value="Laboratories and analyzes" {{($data->specalist=='Laboratories and analyzes')? 'selected' :''}}>Laboratories and analyzes</option>
            <option value="Intensive care" {{($data->specalist=='Intensive care')? 'selected' :''}}>Intensive care</option>
            <option value="x_ray place" {{($data->specalist=='x_ray place')? 'selected' :''}}>x_ray place</option>
            <option value="Bones" {{($data->specalist=='Bones')? 'selected' :''}}>Bones</option>
        </select>
        @error('specialist')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="text" name="address" class="feedback-input" placeholder="Address" value="{{$data->address}}">
        @error('address')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="submit" name="submit" value="Update New Doctor">
    </div>  
    </form>
  </div>
  
  <style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
  
  .container{ 
      background:rgb(30,30,40); 
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
      background: rgba(30, 30, 40, 0.7);
  }
  
  </style>