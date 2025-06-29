
<script src="jQuery.js"></script>
<script src="script.js"></script>



<script type="text/javascript">


function updateProfile() {

	a = document.getElementById("msg");

	var temp = '-';

	var dob_d=document.getElementById('dob_d').value;
	var dob_m=document.getElementById('dob_m').value;
	var dob_y=document.getElementById('dob_y').value;

	var dobrth = dob_d.concat(temp,dob_m,temp,dob_y);


	var xmlhttp = new XMLHttpRequest();
	var str=document.getElementById('sid').innerHTML;
    var phn=document.getElementById('pn').value;
    var mail=document.getElementById('em').value;
	var yr=document.getElementById('ay').value;
	var e = document.getElementById('dept');
    var department = e.options[e.selectedIndex].text;
	var e1 = document.getElementById('sem');
    var smstr = e1.options[e1.selectedIndex].text;
	var e2 = document.getElementById('gen');
    var gn = e2.options[e2.selectedIndex].text;
    document.getElementById("updateSpinner").style.visibility= "visible";

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
		document.getElementById("updateSpinner").style.visibility= "hidden";
		a.innerHTML = xmlhttp.responseText ;

			
		}
	};
 	var url="server.php?username="+str+"&phone="+phn+"&email="+mail+"&dobr="+dobrth+"&dobd="+dob_d+"&dobm="+dob_m+"&doby="+dob_y+"&year="+yr+"&dpt="+department+"&smster="+smstr+"&gndr="+gn;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();


}
		
  function edit(){
		 
		document.getElementById("dept").style.visibility = 'visible';
		document.getElementById("sem").style.visibility = 'visible';
		document.getElementById("ay").style.visibility = 'visible';
		document.getElementById("dob_d").style.visibility = 'visible';
		document.getElementById("dob_m").style.visibility = 'visible';
		document.getElementById("dob_y").style.visibility = 'visible';
		document.getElementById("gen").style.visibility = 'visible';
		document.getElementById("pn").style.visibility = 'visible';
		document.getElementById("em").style.visibility = 'visible';
		document.getElementById("_visible").style.visibility = 'visible';

		  
	  }

	  function edit2(){

	  	document.getElementById("dept").style.visibility = 'hidden';
		document.getElementById("sem").style.visibility = 'hidden';
		document.getElementById("ay").style.visibility = 'hidden';
		document.getElementById("dob_d").style.visibility = 'hidden';
		document.getElementById("dob_m").style.visibility = 'hidden';
		document.getElementById("dob_y").style.visibility = 'hidden';
		document.getElementById("gen").style.visibility = 'hidden';
		document.getElementById("pn").style.visibility = 'hidden';
		document.getElementById("em").style.visibility = 'hidden';
		document.getElementById("_visible").style.visibility = 'hidden';
	  
	  }

</script>


<?php

require '../dbconnect.php';

	$user = $_SESSION['username'];



		$query = "SELECT * FROM studentinfo WHERE username='$user'";
		$results = mysqli_query($db, $query);

		
	while($row = mysqli_fetch_assoc($results)) {

		
		$username=$row["username"];
		//$clubname=$row["clubname"];
		$full_name=$row["name"];
		$avatar=$row["avatar"];
		$gender=$row["gender"];
		$dob=$row["dob"];
		$email=$row["email"];
		$phone=$row["phone"];
		$dept=$row["dept"];
		$semester=$row["semester"];
		$admissionyear=$row["admissionyear"];
		
	

	}


	
