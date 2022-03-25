<html>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display+SC');

body {
  font-family: Helvetica;
  margin: 0;
  font: normal 18px 'Open Sans', sans-serif;
}
h1{
        font: bold 4em 'Playfair Display SC', serif;
        text-align:center;
        padding-bottom:20px;
    }
a {
  text-decoration: none;
  color: #000;
}
.site-header { 
  border-bottom: 1px solid #ccc;
  padding: .5em 1em;
}

.site-header::after {
  content: "";
  display: table;
  clear: both;
}

.site-identity {
  float: left;
}

.site-identity h1 {
  font-size: 1.5em;
  margin: .7em 0 .3em 0;
  display: inline-block;
}

.site-identity img {
  max-width: 55px;
  float: left;
  margin: 0 10px 0 0;
}

.site-navigation {
  float: right;
}

.site-navigation ul, li {
  margin: 0; 
  padding: 0;
}

.site-navigation li {
  display: inline-block;
  margin: 1.4em 1em 1em 1em;
}

</style>
<header class="site-header">
  <div class="site-identity">
    <a href="index.html"><img style="padding:10px;" src="https://lh5.googleusercontent.com/-BvweOqRoxi0/AAAAAAAAAAI/AAAAAAAAAAA/g4saBzM_Fms/s55-p-k-no-ns-nd/photo.jpg" alt="Site Name" /></a>
    <h1><a href="index.html">Saveetha University</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="index.html">Home</a></li> 
      <li><a href="aboutus.html">About</a></li> 
      <li><a href="courses.html">Courses</a></li> 
      <li><a href="faculty.html">Faculty</a></li> 
      <li><a href="placements.html">Placements</a></li>
      <li><a href="register.php"><span style="color:white;background-color:red ;padding: 10px;border-radius: 10px;">Register</span></a></li>
    </ul>
  </nav>
</header>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }

  </style>
  <title>Registration Form</title>
</head>
<body>
  <div class="box">
    <h2>Register Here</h2>
    <form action="config.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Name</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="text" name="branch"  autocomplete="off" required>
        <label for="">Interested Branch</label>
      </div>
      <div class="input-box">
        <input type="text" name="message"  autocomplete="off" required>
        <label for="">Message</label>
      </div>
        <input type="submit" value="Register">
    </form>
  </div>
</body>
<br><br>
<footer class="footer">
        <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/pg/SaveethaEngineeringCollegeSEC/posts/?ref=page_internal">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="https://twitter.com/SaveethaSEC">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/in/saveetha-engineering-college/">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/saveethaengineeringcollege/">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        </ul>
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="\index.html">Home</a></li>
          <li class="menu__item"><a class="menu__link" href="/aboutus.html">About</a></li>
          <li class="menu__item"><a class="menu__link" href="/courses.html">Courses</a></li>
          <li class="menu__item"><a class="menu__link" href="/faculty.html">Faculty</a></li>
          <li class="menu__item"><a class="menu__link" href="/placements.html">Placements</a></li>
         
    
        </ul>
        <p>&copy;2021 Saveetha University | All Rights Reserved</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
          
.footer {
  position: relative;
  bottom: -600px;
  max-width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

</style>
    
</html>
