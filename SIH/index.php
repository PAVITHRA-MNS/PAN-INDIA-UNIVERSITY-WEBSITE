<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>PAN India University Bank</title>

  <!-- bootstrap scripts-links  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- jquery links for using carousel -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v6.0.0/js/all.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat:wght@100;400;900&family=Sacramento&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- BEBAS NEUE FONT -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- EXPLETUS FONT -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:wght@600&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <!--css link -->
<style media="screen">
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


body {
 font-family: 'Montserrat', sans-serif;
 text-align: center;
 user-select: none;
}

h1,h2,h3,h4,h5,h6 {
  font-family: 'Montserrat', sans-serif;
  font-weight: 900;
}

p {
  color: #f5f4e8;
}


/* Navigation Bar */

.navbg{
  background-color: #FF004D;
  align-items: center;
}
.navbar2{
  background-color: #FF004D;
  margin: 0;
  padding: 0;
}

.navhead{
  font-family: 'Oswald', sans-serif;
  color: white;
  margin-right: 20px;
}

#sectag{
  line-height: 2px;
  color: white;
  font-family: 'Oswald', sans-serif;

}

.navtable{
  border-collapse: separate;
  border-spacing: 40px;
  *border-collapse: expression('separate', cellSpacing='40px');
}

.navrow1{
  border-right: 80px;
}

.navsec{
  font-family: 'Oswald', sans-serif;
  color: white;
  font-size: 25px;
  font-weight: bolder;
}

.navcap{
  font-family: 'Open Sans', sans-serif;
  color: white;
}

a {
  background:
     linear-gradient(
       to right,
       var(--mainColor) 0%,
       var(--mainColor) 5px,
       transparent 5px
     );
background-repeat: repeat-x;
background-size: 100%;
  color: #000;
  padding-left: 10px;
  text-decoration: none;
}

a:hover {
  background:
     linear-gradient(
       to right,
       var(--mainColor) 0%,
       var(--mainColor) 5px,
       transparent
     );
}

:root {
  --mainColor: #ff9800;
}

/* carousel */
#video-carousel-example{
  margin: 0;
}

.btncar{
  background-color: #FF004D;
  border-radius: 20px;
}

.carcap{
  color: white;
}

/* features-section */

#features {
  padding: 50px 100px 50px 100px;
  background-color: white;
  position: relative;
}

.featurediv {
  padding: 3%;
}

.features-title {
  font-size: 1.5rem;
  margin-top: 20px;
  margin-bottom: 20px;
}

.icon {
  color:#DD576C;
}

.icon:hover {         /* to change the color of the icon when hovered over  */
  color:#FF004D;
}

#features p{
  color:grey;
}/* streams-section */

#streams {
  display: grid;
  place-items: center;
  text-align: center;
  background-color:#FF004D;
  padding: 50px;
}


.container{
  padding: 0 ;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.card{
  height: 280px;
  max-width: 350px;
  margin: 20px 20px;
  transition: 0.4s;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}
.card .img{
  height:270px;
}
.card:hover{
  height: 400px;
  box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
}
.card .img{
  height: 270px;
  width: 100%;
}
.card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.card .top-text{
  padding-top: 5px;
  background-color: white;
}
.card .top-text .name{
  font-size: 25px;
  font-weight: 600;
  color: #FF004D;
}

.card .bottom-text{
  padding: 0 10px 0 10px;
  margin-top: 5px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
}
.card:hover .bottom-text{
  opacity: 1;
  visibility: visible;
}
.card .bottom-text .text{
  text-align: center;
}
.card .bottom-text .btn{
  margin: 0 0;
  text-align: left;
}
.card .bottom-text .btn a{
  text-decoration: none;
  background:#FF004D;
  color: #f2f2f2;
  padding: 8px 20px;
  border-radius: 3px;
  display: inline-flex;
  transition: 0.2s;
}
.card .bottom-text .btn a:hover{
  transform: scale(0.9);
}
@media screen and (max-width: 978px) {
  .container{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}


/* Courses Comparision */

#coursesComp {
  align-items: center;
  display: flex;
  min-height: 90vh;
  justify-content: center;
}

#coursesComp .card-grid{
  display: inline-flex;
  grid-column-gap: 40px;
}

