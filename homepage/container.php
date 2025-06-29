
<?php 

	include '../dbconnect.php';

	$clubID = $_SESSION['clubID'];
	$username = $_SESSION['username'];

	$qry ="SELECT notification.* FROM notification RIGHT JOIN event_join ON notification .eventID = event_join .event_ID WHERE event_join .joined_Member_ID = '$username' AND show_Event = 'Y' AND notification .club_ID = '$clubID' AND '$username' NOT IN (SELECT notif_seen .userID FROM notif_seen WHERE notif_seen .notifID = notification .id AND notif_seen .seen_unseen = 'seen') ORDER BY notification .id DESC";// AND notification .id=(SELECT MAX(id) FROM notification)";

	$rslt = mysqli_query($db, $qry);

	if (mysqli_num_rows($rslt) > 0) {

		while($row = mysqli_fetch_assoc($rslt)) {

		$notificationID = $row['id'];
?>
		<div id="notificationModal" class="notif_modal">
		  <div class="notif_Modal_content">
		    <div class="notif_Modal_header">
		      <span class="notif_close">&times;</span>
		      <h2 align="center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Notification</h2>
		    </div>
		    <div class="notif_Modal_body">
		    
		      <p>

		      	<?php



		      	echo $row['message'];
		      	

		      	 echo "<p class='notifTime'>Updated ";
		      	 echo timeAgo($row["date_time"]);
		      	 echo "</p>";

		      	?>
		      	</p>
		     
		    </div>
		    
		  </div>

		</div>
	<?php
		
		}
	}


?>







<script>

var notificationModal = document.getElementById('notificationModal');
var notif_close = document.getElementsByClassName("notif_close")[0];

window.onscroll  = function() {
    notificationModal.style.display = "block";
}

notif_close.onclick = function() {

	window.onscroll  = function() {
    notificationModal.style.display = "none";
}

    notificationModal.style.display = "none";

	var xmlhttpp = new XMLHttpRequest();
    
    var user = "<?php echo $_SESSION['username']; ?>";
    var notifID = "<?php echo $notificationID; ?>";
 
	xmlhttpp.onreadystatechange = function() {
	
	if (xmlhttpp.readyState == 4 && xmlhttpp.status == 200) {

		a.innerHTML=xmlhttpp.responseText;;
		
		}
	};
 	var url="notificationShown.php?user="+user+"&notifID="+notifID;

	xmlhttpp.open("POST", url,true);
	xmlhttpp.send();

}

</script>
















<script type="text/javascript">


	function notice_history(){

    var e = document.getElementById("old_notice");
    if(e.style.display == null || e.style.display == "none") {
        e.style.display = "block";

        
    } else {
        e.style.display = "none";

    }


		
	}


</script>



<div class="container-wrap">

<div class="container">

		<h5><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;NOTICE</h5>

		<div class="notice">
			<div class="notice_show">
				<p><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;<?php echo $_SESSION['notice']; ?>
				<i class="fa fa-quote-right" aria-hidden="true"></i><i onclick="notice_history()" style="float: right;" class="fa fa-history" aria-hidden="true"></i></p>
			</div>
			<div id="old_notice" class="old_notice">

				<?php
				if(strcmp($_SESSION['notice_time'],"---")!=0){

				$clubID = $_SESSION['clubid'];
				$notice_id = $_SESSION['notice_id'];

				$qry = "SELECT * FROM notice_table WHERE club_ID ='$clubID' AND id <> $notice_id";

				$rslt = mysqli_query($db, $qry);

				if (mysqli_num_rows($rslt) > 0) {

					while($row = mysqli_fetch_assoc($rslt)) {

					echo "<div class='old_notice_content'>

						<p>".$row['notice']."</p>
						<p style='font-size: 13px;'>Time : ".$row['time_date']." |
						Posted by : ".$row['posted_by']."</p>

					</div>";
					
					}
				}
			}
				else{
					"<div class='old_notice_content'>

						<p>.....</p>

					</div>";
				 
				}