?>







	<div class="profile_container">
		<fieldset>
			<legend align="center"><?php echo $full_name ?></legend>
			
			<table>
				<tr>
					<p id="msg"></p>
					<img id="updateSpinner" src="ajax-spinner-preloader.svg" style="visibility:hidden; margin-left: 47%;margin-right: 47%; margin-top: 20%; position:absolute;
   						z-index:1000; width: 100px;">
					<td>
						
						<div class="profile_1">
							<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
								<div id="image_preview"><img id="previewing" style="height:180px; width:160px; ;display: block; border:5px solid rgba(51, 51, 51, 0.8); margin-left: 12%;" src=<?php echo '../profile_images\\'.$avatar; ?> /></div>
								<div id="selectImage">
								<input type="file" name="file" id="file" required /><br><br>
								<input type="submit" value="UPDATE IMAGE" class="btn" style="width: 171px; margin-left: 12%;" />
								</div>
								<img id="loading" src="ajax-spinner-preloader.svg">
							</form>
							<div id="message"></div>
						</div>
					</td>


		<td class='profile_right'>
				<form action="deactive.php" method="POST" enctype="multipart/form-data">		
				<div class="info_table">
				<table>
					<tr>
						<td><h4>ID :</h4></td>
						<td class="info"><p id="sid"><?php echo $username ?></p></td>
							<td>
							<a onclick="edit();" href="#">Edit</a>
							

						</td>

						<td><a id="_visible" onclick="edit2();" href="#" style="" class="fa fa-eye-slash" aria-hidden="true"></a>

						<script>
		               		document.getElementById("_visible").style.visibility = "hidden";
					   	</script></td>

						

						
					</tr>
					
					<tr>
						<td><h4>Joined Club(s) :</h4></td>
						<td class="info">
						<?php 

							$sql_club = "SELECT * FROM club_relation WHERE user_ID = '$user' and status = 'Y'";
				             $result_club = mysqli_query($db, $sql_club);

				                  
				             while($row_clb = mysqli_fetch_assoc($result_club)) {

				                  echo "<p style='border-bottom: 1px solid #8c8c8c; background-color: black; padding:5px 2px; color: #f2f2f2; border-radius: 5px; text-align: center;'>".$row_clb["club_Name"]."</p>";

				               }

							 ?>
						</td>
						<td><span></span></td>
					</tr>
					<tr>
						<td><h4>Department :</h4></td>
						<td class="info">
						<p id="dpt"><?php echo $dept ?>
						</td>
						<td>
					<select name="dept" id="dept" value="a">
				         <option value="a">Select Department</option selected>
				         <option value="IT">IT</option>
				         <option value="CE">COMPUTER</option>
				         <option value="EE">ELECTRICAL</option>
				         <option value="ME">MECHANICAL</option>
						 <option value="CH">CHEMICAL</option>
						 <option value="CI">CIVIL</option>
						 <option value="EC">EC</option>
						 <option value="NT">NANOTECH</option>
						 <option value="BT">BIOTECH</option>
					 </select> 	
  
					 <script type="text/javascript">
		               document.getElementById("dept").style.visibility = "hidden";
					   		//document.getElementById("dept").style.visibility = 'visible';
                     </script>
					 </td>
					
					
							
					
					</tr>
					<tr>
						<td><h4>Joined Semester :</h4></td>
						<td class="info"><p id="jsptag"><?php echo $semester ?></p></td>
						<td>
							<select name="semester" id="sem" value="a">
						         <option value="a">Select Semester</option selected>
						         <option value="1">1</option>
						         <option value="2">2</option>
						         <option value="3">3</option>
								 <option value="4">4</option>
								 <option value="5">5</option>
								 <option value="6">6</option>
								 <option value="7">7</option>
								 <option value="8">8</option>
							 </select>   
							 <script type="text/javascript">
				               document.getElementById("sem").style.visibility = "hidden";

				 
		                     </script>
						</td>
					
					</tr>
					<tr>
						<td><h4>Admission Year :</h4></td>
						<td class="info"><p id="ayp"><?php echo $admissionyear ?></p></td>
						<td>
						<select id="ay" name="ayear">
					  <option value="">Admission Year</option>
					  <option value="2022">2022</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2019">2019</option>
					  <option value="2018">2018</option>
					  <option value="2017">2017</option>
					  <option value="2016">2016</option>
					  <option value="2015">2015</option>
					</select>
						
						
							 <script type="text/javascript">
		               document.getElementById("ay").style.visibility = "hidden";

		 
                     </script>
						</td>
						
					
					</tr>
					<tr>
						<td><h4>Gender :</h4></td>
						<td class="info"><p><?php echo $gender ?></p></td>
						<td>
						 <select name="gender" id="gen" value="">
				         <option value="">Select Gender</option selected>
				         <option value="Male">Male</option>
				         <option value="Female">Female</option>
				         <option value="Others">Others</option>
					 </select> 
					 
					 	 <script type="text/javascript">
		               document.getElementById("gen").style.visibility = "hidden";

		 
                     </script>
					 
						</td>
					
					</tr>
					<tr>
						<td><h4>DOB :</h4></td>
						<td class="info"><p><?php echo $dob ?></p></td>
						<td>
					<select name="day" class="combine1" id="dob_d"/>
					  <option value="">D</option>
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

					 <select name="month" class="combine1" id="dob_m">
					  <option value="">M</option>
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

					 <select name="year" class="combine1" id="dob_y">
					  <option value="">Y</option>
					  <option value="2005">2005</option>
					  <option value="2004">2004</option>
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
					  <option value="1992">1992</option>
					  <option value="1991">1991</option>
					  <option value="1990">1990</option>
					</select>
						
							 <script type="text/javascript">
		               document.getElementById("dob_d").style.visibility = "hidden";
		               document.getElementById("dob_m").style.visibility = "hidden";
		               document.getElementById("dob_y").style.visibility = "hidden";

		 
                     </script>
						
						</td>
						
					</tr>
					<tr>
						<td><h4>Phone :</h4></td>
						<td class="info"><p><?php echo $phone ?></p></td>
						<td>
						<input type="text" id="pn"  placeholder="Phone Number" value="" name="spn"/>	
						
								 <script type="text/javascript">
		               document.getElementById("pn").style.visibility = "hidden";

		 
                     </script>
						
						</td>
					
					</tr>
					<tr>
						<td><h4>Email :</h4></td>
						<td class="info"><p><?php echo $email ?></p></td>
						<td>
						<input type="text" id="em"  placeholder="Email" value="" name="smail"/>	
					<script type="text/javascript">
		               document.getElementById("em").style.visibility = "hidden";

		 
                     </script>
						
						</td>
					
					</tr>

					<tr>
						<td>

							<input  class="btn" type="submit" value="DEACTIVATE" name="deactivate">
						</td>
						<td>

							<input  class="btn" type="button" value="UPDATE PROFILE" onclick="updateProfile()"
							></td>

					</tr>
								
				</table>
			</div>
					</form>
					</td>
				</tr>

			</table>
		
			
		</fieldset>
		
	
