<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta description="this website is for traning" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team</title>
    <!-- styles -->
    <link rel="stylesheet" href="styles/all.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
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
    <!-- start testimonials -->
    <div class="testimonials" id="testimonials">
      <h2 class="main-title">testimonials</h2>
      <div class="container">
        <div class="box">
          <img src="imgs/avatar-01.png" alt="avatar-01" />
          <h3>osama muhamed</h3>
          <span class="title">full-stck web developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
        <!-- box 2 -->
        <div class="box">
          <img src="imgs/avatar-02.png" alt="avatar-02" />
          <h3>kareem mahmoud</h3>
          <span class="title">android app developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
        <!-- box 3 -->
        <div class="box">
          <img src="imgs/avatar-03.png" alt="avatar-03" />
          <h3>esaam khaled</h3>
          <span class="title">desktop app developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
        <!-- box 4 -->
        <div class="box">
          <img src="imgs/avatar-04.png" alt="avatar-04" />
          <h3>youssef atef</h3>
          <span class="title">front end developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
        <!-- box 5 -->
        <div class="box">
          <img src="imgs/avatar-05.png" alt="avatar-05" />
          <h3>osama muhamed</h3>
          <span class="title">back end developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
        <!-- box 6 -->
        <div class="box">
          <img src="imgs/avatar-06.png" alt="avatar-06" />
          <h3>youssef muhamed</h3>
          <span class="title">front end developer</span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            modi sapiente et possimus iste nihil similique sed aspernatur
            facilis beatae veniam nobis vero eligendi nesciunt!
          </p>
          <ul class="rt">
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-star"></i></a>
            </li>
            <li>
              <a href="#"><i class="far fa-star"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end testimonials -->
    <!-- start team -->
    <div class="team" id="team">
      <h2 class="main-title">team members</h2>
      <div class="container">
        <div class="box">
          <div class="data">
            <img src="imgs/team-01.jpg" alt="team-01" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-02.jpg" alt="team-02" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-03.jpg" alt="team-03" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-04.jpg" alt="team-04" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-06.png" alt="team-04" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-07.jpg" alt="team-07" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="imgs/team-08.jpg" alt="team-08" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Name</h3>
            <p>simple short description</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end team -->
    <!-- start services -->
    <div class="services" id="services">
      <h2 class="main-title">services</h2>
      <div class="container">
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>01</h2>
              <h3>security</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
        <!-- second -->
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>02</h2>
              <h3>fixing issues</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
        <!-- third -->
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>03</h2>
              <h3>location</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>04</h2>
              <h3>coding</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>05</h2>
              <h3>security</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>06</h2>
              <h3>marketing</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem accusantium sunt aperiam laborum quae esse, et
                magnam consequatur excepturi ex.
              </p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end services -->
  </body>
</html>