#coursesComp .card{
  position: relative;
  width: 300px;
  height: 450px;
  transition: 0.8s ease-in-out;
  border-radius: 20px;
  background-image: linear-gradient(15deg, #0f4667 0% , #2a6973 150%);
}

#coursesComp .card:hover{
  box-shadow: 2px 30px 30px rgba(0,0,0,0.5);
}

#coursesComp .card-background{
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
  background-size: cover;
  background-position: center;
  border-radius: 24px;
  transform-origin: center;
  transform: scale(1) translateZ(0);
  transition: filter 200ms linear , transform 200ms linear;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
}
#coursesComp .card-content{
  position: absolute;
  left: 0;
  top: 0;
  padding: 24px;
}

#coursesComp .card-heading{
  color: #fff;
  font-size: 1.9rem;
  line-height: 1.4;
  width: 80%;
}

#coursesComp .card-category{
  position: absolute;
  left: 35%;
  top: 14em;
  color: #fff;
  font-size: 26px;
  font-weight: bold;
  text-transform: uppercase;
}

#coursesComp .card:hover .card-background{
  transform: scale(1.05) translateZ(0);
}

#coursesComp .card-grid:hover > .card:not(:hover) , .card-content:not(:hover) .card-background{
  filter: brightness(0.8) saturate(1) contrast(1.2) blur(10px);
}

#coursesComp .cchead{
  font-family: 'Open Sans', sans-serif;
  width: 100%;
}

#coursesComp .cccap{
  font-family: 'Open Sans', sans-serif;
  width: 100%;
}




.univlogin{
  background-color: #FF004D;
  padding: 20px;
  align-items: center;
}

#signup{
  width: 20em;
  height: 15em;
  margin: 10px;
}

#signuphead{
  position: relative;
  bottom: 20px;
  text-align: left;
  color: white;
   font-family: 'Open Sans', sans-serif;
}

#signupcont{
  font-size: 20px;
  text-align: left;
  color: #ECECEC;
}

#sutable{
  position: relative;
  left: 200px;
  text-align: center;
  border-collapse: separate;
  border-spacing: 40px;
  *border-collapse: expression('separate', cellSpacing='40px');
}

.signupcont{
  color: #D8D2CB;
}

#texts{
  position: relative;
  top: 40px;
}

.subscribe{
  position: relative;
  right: 250px;
  color: black;
  margin: 10px;
}

.courses{
  background-color: white;
  padding: 20px;
  align-items: center;
}

#oc{
  width: 20em;
  height: 15em;
  margin: 10px;
}

#ochead{
  position: relative;
  bottom: 20px;
  text-align: left;
  color: black;
   font-family: 'Open Sans', sans-serif;
}

#occont{
  font-size: 20px;
  text-align: left;
  color: black;
}

#octable{
  position: relative;
  left: 200px;
  text-align: center;
  border-collapse: separate;
  border-spacing: 40px;
  *border-collapse: expression('separate', cellSpacing='40px');
}

.occont{
  color: black;
}

#texts{
  position: relative;
  top: 40px;
  color: black;
}

.join{
  position: relative;
  right: 250px;
  color: white;
  margin: 10px;
}

</style>
</head>