</div>





<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');

/*.profile_right{
	padding-left: 75px;

}



.success_wrap{

	margin-top: 10px;
	width: 210px;
	height: 200px;
	border: 1px dashed #333;
	background-color: rgba(51, 51, 51,0.6);
	padding: 5px 10px;
	border-radius: 10px;
	word-wrap: break-word;
	color: #e6e6e6;
}





#file {
color: #fff;
padding: 5px;
border: 2px solid #8c8c8c;
background-color: rgba(38, 38, 38,0.6);
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
width: 190px;
margin-left: 7px;
}




#success
{
color:#f2f2f2;
font-weight: bold;
}


#error
{
color:red;
}


#loading
{
display:none;

width: 100px;
height: 60px;
margin-left: 30%;
margin-right: 30%;
}




	tr td h4{
		width: 140px;

	}
	
	.profile_container{
	position: relative;
	left:17%;
	right:22%;
	top:20%;
	bottom: 20%;
	width: 58%;
	height: auto;
	background-color:white;
	box-shadow:2px 5px 20px rgba(119,119,119,0.5);
	border-radius:10px;
	padding-top: 15px;
	padding-bottom: 2%;
	padding-left: 2%;
	padding-right: 2%;
	margin-bottom: 15%;
	}

legend{
	font-size: 25px;
	font-weight: bold;

	}

	.info{
		padding-left: 20px;
		
	}

	.info p{
		font-size: 15px;
		font-weight: bold;
	}

	.profile_container h4{
		font-size: 17px;
		font-weight: normal;

	}

	
.btn, .info_table a {
	position: relative;
	
	cursor : pointer;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	font-size: 15px;
	background-color: rgba(51, 51, 51,0.8);
	color: #fff;
	border: 1px solid rgba(255, 255, 255, 0.15);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
	border-radius: 2px;
	padding: 10px 30px;
	transition: 0.3s;
}

.btn:hover,
.btn:focus, .info_table a {
  background-color: rgba(51, 51, 51,1);
}




table{
	margin-top: 20px;
	margin-left: 10px;
}


.info_table a{


	text-decoration: none;
	color: #f2f2f2;
	/*border: 1px solid #4d4d4d;
	border-radius: 2px;
	background-color: rgba(51, 51, 51,0.6);
	padding: 2px 10px;
	margin: 5px 0;

}


.info_table a:hover{
	color: #f2f2f2;
	background-color: rgba(51, 51, 51,1);

}

.info_table{
	
	
	margin-bottom: 5%;
	margin-left: 0;


}

td h4, td p{
	border-bottom: 1px solid rgba(100,100,100,1);
}

select,
textarea,
input[type="text"],
input[type="password"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgb(255, 255, 255);
  background-color: rgba(255, 255, 255, 0.8);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

#submit{

	margin-top:10px;
	margin-left: 20%;

}

.profile_1{
margin-bottom: 90%;

}


.combine1{

	width: 54px;
}

#_visible{
	 background-color: rgba(255, 77, 77,0.6);
	 margin-top:10px;
	 padding: 6px 10px;
	 text-decoration: none;
	 color: #fff;"
}

.info_table #_visible:hover{
	background-color: rgba(255, 77, 77,1);
}*/
body{
	background:white;
}
.profile_right{
	padding-left: 75px;

}



