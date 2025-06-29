<?php include 'event_handler.php'; 


$club_id_session = $_SESSION['moderator_Club_ID'];
$Club_Name_session = $_SESSION['moderator_Club_Name'];
?>


<style type="text/css">


body{
	background-image:linear-gradient(to right,#fff,#fff);
	height:3000px;
}
.msg_btn {

	margin-top: 20%;
	cursor: pointer;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	font-size: 17px;
	text-shadow: 2px 2px 4px #666666;
	height: 45px;
	width: 200px;
	background-color: black;
	color: #fff;
	border: 1px solid rgba(255, 255, 255, 0.15);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
	border-radius: 2px;
	-webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
	transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.msg_btn:hover,
.msg_btn:focus {
  background-color: #862d59;
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.right_wrap{

	float: right;
	border: 1px solid #000;
	margin: 80px 20px;
	padding: 0px 0 60px 0;
	background-color : rgba(15, 15, 15,0.7);
	border: 3px inset #bfbfbf;
	border-radius: 10px;
	width: 300px;
}
	

</style>








<script type="text/javascript">


function postEvent(){

	var flag = true;
	
	a = document.getElementById("err_msg");
	

	if(document.event_form.fileToUpload.value.length==0 || document.event_form.ev_head.value.length==0 || document.event_form.ev_head.value.length==0 || document.event_form.event_box.value.length==0 || document.event_form.venue.value.length==0 || document.event_form.capacity.value.length==0 || document.event_form.day.value.length==0 || document.event_form.month.value.length==0
	|| document.event_form.year.value.length==0 || document.event_form.time.value.length==0 || document.event_form.day_night.value.length==0){

	
		a.innerHTML = "Some fields are empty.";
		a.style.color="#fff";
		a.style.padding = "5px 10px 5px 10px";
		a.style.width = "250px";
		a.style.borderRadius= "2px";
		a.style.margin = "0px 38% 20px 38%";
		a.style.backgroundColor= "#CF4847";
		flag = false;
	}


return flag;

}
</script>




<div class="mod_wel">Welcome to <?php echo $_SESSION['moderator_Club_Name']; ?></div>


<div class="join_request" style="margin-top: 30px;">



	<form enctype="multipart/form-data" method="POST" name="event_form" id="event_form" action="">

<?php 

	include('ev_error.php');

 ?>

		<h3>EVENTS:</h3>
		<p id="err_msg"></p>
		<div class="event">
			<label>Select Image : </label>
			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>

			<input type="text" name="ev_head" id="ev_head" size="66" style="padding: 5px 0px 5px 5px;" placeholder="Write Event Header"><br><br>

			<textarea name="event_box" id="event_box" style="padding: 10px 0 0 10px;" rows="2" cols="50" placeholder="Write Event Detail here" size="200"></textarea>
		</div><br>


		<input type="text" name="venue" id="venue" placeholder="Venue"><br>

		<input type="text" name="capacity" id="capacity" placeholder="Capacity"><br><br>

		Date :
		<select name="day" class="combine" id="ev_d"> 
			  <option value="">Day</option>
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

			 <select name="month" class="combine" id="ev_m">
			  <option value="">Month</option>
			  <option value="01">Jan</option>
			  <option value="02">Feb</option>
			  <option value="03">Mar</option>
			  <option value="04">Apr</option>
			  <option value="05">May</option>
			  <option value="06">Jun</option>
			  <option value="07">July</option>
			  <option value="08">Aug</option>
			  <option value="09">Sep</option>
			  <option value="10">Oct</option>
			  <option value="11">Nov</option>
			  <option value="12">Dec</option>
			</select>

			 <select name="year" class="combine" id="ev_y">
			  <option value="">Year</option>
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			  <option value="2025">2025</option>
			  <option value="2026">2026</option>
			</select><br><br>


		Time :
		<select name="time" class="combine1" id="ev_t">
			  <option value="01:00">01:00</option>
			  <option value="02:00">02:00</option>
			  <option value="03:00">03:00</option>
			  <option value="04:00">04:00</option>
			  <option value="05:00">05:00</option>
			  <option value="06:00">06:00</option>
			  <option value="07:00">07:00</option>
			  <option value="08:00">08:00</option>
			  <option value="09:00">09:00</option>
			  <option value="10:00">10:00</option>
			  <option value="11:00">11:00</option>
			  <option value="12:00">12:00</option>
			  <option value="13:00">13:00</option>
			  <option value="14:00">14:00</option>
			  <option value="15:00">15:00</option>
			  <option value="16:00">16:00</option>
			  <option value="17:00">17:00</option>
			  <option value="18:00">18:00</option>
			  <option value="19:00">19:00</option>
			  <option value="20:00">20:00</option>
			  <option value="21:00">21:00</option>
			  <option value="22:00">22:00</option>
			  <option value="23:00">23:00</option>
			  <option value="00:00">00:00</option>
		</select>
<br><br>


		<input type="submit" onclick = "return postEvent();" value="Post Event" name="post_event" class="btn btn-block btn-primary"/>
	</form>
</div>
<br>
<div>


<script type="text/javascript">	
function Notice() {


    var msg = document.getElementById('notice_msg');

	if(document.notice_form.notice_box.value.length==0){

		msg.innerHTML = "Write notice first.";
		msg.style.color="#b35c00";
		msg.style.padding = "5px 10px 5px 10px";
		msg.style.width = "250px";
		msg.style.borderRadius= "2px";
		msg.style.margin = "0px 35% 20px 35%";
		msg.style.backgroundColor= "#ffe6cc";

	}

	else{

	var	user = "<?php echo $_SESSION['moderator_name']; ?>";
	var	club = "<?php echo $_SESSION['moderator_Club_ID']; ?>";
	var xmlhttp = new XMLHttpRequest();
    var str=document.getElementById('notice_box').value;

    var ntc_all = 0;

    document.getElementById("ntc_spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {

		document.getElementById("ntc_spinner").style.visibility= "hidden";
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
	
		msg.innerHTML = xmlhttp.responseText ;
		
		}
	};
 	var url="notice.php?notice="+str+"&user="+user+"&club="+club;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	}
}
	

</script>
<div class="join_request" style='width: 60%;'>
	<form  action="notice.php" method="GET" name="notice_form">
		<h3>Post Notice :</h3>
		<img id="ntc_spinner" src="loading.gif" width="23px" height="23px" style="visibility:hidden; position: relative;">
		<p id="notice_msg"></p>

		<textarea style="padding: 10px 0 0 10px; height: 200px; width: 70%;" rows="4" cols="50" name="notice_box" id="notice_box" placeholder="Write Notice here" size="500"></textarea><br>

	<button class="btn btn-block btn-primary" type="button" onclick="Notice()">Post Notice</button> 
	</form>
	
</div>
<br>
</div>

 <div class="mng_zone">Manage Zone</div>

<?php 

	if(isset($_GET['decision'])){
 		   	
 		   	echo "<div style=

					'color: #b35c00;
					background-color: #ffe6cc;
					padding: 5px 0;
					border-radius: 2px;
					width:300px;
					margin-left: 40%;
					margin-right: 40%;
					margin-top: 20px;
					margin-bottom: 20px;
					text-align: center;
					border:1px solid #cc6900;'
					>".$_GET['decision']."</div>";

 		   
			}
			else{
				echo "";
			}

 ?>


<div class="join_request">
	
	<h3>Join Requests :</h3>

<table class="join_table">

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th>Name</th>
		<th>Request Date</th>
		<th>State</th>
		<th colspan='2'>Accept/Reject</th>
	</tr>

<?php
	
	$sql = "SELECT * FROM studentinfo WHERE clubID = $club_id_session AND (is_active='N' OR is_active='D')";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {

		echo "<div class='.show_m' style='font-family: Montserrat,sans-serif; color: #fff; font-size: 16px; background-color: #46a049; padding: 5px 5px;'>New request(s)!</div>";

		while($row = mysqli_fetch_assoc($result)) {

	    	$_SESSION['user'] = $row["username"];
	    	
	    	echo "<tr>
	    			<td>" . $row["clubname"]."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>";

	    		if($row["is_active"]=='D')
	    		{
	    		echo "<td style='background-color: rgba(230, 115, 0,0.9);'>Deactivated</td>";
	    		}
	    		else{
	    			echo "<td>".$row["is_active"]."</td>";
	    		}

	    	echo "<td>
                <a style='color:black;' href='approve.php?username=". $row["username"]."&value=Y'><i class='cmnrow fa fa-check' aria-hidden='true'></i></a>
                <a style='color:black;' href='approve.php?username=". $row["username"]."&value=X'><i class='cmnrow fa fa-times' aria-hidden='true'></i></a>
			</td>
			</tr>";


	    }



	} else {
	    echo "No Request";
	}

	
	
?>

	</table>




</div>
<br>

<div class="join_request">
	
	<h3>CLUB REQUEST:</h3>


<table  class="join_table" align='center'>

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th>State</th>
		<th colspan='3'>Accept/Reject</th>
	</tr>

<?php
	
	

	$sql_clb = "SELECT DISTINCT club_relation.* FROM club_relation RIGHT JOIN studentinfo ON club_relation .user_ID = studentinfo .username WHERE club_relation .status='N' AND studentinfo .is_active = 'Y' AND club_ID = $club_id_session";

	$result_clb = mysqli_query($db, $sql_clb);
	if (mysqli_num_rows($result_clb) > 0) {
	   
	   echo "<div class='.show_m' style='font-family: ROBOTO,helvetica; color: #fff; font-size: 16px; background-color: #46a049; padding: 5px 5px;'>New club join request(s)!</div>";

  
	    while($row = mysqli_fetch_assoc($result_clb)) {

	    	
	    	echo "<tr class='club_row'>
	    			<td>" . $row["club_Name"]."</td>".
    				"<td>" . $row["user_ID"]."</td>".
	    			"<td>" . $row["status"]."</td>".
	    			"<td>";

            echo "<a style='color:black;' href='club_approve.php?username=". $row["user_ID"]."&value=Y'><i class='cmnrow fa fa-check' aria-hidden='true'></i></a>
                <a style='color:black;' href='club_approve.php?username=". $row["user_ID"]."&value=X'><i class='cmnrow fa fa-times' aria-hidden='true'></i></a>
         
				
			</td>
			</tr>";


	    }
	}else {
	    echo "0 results";
	}

	
?>

	</table>

<script type="text/javascript">
	

	$(function() {
	$(".club_accept").click(function(){
	var element = $(this);
	var id = element.attr("id");
	
	 $.ajax({
	   type: "POST",
	   url: "accept_club.php",
	   data:{'id':id},

	});
	  $(this).parents(".club_row").animate({ backgroundColor: "#003" }, "slow")
	  .animate({ opacity: "hide" }, "slow");

	});
	});



	$(function() {
	$(".club_reject").click(function(){
	var element = $(this);
	var idR = element.attr("id");

	 $.ajax({
	   type: "POST",
	   url: "accept_club.php",
	   data:{'idR':idR},
	});
	  $(this).parents(".club_row").animate({ backgroundColor: "#003" }, "slow")
	  .animate({ opacity: "hide" }, "slow");

	});
	});
</script>


</div>

<br>
<br>
<div class="join_request">
	
	<h3>Member List :</h3>


<table  class="join_table">

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th colspan='2'>Name</th>
		<th>Request Date</th>
		<th>State</th>
		
	</tr>

<?php

	
	$sql = "SELECT * FROM studentinfo WHERE username IN(SELECT user_ID from club_relation where club_ID= '$club_id_session')";
	$result = mysqli_query($db, $sql);


	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {

	    	$_SESSION['user'] = $row["username"];
	    	
	    	echo "<tr>
	    			<td>" . $Club_Name_session."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td colspan='2'>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>".
	    			"<td>".$row["is_active"]."</td>".
	    			"</tr>";


	    }
	} else {
	    echo "No Members";
	}

	
	
?>
	
	</table><br>
	<button class='button' id='viewDetail'>View All info</button>
</div>
<?php include 'viewInfo.php'; ?>

<?php include 'notice_list.php'; ?>

<br><br>
<?php 

	if(isset($_GET['eventlist'])){
 		   	
 		   	echo "<div style=

					'color: #b35c00;
					background-color: #ffe6cc;
					padding: 5px 0;
					border-radius: 2px;
					width:300px;
					
					margin-top: 20px;
					margin-bottom: 20px;
					margin-left: 40%;
					margin-right: 40%;
					text-align: center;
					border:1px solid #cc6900;'
					>".$_GET['eventlist']."</div>";

 		   
			}
			else{
				echo "";
			}

 ?>





	<div class="join_request">
		
		<h3>Event List</h3>
		<table>
				<tr class="t_head">
					<th>Event Image</th>
					<th>Name</th>
					<th>Detail</th>
					<th>Venue</th>
					<th>Date</th>
					<th>Time</th>
					<th>Capacity</th>
					<th>Delete</th>
				</tr>
				
<?php
	include '../../dbconnect.php';
	$sql = "SELECT * FROM event_table WHERE club_ID = '$club_id_session'";
	$result = mysqli_query($db, $sql);



	if (mysqli_num_rows($result) > 0) {
	   
	    while($row = mysqli_fetch_assoc($result)) {

	    	
	    	echo "<tr>
	    			<td><img src='../../slider\\".$row["event_img"]."' alt='slider image' style='width:100px; height: 50px;'>
	    			</td>".
	    			"<td>" . $row["event_head"]."</td>".
	    			"<td><div class='long_text'>" . $row["event_detail"]."</div></td>".
    				"<td>" . $row["venue"]."</td>".
	    			"<td>" . $row["date"]."</td>".
	    			"<td>" . $row["time"]."</td>".
	    			"<td>".$row["capacity"]."</td>".
	    			"
	    			<td>
               
                <a class='cross' style='color:black;'  href='event_delete.php?id=". $row["id"]."&value=N'><i class='cmnrow fa fa-times' aria-hidden='true'></i></a>
             				
				</td>

	    		</tr>";


	    }
	} else {
	    echo "0 results";
	}

	
	
?>
</table>

</div>


<br><br>

<div class="join_request">
		
		<h3>Event Joined Member List</h3>
		<table>
				<tr>
					<th>Event Name</th>
					<th>Member Name</th>
					<th>Member ID</th>
				</tr>
				
<?php



	$sql = "SELECT a.* , b.*, c.* FROM event_table a, event_join b, studentinfo c where a .id= b .event_ID and b .joined_Member_ID = c .username and b .club_ID = '$club_id_session' and b .show_Event = 'Y'";

	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
	   
	    while($row = mysqli_fetch_assoc($result)) {

	    	
	    	echo "<tr>
					<td>" . $row["event_head"]."</td>".
    				"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["username"]."</td>
	    		</tr>";


	    }
	} else {
	    echo "0 results";
	}

	
	
