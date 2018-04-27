<!DOCTYPE html>
<html lang="en">
<head>
<title>PhysEd</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

header .nav-bg {
	background:no-repeat center top;
}
header nav {
	position:absolute;
	left:0;
	top:3px;
}
header nav ul li {
	float:left;
	font-size:14px;
	line-height:1.2em;
	text-transform:uppercase;
	padding-right:1px;
	background:url(../images/divider.gif) repeat-y right top;
}
header nav ul li.last {
	background:none;
	padding:0;
}
header nav ul li a {
	color:#454545;
	text-decoration:none;
	display:block;
	float:left;
	text-align:center;
	padding:18px 0 20px 0;
	background-repeat:no-repeat;
	background-position:left top;
}
header nav ul li.current a, header nav ul li a:hover {
	color:#008cc4;
}
header nav ul li a.m1 {
	width:130px;
}
header nav ul li.current a.m1 {
	background-image:url(../images/m1-act.jpg);
}
header nav ul li a.m2 {
	width:130px;
}
header nav ul li.current a.m2 {
	background-image:url(../images/m2-act.jpg);
}
header nav ul li a.m3 {
	width:130px;
}
header nav ul li.current a.m3 {
	background-image:url(../images/m3-act.jpg);
}
header nav ul li a.m4 {
	width:130px;
}
header nav ul li.current a.m4 {
	background-image:url(../images/m4-act.jpg);
}
header nav ul li.last {
	background:none;
	padding:0;
}
header nav ul li a.m5 {
	width:130px;
}
header nav ul li a.m6 {
	width:100px;
}
header nav ul li.current a.m5 {
	background-image:url(../images/m5-act.jpg);
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <nav>
        <ul>
          <li><a href="index.html" class="m1">Home Page</a></li>
          <li><a href="videos.html" class="m2">Videos</a></li>
          <li><a href="formulae.html" class="m3">Formulae</a></li>
          <li><a href="test.php" class="m3">Practice Tests</a></li>
           <li><a href="sims.html" class="m4">Simulations</a></li>
          <li><a href="contact-us.html" class="m5">Contact Us</a></li>
          <li><a href="login.php" class="m6">Log in</a></li>

        </ul>
      </nav>
    </div>
  </header>
  
   
    <div class="m-4">
    <div class="container-fluid">
      <div class="container">
    <aside>
      <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
            <h2>Newsletter</h2>
            <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
            <div class="clear"><a href="#" class="fright">Submit</a></div>
          </div>
        </fieldset>
      </form>
    </aside>
      <div class="row m-4 ">
      <div class="col-md-5 mx-auto  mb-3">
          <form id="login-form" method="POST" action="connectivity-login.php">
          <fieldset>
            <h3>Login</h3>
            <div class="form-group">
              <label for="LUserNameInput">User Name</label>
              <input type="text" name="user" class="form-control" id="LUserNameInput" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="LPasswordInput">Password</label>
              <input type="password" name="pass" class="form-control" id="LPasswordInput" placeholder="Password">
            </div>
            <div class="aligncenter"><button type="submit" name="submit" class="btn btn-primary">Login</button></div>
            </fieldset> 
        </form>
        <br>
        <a href="signup.html">If Not A Member Join Now !!</a>
       </div>
         

          
      </div>
    </div>
  </div>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2018 <a href="#">PhysEd</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
  <script src="jquery-3.2.1.slim.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
<!-- END PAGE SOURCE -->
</body>
</html>