<body>
  <section id="title">
    <div class="container-fluid navbg">
      <div class="collapse navbar2" id="navbarToggleExternalContent">
        <div class=" p-4 navbar2">

          <table class="navtable">
            <tr class="navrow1">
              <td>
                <h5 class="text-white h4 navsec"><a href="#slider" id="sectag">FEATURES</a></h5>
                <p class="navcap">IN THIS SECTION WE WILL FIND THE FEATURES OF THIS WEBSITE</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#streams" id="sectag">STREAMS</a></h5>
                <p class="navcap">IN THIS SECTION WE WILL FIND OUT THE DIFFERENT STREAMS AVAILABLE</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#coursesComp" id="sectag">COURSE COMPARISON</a></h5>
                <p class="navcap">CONFUSED IN CHOOSING THE RIGHT COURSE?? THEN VISIT THIS SECTION</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#univnearyou" id="sectag">UNIV NEAR YOU</a></h5>
                <p class="navcap">WANT A PERSONAL GUIDE TO GUIDE YOU TO THE BEST UNIV NEAR BY?? VISIT THIS SECTION</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#online" id="sectag">ONLINE COURSES</a></h5>
                <p class="navcap">CONFUSED IN CHOOSING THE RIGHT COURSE?? THEN VISIT THIS SECTION</p>
              </td>
              <td>
                <h5 class="text-white h4 navsec"><a href="#" id="sectag">SIGN IN</a></h5>
                <p class="navcap">CONFUSED IN CHOOSING THE RIGHT COURSE?? THEN VISIT THIS SECTION</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#" id="sectag">ABOUT</a></h5>
                <p class="navcap">IN THIS SECTION WE WILL FIND OUT THE DIFFERENT STREAMS AVAILABLE</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#" id="sectag">SOCIAL MEDIA</a></h5>
                <p class="navcap">CONFUSED IN CHOOSING THE RIGHT COURSE?? THEN VISIT THIS SECTION</p>
                <br>
                <h5 class="text-white h4 navsec"><a href="#" id="sectag">FEEDBACK</a></h5>
                <p class="navcap">WANT A PERSONAL GUIDE TO GUIDE YOU TO THE BEST UNIV NEAR BY?? VISIT THIS SECTION</p>
                <br>
              </td>
            </tr>
          </table>


        </div>
      </div>
    </div>
    </div>
    </div>
    <nav class="navbar navbar-dark navbar2">
      <div class="container-fluid navbar2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h2 class="navhead">AICTE</h2>
        <h3></h3>
      </div>
    </nav>
    </div>