?>
</table>

</div>








	<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');

	.eventClass{
		color: black;
			border: 3px solid white;
			border-radius: 10px;
			margin:auto;
			padding-bottom: 20px;
			background-color :white;
			box-shadow:2px 5px 20px rgba(119,119,119,0.5);
			width: 60%;
	}


   .button{
	   width:150px;
	   height:30px;
	   text-transform:uppercase;
	   color:white;
	   border:1px solid black;
	   background:black;
	   border-radius:10px;
	   font-family:'Montserrat',sans-serif;
   }
	.mod_wel{

		font-weight: bold;
		font-family:font-family: 'Montserrat', sans-serif;
		background-color: black;
		color: #D8D8D9;
		padding: 10px 0;
		font-size: 19px;
		border-top: 1px solid #D8D8D9;

	}
	.cmnrow fa fa-times:hover{
      color:white;
	}

	.join_request .fa-times:hover{
		background-color: #ff3333;
		padding: 3px 4.3px 4.3px 4px;
		border-radius: 30px;
		margin: -5px 11px;
	}
	.join_request .fa-check:hover{
		background-color: #66cc00;
		padding: 3px 4px 4px 3px;
		border-radius: 30px;
		margin: -5px 11px;
	}
	.join_request .fa-street-view:hover{
		background-color: #ffcc00;
		padding: 3px 3px 5px 3px;
		border-radius: 30px;
		margin: -5px 12px;
	}


	.cmnrow{
		padding: 0 10px;
		transition: 300ms;
	}



		
		.join_request table tr th{
			padding: 0px 40px 0px 40px;


		}

		.join_request th{
			border: 1px solid black;
			border-collapse:collapse;
			width:50%;
			text-transform:uppercase;
		}

		.join_request h3{
			color: white;
			background:black;
			padding: 20px 0;

		}

			.join_request{

			color: black;
			border: 3px solid white;
			box-shadow:2px 5px 20px rgba(119,119,119,0.5);
			border-radius: 10px;
			margin: auto;
			padding-bottom: 20px;
			background-color:white;
			width: 80%;
		}

		.join_request tr td{
			width: 60%;
			word-wrap: break-word;
			padding: 5px 0;
			border: 1px solid black;
			border-bottom-width: 1px;
			word-break: break-word;
		}


		.long_text{
			width: 280px;
			height: auto;
			overflow: auto;
			word-break: break-all;
			background-color: white;
			color: #333;
		}

	
