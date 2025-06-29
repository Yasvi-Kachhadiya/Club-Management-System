<?php include('../server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');
*{
  margin:0;
  padding:0;
}

body{
  color: #000;
  font-size: 14px;
  font-family:'Montserrat', sans-serif;
  background:linear-gradient(62deg, black 0%, #2e2d2d 100%);
  position: relative;

}


.body-content{
  position:relative;
  margin-left: auto;
  margin-right: auto;
  
}


h1{
  font-size: 25px;
  font-family: "Tw Cen MT";
  font-style: bold;
  font-weight: normal;
  padding:2% 0;
  display: block;
  text-align:center;

}

.module{
  position: relative;
  height: 92%;
  width:27%;
  margin-left: auto;
  margin-right: auto;
  background-color:white;
  border-radius:10px;
  opacity: 1;
  margin-bottom: 20px;
  padding-bottom: 10px;
  margin-top: 1%;
  padding-left: 2%;
  padding-right: 2%;
  -webkit-box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);
-moz-box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);
box-shadow: 0px 1px 20px 0px rgba(136,136,136,1);

}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  border: 1px solid black;
  background-color: rgba(255, 255, 255, 1);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

.btn {

  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 14px;
  line-height: 20px;
  height: 34px;
  background:linear-gradient(62deg, black 0%, #2e2d2d 100%);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 10px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.btn:hover,
.btn:focus {
  background:linear-gradient(200deg, black 0%, #2e2d2d 100%);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  margin-top: 10px;
}

.bday{
  background-color: #fff;
  opacity: 1;
  border-style: solid;
  border-radius: 3px;
  padding: 2px 20px;
  border-color: #fff;
}
.img{
	height:140px;
	width:280px;
}

.error {
  color: #FF0000;
}

.sign-in{
  padding-top: 10px;
  color :#4d4d4d;
}

.combine{

  width:95px;
  margin-left: 10px;
}
</style>

<script type="text/javascript">
	
	function validate(){
	var flag=true;
	
	a = document.getElementById("name-err");
	b = document.getElementById("username-err");
	c = document.getElementById("dept-err");
	d = document.getElementById("dob-err");
	e = document.getElementById("admissionyear-err");
	f = document.getElementById("phone-err");
	g = document.getElementById("email-err");
	h = document.getElementById("password-err");
	i = document.getElementById("avatar-err");
	j = document.getElementById("clubname-err");

	if(document.fm.clubname.value.length==0){
		document.fm.clubname.style.border="1px solid #ff6666";
		j.style.color="#ff6666";
		j.innerHTML = "Select a club.";
		flag=false;
	}

	if(document.fm.name.value.length==0){

		a.style.color="#ff6666";
		document.fm.name.style.border="1px solid #ff6666";
		a.innerHTML = "Name field cannot be empty.";
		flag=false;
	}

	if(document.fm.username.value.length==0){

		b.style.color="#ff6666";
		document.fm.username.style.border="1px solid #ff6666";
		b.innerHTML = "Username field cannot be empty.";
		flag=false;
	}

	if(document.fm.dept.value.length==0){

			c.style.color="#ff6666";
			document.fm.dept.style.border="1px solid #ff6666";
			c.innerHTML = "Select a Department.";
			flag=false;
		}

	if(document.fm.dob_d.value.length==0 || document.fm.dob_m.value.length==0
	|| document.fm.dob_y.value.length==0 ){

			d.style.color="#ff6666";
			d.innerHTML = "DOB field cannot be empty.";
			flag=false;
		}

	if(document.fm.admissionyear.value.length==0){
			
			document.fm.admissionyear.style.border="1px solid #ff6666";
			e.style.color="#ff6666";
			e.innerHTML = "Select admission year.";
			flag=false;
		}
	

	if(document.fm.phone.value.length==0){

		f.style.color="#ff6666";
		document.fm.phone.style.border="1px solid #ff6666";
		f.innerHTML = "Phone number must be entered.";
		flag=false;
	}

	if(document.fm.email.value.length==0){
	
		g.style.color="#ff6666";
		document.fm.email.style.border="1px solid #ff6666";
		g.innerHTML = "Email field cannot be empty.";
		flag=false;
	}

	if(document.fm.password.value.length==0 || document.fm.password2.value.length==0){
		
		h.style.color="#ff6666";
		document.fm.password.style.border="1px solid #ff6666";
		document.fm.password2.style.border="1px solid #ff6666";
		h.innerHTML = "Password fields cannot be empty.";
		flag=false;
	}

	if(document.fm.fileToUpload.value.length==0){

			document.fm.fileToUpload.style.border="1px solid #ff6666";
			i.style.color="#ff6666";
			i.innerHTML = "Avatar is not selected.";
			flag=false;
	}

	return flag;
}

</script>






</head>
<body>
	<div class="body-content">
		<div class="module">
			<h1>Create Student Account</h1>
			<form id="fm" action="register.php" enctype="multipart/form-data" method="POST" name="fm">
				
				<?php include('../errors.php'); ?>


				<?php
				   include '../dbconnect.php'; 


			        $query = "SELECT * FROM clubinfo";
					$results = mysqli_query($db, $query);

					
			        echo '<select name="clubname" id="clubname">';
					echo '<option value="">Select Club</option>';
					while($row = mysqli_fetch_assoc($results)) {
			        echo '<option value="'.$row['club_ID'].'">'.$row['club_Name']. '</option>';
					
					}
			   echo '</select>';

			?>

				<p id="clubname-err"></p>
				<center><img class="img" src="../black logo.png"></center>

				 <input type="text" placeholder="FULL NAME" name="name" id="name"/>
				 <p id="name-err"></p>

				 <input type="text" placeholder="UNIVERSITY ID" id="username" name="username" value="<?php echo $username; ?>">
				<p id="username-err"></p>

				 <select name="dept" id="dept" value="">
				  <option value="">SELECT DEPARTMENT</option selected>
				  <option value="IT">IT</option>
				  <option value="CE">COMPUTER</option>
				  <option value="EE">ELECTRICAL</option>
				  <option value="ME">MECHANICAL</option>
				  <option value="EC">EC</option>
				  <option value="CH">CHEMICAL</option>
				  <option value="CI">CIVIL</option>
				  <option value="BT">BIOTECH</option>
				  <option value="NT">NANOTECH</option>
				 </select>
				 <p id="dept-err"></p>
		
				
				  <select name="semester" id="semester" value="">
				  <option value="">SELECT SEMESTER</option selected>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				</select>
				<br><br>
				<b>GENDER : </b>
				<input type="radio" name="gender" value="male" checked> Male
				<input type="radio" name="gender" value="female"> Female
				<input type="radio" name="gender" value="other"> Other<br><br>
				
				<label>DOB : </label>

					<select name="day" class="combine" id="dob_d">
					  <option>Day</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					  <option value="13">13</option>
					  <option value="14">14</option>
					  <option value="15">15</option>
					  <option value="16">16</option>
					  <option value="17">17</option>
					  <option value="18">18</option>
					  <option value="19">19</option>
					  <option value="20">20</option>
					  <option value="21">21</option>
					  <option value="22">22</option>
					  <option value="23">23</option>
					  <option value="24">24</option>
					  <option value="25">25</option>
					  <option value="26">26</option>
					  <option value="27">27</option>
					  <option value="28">28</option>
					  <option value="29">29</option>
					  <option value="30">30</option>
					  <option value="31">31</option>
					</select>

					 <select name="month" class="combine" id="dob_m">
					  <option value="">Month</option>
					  <option value="Jan">Jan</option>
					  <option value="Feb">Feb</option>
					  <option value="Mar">Mar</option>
					  <option value="Apr">Apr</option>
					  <option value="May">May</option>
					  <option value="Jun">Jun</option>
					  <option value="Jul">July</option>
					  <option value="Aug">Aug</option>
					  <option value="sep">Sep</option>
					  <option value="Oct">Oct</option>
					  <option value="Nov">Nov</option>
					  <option value="Dec">Dec</option>
					</select>

					 <select name="year" class="combine" id="dob_y">
					  <option value="">YEAR</option>
					  <option value="2003">2003</option>
					  <option value="2002">2002</option>
					  <option value="2001">2001</option>
					  <option value="2000">2000</option>
					  <option value="1999">1999</option>
					  <option value="1998">1998</option>
					  <option value="1997">1997</option>
					  <option value="1996">1996</option>
					  <option value="1995">1995</option>
					  <option value="1994">1994</option>
					  <option value="1993">1993</option>
					</select>
					<p id="dob-err"></p>

					<select name="admissionyear" id="admissionyear">
					  <option value="">ADMISSION YEAR</option>
					  <option value="2022">2022</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2019">2019</option>
					  <option value="2018">2018</option>
					  <option value="2017">2017</option>
					  <option value="2016">2016</option>
					  <option value="2015">2015</option>
					</select>
					<span id="admissionyear-err"></span>

				<input type="text" placeholder="PHONE"  id="phone" name="phone"/>
				<p id="phone-err"></p>

				<input type="text" placeholder="EMAIL"  id="email" name="email" value="<?php echo $email; ?>">
				<p id="email-err"></p>

				<input type="password" placeholder="PASSWORD"  id="password" name="password_1"/>
				<p id="password-err"></p>

				<input type="password" placeholder="CONFIRM PASSWORD" name="password_2" autocomplete="new-password" id="password2"/>

				<div class="avatar"><label>Select your avatar: </label>
				<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				
				<span id="avatar-err"></span>
				<input type="submit" onclick="return validate();" value="REGISTER" name="reg_user"
				class="btn btn-block btn-primary"/>

				<div class="sign-in">Already have an account? <a href="../login.php">Sign in</a></div>
			</form>
		</div>
	</div>

</body>
</html>