?>
			</div>

			<div class="notice_tbl_wrap">
			<table  class="notice_tbl">
				<tr>
					
					<td><p>Date/Time : <?php echo $_SESSION['notice_time']; ?></p></td>
					<td class="notice_by"><p>Posted by : <?php echo $_SESSION['notice_by']; ?></p></td>
					
				</tr>
			</table>
			</div>
		</div>



<?php 

include 'join-event.php'; ?>


<div class="event_wrap">
	<h5><i class="fa fa fa-list" aria-hidden="true"></i><a name="event"></a>&nbsp;JOIN EVENTS</h5>
		

<table  class="common_tbl" align='center'>

		

<?php
	
	$clubID = $_SESSION['clubID'];

	$sql = "SELECT et.* FROM event_table et WHERE NOT EXISTS (SELECT ej. event_ID FROM event_join ej WHERE et .id = ej .event_ID AND ej .joined_Member_ID = '$username' AND (ej .show_Event = 'Y' OR ej .show_Event = 'N'))  AND et .club_ID = '$clubID' ORDER BY id DESC";

	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {

		echo '<tr class="t_head">
				<th>Name</th>
				<th>Venue</th>
				<th>Date</th>
				<th>Time</th>
				<th>Capacity</th>
	
				<th colspan="2" id="t_join">Join</th>
			</tr>';
	    while($row = mysqli_fetch_assoc($result)) {

	    	
	    	echo "<tr id='".$row["id"]."'>
    			<td>" . $row["event_head"]."</td>".
				"<td>" . $row["venue"]."</td>".
    			"<td>" . $row["date"]."</td>".
    			"<td>" . $row["time"]."</td>".
    			"<td>" . $row["capacity"]."</td>".
    			"<td>
            	<a style='color:#333333;' href='join-event.php?eventid=". $row["id"]."&userid=".$_SESSION['username']."&clubid=".$_SESSION['clubID']."&value=N'><i class='cmnrow fa fa-times n' aria-hidden='true'></i></a>
            	<a style='color:#333333;' href='join-event.php?eventid=". $row["id"]."&userid=".$_SESSION['username']."&clubid=".$_SESSION['clubID']."&value=Y'><i class='cmnrow fa fa-check y' aria-hidden='true'></i></a>
				</td>
				</tr>";
	}
	} else {
	    echo "No event available.";
	}

	
	
?>
	
	</table>
	<div class="evnt_bottom"></div>
	<div style="float: right; margin-right: 5px; margin-top: 10px;">
		<button class="btn" id="viewDetail">VIEW DETAILS</button>
	</div>
</div>

<?php include 'eventDetail.php'; ?>
		
</div>



<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');
.notifTime{
	
	margin-top: 10%;
	color: #595959;
	font-size: 15px;
}



/* The Modal (background) */
.notif_modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}
.main-nav li.logout a:hover{

border-color: black;
background-color:black;
color: #fff;
}

/* Modal Content */
.notif_Modal_content {
	border-radius: 10px;
    position: relative;
    background-color: #f2f2f2;
    margin: auto;
    padding: 0;
    width: 50%;
    height: 400px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    text-align: center;
     color: !

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The notif_close Button */
.notif_close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.notif_close:hover,
.notif_close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.notif_Modal_header {
    padding: 2px 16px;
    background-color: #F65656;
    color: white;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}

.notif_Modal_body {
	font-family: Titillium,ROBOTO,helvetica;
	padding: 2px 16px;
	font-size: 1.6em;
	font-weight: bold;
	color: #000;
	position: absolute;
	border:1px solid white;
	top: 50%;
	left: 50%;
	transform: translateX(-50%) translateY(-50%);
	text-shadow: -10px 3px 10px #737373;

}




.fa-exclamation-circle{

	margin-right: 10px;
	
}







#spinner{

	margin-left:43.5%;
	margin-right:43.5%;
	margin-bottom: 10px;
}




.event_wrap{
	width: 100%;
	padding-bottom: 50px;
	width: 810px;
}