textarea
{
    font-family: 'Montserrat', sans-serif;
	height:130px;
	width:50%;
	display: inline-block;
	vertical-align: middle;
	padding: 0 10px;
	margin-top: 3px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 20px;
	border: 2px solid white;
	background-color: white;
	box-shadow:2px 5px 20px rgba(119,119,119,0.5);
	color: rgba(0, 0, 0, 0.7);
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border-radius: 2px;
}

input[type="text"],
input[type="password"],
input[type="email"]
{
	font-family: 'Montserrat', sans-serif;
  height:30px;
  width:50%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  border: 2px solid white;
  box-shadow:2px 5px 20px rgba(119,119,119,0.5);
  background-color: white;
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}
h3{
	font-family: 'Montserrat', sans-serif;
	text-transform:uppercase;
}
	select{
		font-family: 'Montserrat', sans-serif;
  height:30px;
  width:15%;
  display: inline-block;
  vertical-align: middle;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  border: 2px solid white;
  background-color: white;
  box-shadow:2px 5px 20px rgba(119,119,119,0.5);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
	}



.btn {
	font-family: 'Montserrat', sans-serif;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 14px;
  line-height: 20px;
  height: 32px;
  width:100px;
  background-image:linear-gradient(62deg, black 0%, #2e2d2d 100%);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 10px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.btn:hover,
.btn:focus {
	cursor: pointer;
  background-image:linear-gradient(200deg, black 0%, #2e2d2d 100%);
  color: #fff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.mng_zone{

	border: 1px solid black;
	text-align: center;
	padding: 10px 0;
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f85032+0,f16f5c+50,f6290c+51,f02f17+71,e73827+100;Red+Gloss+%231 */
	background-color:black; /* Old browsers */
    color: #fff;
	text-transform:uppercase;
	width: 80%;
	margin: 0 10% 5px 10%;
	font-size: 23px;
	font-weight: bold;
	font-family: 'Montserrat', sans-serif;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px; 
}






	</style>