<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Facebook Style Home Page Design - demo by w3lessons.info</title>
<link rel="stylesheet" href="design.css" type="text/css" />
</head>
<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
<div id="facebook-Frame">

<div id="header-main-right">
<div id="header-main-right-nav">
<form method="post" action="main.php" id="login_form" name="login_form">
<table border="0" style="border:none">
<tr>
<td ><input type="text" tabindex="1" id="email" placeholder="Email or Phone" name="email" class="inputtext radius1" value=""></td>
<td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td>
<td ><input type="submit" class="fbbutton" name="login" value="Login" /></td>
</tr>
<tr>
<td><label>
<input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
<span style="color:#ccc;">Keep me logged in</span></label></td>
<td><label><a href="" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>

<!-- header ends here -->
<div class="loginbox radius">
<h2 style="color:#141823; text-align:center;">Welcome to Facebook</h2>
<div class="loginboxinner radius">
<div class="loginheader">
<h4 class="title">Connect with friends and the world around you.</h4>

</div>
<img src="a.png"/>
<!--loginheader-->
<div class="loginform">
<form id="login" action="main.php" method="post">
<p>
<input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
<input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
</p>
<p>
<input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
</p>
<p>
<input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" />
</p>
<p>
<input type="password" id="password" name="password" placeholder="New Password" class="radius" />
</p>
<p>

<button type="submit" class="btn1" id="registerbutton" name="registerbutton">Sign up</button>
</p>
</form>
</div>
<!--loginform-->
</div>
<!--loginboxinner-->
</div>
<!--loginbox-->
</body>
</html>
