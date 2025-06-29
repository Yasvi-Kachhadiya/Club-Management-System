<?php 

include('server.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">


<script type="text/javascript">

	function validate() {

		var flag=true;

		a = document.getElementById("username-err");
		b = document.getElementById("password-err");


		if(document.fm.username.value.length==0){

		a.style.color="#ff6666";
		document.fm.username.style.border="1px solid #ff6666";
		a.innerHTML = "University Id field is empty.";
		flag=false;
	}

		if(document.fm.password.value.length==0){

			b.style.color="#ff6666";
			document.fm.password.style.border="1px solid #ff6666";
			b.innerHTML = "Password field is empty.";
			flag=false;
		}

		return flag;
}

</script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');
*{
	margin:0;
	padding:0;
	overflow:hidden;

}


body{
	color: #000;
	font-size: 17px;
	font-family: 'Montserrat', sans-serif;
	background:linear-gradient(62deg, black 0%, #2e2d2d 100%);
}
.img{
	height:150px;
	width:280px;
}


h2{
	font-size: 1.3em;
	font-family:'Montserrat', sans-serif;;
	font-weight: bold;
	padding:5% 0;
	display: block;
	color: #4c4c4d;
	text-align: center;
	cursor: default;
}

.module{
	position: relative;
	height: 100%;
	width:20%;

  	margin: 5% auto;
	border-radius:10px;
  	background-color : #FFFFFF;
	opacity: 1;
	
	padding-bottom: 20px;
 	padding-left: 2%;
	padding-right: 2%;
	margin-bottom: 7%;
	-webkit-box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);
-moz-box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);
box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);

}

select,
textarea,
input[type="text"],
input[type="password"]
{

  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 2px solid black;
  border-radius:10px;
  background-color: rgba(255, 255, 255, 1);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}


.btn {
cursor : pointer;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background:linear-gradient(62deg, black 0%, #2e2d2d 100%);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius:10px;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  font-family: 'Montserrat', sans-serif;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  margin-top: 20px;
}

.btn:hover,
.btn:focus {
  background:linear-gradient(200deg, black 0%, #2e2d2d 100%);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  cursor : pointer;
  
}

.btn-block {
	cursor : pointer;
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.join{
	padding-top: 20px;

}




ul {

	list-style: none;

}
ul li {
	text-align: center;
	position: relative;
	width: 70px;
	height: 34px;
	text-align: center;
	background-color: #EFEFEF;
}

ul li a {
	text-decoration: none;
	color: #fff;
	display: block;
	font-size:14px;
	line-height: 1.6em;
	padding-top: 7px;
}

ul li a:hover{
	background-color: #3d5ec2;
	color: white;
	padding: 7px 10px;
}
ul li ul li{
	display: none;
	background-color: #333333;
	opacity: 1;
	
}

ul li:hover ul li{
	display: block;
}

.sign-btn{

	margin-top: 5px;
	font-size: 13px;
	height: 34px;
	width: 70px;
	background-color: #666666;
	color: #fff;
	border: 0px solid rgba(255, 255, 255, 0.15);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
}

p{
	
}

#c{
	text-align: middle;
	cursor: default;
	color: #666666;
	text-decoration: none;
}

.sgn{

	cursor: default;
	border: 1px dashed #cccccc;
	color: #808080;
	margin:10px 0;
	text-align: center;
	padding: 2px 2px;
}

.uniid{

	margin-top: 10px;
	margin-bottom: 10px;
}

.success{
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: center;
}

p{
	font-family: "ROBOTO";
	font-size: 13px;
}
</style>


</head>
<body>
	<div class="body-content">
		<div class="module">
			<form name="fm" name ="myForm" action="login.php" method="POST">
			<h2>Club CARE Management System</h2>
			<center><img class="img" src="black logo.png"></center>
			<div class="sgn">Sign in with University ID and Password</div>

			<?php include 'session_error.php'; 
			if(isset($_GET['status'])){
 		   	
 		   	echo "<div style=

					'color: rgb(138, 109, 59);
					background-color: rgb(252, 248, 227);
					padding: 5px 0;
					border-radius: 2px;
					text-align: center;'
					>".$_GET['status']."</div>";

 		   
			}
			else{
				echo "";
			}
			?>

			
			<?php include('errors.php'); ?>
			<div class="uniid">
				<input type="text" name="username" id ="username" placeholder="UNIVERSITY ID" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
			<p id="username-err"></p>
			</div>
			<input type="password" name="password" id="password" placeholder="PASSWORD" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
			<p id="password-err"></p>
			<input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />&nbsp;<span style='color: #8c8c8c;'>Remember me</span>
			<input type="submit" onclick="return validate();" name="login_user" value="SIGN IN" class="btn btn-block btn-primary">

			<div class="join">
				
			<span id="c">or, Create Account</span>
			<a href="registration/register.php">Sign up</a>
			</div>
		</form>
	</div>
</div>


</body>
</html>