.success_wrap{

	margin-top: 10px;
	width: 210px;
	height: 200px;
	border: 1px dashed #333;
	background-color: rgba(51, 51, 51,0.6);
	padding: 5px 10px;
	border-radius: 10px;
	word-wrap: break-word;
	color: #e6e6e6;
}





#file {
color: #fff;
padding: 5px;
border: 1px solid black;
background-color: black;
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
width: 190px;
margin-left: 7px;
}




#success
{
color:#f2f2f2;
font-weight: bold;
}


#error
{
color:red;
}


#loading
{
display:none;

width: 100px;
height: 60px;
margin-left: 30%;
margin-right: 30%;
}




	tr td h4{
		width: 140px;

	}
	
	.profile_container{
	position: relative;
	left:17%;
	right:22%;
	top:20%;
	bottom: 20%;
	width: 60%;
	height: auto;
	background-color: white;
	padding-top: 15px;
	padding-bottom: 2%;
	padding-left: 2%;
	padding-right: 2%;
	margin-bottom: 15%;
	border-radius:15px;
	color:black;
	box-shadow:2px 5px 20px rgba(119,119,119,0.5);
	font-family: 'Montserrat', sans-serif;
	}

legend{
	font-size: 25px;
	font-weight: bold;

	}

	.info{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  /*border: 1px solid #ccc;
  border-bottom-width: 2px;*/
  transition: all 0.3s ease;		
 }

	.info p{
		font-size: 15px;
		font-weight: bold;
	}

	.profile_container h4{
		font-size: 17px;
		font-weight: normal;

	}

	
   .info_table a {
	position: relative;
	cursor : pointer;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	font-size: 15px;
	background-image: linear-gradient(62deg, black 0%, #2e2d2d 100%);
	color: #fff;
	border:black;
	box-shadow: 0 0 rgba(0, 0, 0, 0);
	border-radius: 2px;
	padding: 10px 30px;
	transition: 0.3s;
}
.button{
	position:relative;
	left:260px;
	align-items:center;
	margin:auto;
}
.btn{
	color: #fff;
	background-image: linear-gradient(62deg, black 0%, #2e2d2d 100%);
	font-family: 'Montserrat', sans-serif;
	margin:auto;
	border-radius: 2px;
	padding: 10px 30px;
	cursor : pointer;
	font-weight:bold;
}

.btn:hover,
.btn:focus, .info_table a {
	background-image: linear-gradient(250deg, black 0%, #2e2d2d 100%);
}




table{
	margin-top: 20px;
	margin-left: 10px;
}


.info_table a{


	text-decoration: none;
	color: white;
	/*border: 1px solid #4d4d4d;
	*/border-radius: 2px;
	background-color: black;
	padding: 2px 10px;
	margin: 5px 0;

}


.info_table a:hover{
	color: #f2f2f2;
	background-color: rgba(51, 51, 51,1);

}

.info_table{
	
	
	margin-bottom: 5%;
	margin-left: 0;


}

 td p{
	border-bottom: 3px solid rgba(100,100,100,1);
	text-align:left;
}
td p:hover{
	background-image: linear-gradient(250deg, black 0%, #2e2d2d 100%);
    border:3px solid black;
	transition:0.3s;
	color:white;
}
 td h4:hover{
	 border-bottom:3px solid black;
	 transition:0.2s;
 }


/*select,
textarea,
input[type="text"],
input[type="password"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgb(255, 255, 255);
  background-color: rgba(255, 255, 255, 0.8);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}*/

#submit{

	margin-top:10px;
	margin-left: 20%;

}
#sem,#dept,#DOB,#ay,#em,#gen,#pn,#dob_d,#dob_m,#dob_y{
	border:none;
	border-bottom:3px solid black;
}
#sem,#dept,#DOB,#ay,#em,#gen,#pn,#dob_d,#dob_m,#dob_y{
	border:none;
	border-bottom:3px solid black;
}


.profile_1{
margin-bottom: 90%;

}


.combine1{

	width: 54px;
}

#_visible{
	 background-color: rgba(255, 77, 77,0.6);
	 margin-top:10px;
	 padding: 6px 10px;
	 text-decoration: none;
	 color: #fff;"
}

.info_table #_visible:hover{
	background-color: rgba(255, 77, 77,1);
}

</style>