.evnt_bottom{
	height: 32px;
	width: 85%;
	background-color:black;
	float: left;
	margin-top: 10px;
	border-bottom-left-radius: 10px;
}


	
.btn {

font-family:'Montserrat',sans-serif;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 12px;
  line-height: 20px;
  height: 32px;
  background-color:black;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-bottom-right-radius: 10px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  padding: 5px 10px;
}

.btn:hover,
.btn:focus {
	cursor: pointer;
  /*background-color: white;
  color:black;
  border:1px solid white;
  border-color:white;
  box-shadow: 0 0 rgba(0, 0, 0, 0);*/
}


	.cmnrow{
		padding: 0 15px;
		-webkit-transition-timing-function: ease;
		font-size: 16px;
		transition: 0.3s;
	}

	.y{
	padding: 5px 5px;
	border-radius: 30px;
	margin-left: 5px;
	}

	.n{
	padding: 5px 6px;
	border-radius: 30px;
	margin-right: 5px;
	}

	.y:hover{
	background-color: #66cc00;	
	color: #fff;
	font-size: 18px;
	}
	
	.n:hover{
	background-color: #e60000;
	color: #fff;
	font-size: 18px;
	}

	.notice_tbl tr .notice_by{
		padding-left: 400px;
	}

	.notice_tbl_wrap{

		padding: 1px 1px 1px 1px;
		border: 1px solid black;
		background-color: black;
		color:white;

	}

	.notice_tbl tr td p{
		font-size: 13px;
	}


	.container-wrap{
		
		background-color: white;
		border-radius: 10px;
		border: 1px solid #bfbfbf;
		padding-bottom: 70px;
		margin:7% 17%;
		height:auto;
		overflow: auto;
		width: 1010px;
		box-shadow:2px 5px 20px rgba(119,119,119,0.5);
}
	

	
	.notice{
		width: 810px;
		background-color: black;
		color: white;
		border-radius: 5px;
		border: 1px solid white;
        }

	.notice_show{
		height: 100%;
		overflow: hidden;
		word-wrap: break-word;

	}

	.notice p{
		font-size: 18px;
		padding: 10px 10px;
		font-family: Tw Cen MT,ROBOTO,helvetica;
	}

	.old_notice{
		display: none;
		overflow: hidden;
		word-wrap: break-word;

	}



	 .common_tbl{
		background-color: white;
		color: black;
		border-collapse:collapse;
	}

	.common_tbl td {
    border: 1px groove black;
    border-radius: 0px;
	border-collapse:collapse;

    text-align: center;
}

.common_tbl th{
	border: 2px solid #808080;
	width: 200px;
	border-collapse:collapse;
}

	.event{
		margin-top:30px;
		margin-left: 10%;
		width: 80%;
		text-align: center;

	}

	.t_head td{
		font-size: 20px;
		font-weight: bold;
		text-decoration:underline;
		color:white;
		padding: 0 40px;
	}

	#t_join{
		padding: 0 70px;
	}




	
.container{
	margin: 2% 10%;
}

.c_img img{
	top:10%;
	border: 1px solid #333333;
	border-radius: 50%;
	margin: 0 1%;
	margin-top: 1%;
}

.c_name{

	padding-left: 20px;
	font-size: 18px;
	font-weight: bold;
	text-decoration: none;
	font-family: Tw Cen MT, Lato;
	color: #262626;

}



.c_text{

	padding: 0 2%;
	color: #000;
    overflow: auto;
    border-radius: 0px;
}



h5{
	margin-top: 60px;
	font-family: Tw Cen MT, Lato;
	background-color:black;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: white;
	border-top: 2px solid black;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	margin-bottom: 10px;
	width: 810px;
	
}




.fa-history{
	transition: all .2s ease-in-out;
	cursor: pointer;
}
 


.fa-history:hover{
	transform: scale(1.3); 
}


.old_notice_content{

	border-top: 1px solid #FFC34D;
	border-bottom: 1px solid #FFC34D;

}


</style>