<br>

    <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#video-carousel-example" data-slide-to="1"></li>
        <li data-target="#video-carousel-example" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="height: 554px;">
          <video class="video-fluid" autoplay loop muted>
            <source src="HomeVid1.mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption font-weight-bold" style="color:#CF102D">
            <button type="button" name="button" class="btn btncar btn-lg ">
              <h2 class="carcap">PAN INDIA UNIVERSITY BANK</h2>
            </button>
          </div>
        </div>
        <div class="carousel-item" style="height: 554px;">
          <video class="video-fluid" autoplay loop muted>
            <source src="HomeVid2.mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption font-weight-bold " style="color:#CF102D">
            <button type="button" name="button" class="btn btncar btn-lg ">
              <h2 class="carcap">LET'S BEGIN YOUR JOURNEY</h2>
            </button>
          </div>
        </div>
      </div>
    </div>



    </div>

  </section>

  <!-- Features -->

   <section class="row" id="features">

     <div class="featurediv col-lg-4 col-md-4 ">
       <i class="icon fas fa-building-columns fa-5x"></i>
       <h3 class="features-title">1000+ Universities</h3>
       <p>Details about 1000+ Universities in One Destination</p>
     </div>


     <div class="featurediv col-lg-4 col-md-4">
       <i class="icon fas fa-graduation-cap fa-5x"></i>
       <h3 class="features-title">Every Stream</h3>
       <p>We cover every stream available in Indian Universities</p>
     </div>

     <div class="featurediv col-lg-4 col-md-4">
       <i class="icon fas fa-list fa-5x"></i>
       <h3 class="features-title">Compare Courses</h3>
       <p>Compare courses and choose the best one for you</p>
     </div>


     <div class="featurediv col-lg-6 col-md-6">
       <i class="icon fas fa-location-dot fa-5x"></i>
       <h3 class="features-title">Near You</h3>
       <p>Universities Near you are provided additionally</p>
     </div>

     <div class="featurediv col-lg-6 col-md-6">
       <i class="icon fas fa-laptop-code fa-5x"></i>
       <h3 class="features-title">Online Courses</h3>
       <p>Links for various free online courses will be provided</p>
     </div>

   </section>


  <!-- streams  -->

  <section id="streams">


    <div class="container">
      <div class="card col-lg-6 col-md-6 col-sm-6">
        <div class="img">
          <img src="images/engineering.jpg">
        </div>
        <div class="top-text">
          <div class="name">Engineering field</div>
        </div>
        <div class="bottom-text">
          <div class="text">Choose the best one for you from 4500+ Engineering Universities in India </div>
          <div class="btn">
            <a href="engineering.php">Explore </a>
          </div>
        </div>
      </div>
      <div class="card col-lg-6 col-md-6 col-sm-6">
        <div class="img">
          <img src="images/medicalstud.jpg">
        </div>
        <div class="top-text">
          <div class="name">Medicine field</div>
        </div>
        <div class="bottom-text">
          <div class="text">There are 500+ Colleges available in india to practice medicine </div>
          <div class="btn">
            <a href="medical.php">Explore</a>
          </div>
        </div>
      </div>

      <div class="card col-lg-6 col-md-6 col-sm-6">
        <div class="img">
          <img src="images/lawlibrary.jpeg">
        </div>
        <div class="top-text">
          <div class="name">Law colleges</div>
        </div>
        <div class="bottom-text">
          <div class="text">We provide information about 1500 Law colleges in India </div>
          <div class="btn">
            <a href="medical.php">Explore </a>
          </div>
        </div>
      </div>
    </div>

    <div class="card col-lg-6 col-md-6 col-sm-6">
      <div class="img">
        <img src="images/commerce.jpeg">
      </div>
      <div class="top-text">
        <div class="name">Arts & Commerce</div>
      </div>
      <div class="bottom-text">
        <div class="text">Over 15000+ arts and commerce colleges available in India </div>
        <div class="btn">
          <a href="engineering.php">Explore </a>
        </div>
      </div>
    </div>
    </div>
  </section>
  </section>

  <br>

  <section id="coursesComp">
    <div class="card-grid">
      <a class="card" href="coursecomparision.php">
        <div class="card-background" style="background-image: url(images/engineering.jpg);"></div>
        <div class="card-content">
          <h3 class="card-heading cchead">ENGINEERING</h3>
        </div>
      </a>

      <a class="card" href="coursecomparision.php">
        <div class="card-background" style="background-image: url(images/commerce.jpeg);"></div>
        <div class="card-content">
          <h3 class="card-heading cchead">ARTS</h3>
        </div>
      </a>

      <a class="card" href="coursecomparision.php">
        <div class="card-background" style="background-image: url(images/medical.jpg);"></div>
        <div class="card-content">
          <h3 class="card-heading cchead">MEDICAL</h3>
        </div>
      </a>

    </div>

  </section>

  <section>
    <div class="univlogin">
      <table id="sutable">
      <tr>
        <td> <img src="images/signup.jpg" alt="" id="signup"></td>
        <td id="texts"> <h1 id="signuphead">SUBSCRIBE TO OUR WEBSITE</h1>
         <h3 id="signupcont"> <p class="signupcont">SUBSCRIBE TO OUR WEBSITE TO GET PERSONALISED DETAILS</p>
           <p class="signupcont">ABOUT YOUR PREFERRED COURSES AND LOCATION!!</p>
           <p class="signupcont">SO BY SIGNING UP YOU WILL GET DETAILS ABOUT ONLINE COURSES,</p>
           <p class="signupcont">ADMISSION DETAILS AND MANY!!</p> </h3>
           <a href="signup.php"><button class="btn btn-light subscribe" type="submit">SUBSRCIBE NOW</button></a>
         </td>

      </tr>
        </table>
    </div>
  </section>

  <section>
    <div class="courses">
      <table id="octable">
      <tr>
        <td id="octexts"> <h1 id="ochead">ONLINE COURSES</h1>
         <h3 id="occont"> <p class="occont"></p>
           <p class="occont">WE PROVIDE AROUND 20 COURSE LINKS FROM MANY WEBSITES.</p>
           <p class="occont">EVERY MONTH AND YOU WILL FIND 20 NEW COURSES </p>
           <p class="occont">AND THOSE COURSES WILL BE REMOVED AND WE </p>
         <p class="occont"> WILL REFILL WITH 20 NEW COURSES EVERY MONTH!!</p> </h3>
          <a href="onlinecourses.php">  <button class="btn btn-dark join" type="submit">ENROLL NOW</button> </a>
         </td>
         <td> <img src="images/onlinecourses.jpg" alt="" id="oc"></td>
      </tr>
        </table>
    </div>
  </section>
</body>
</html>
