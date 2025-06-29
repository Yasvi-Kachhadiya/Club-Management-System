
<script src="jquery.js"></script>
<script src="jquery_2.js"></script>
<script type="text/javascript">
	

	function replyTextArea(text){

	window.text = text.value;

	}


	function replyMessages(id){

		var xmlhttpp = new XMLHttpRequest();
		var a = document.getElementById("replyErr").innerHTML;
	    var message = text;
	    
	    var sender_ID = "<?php echo $_SESSION['username']; ?>";
	    var sender_Name = "<?php echo $_SESSION['full_name']; ?>";
	  
	    var receiver_ID = id;

	    document.getElementById("spinner_reply_to").style.visibility= "visible";

  		xmlhttpp.onreadystatechange = function() {
		
		if (xmlhttpp.readyState == 4 && xmlhttpp.status == 200) {			
			document.getElementById("spinner_reply_to").style.visibility= "hidden";
			document.getElementById("replyErr").innerHTML = xmlhttpp.responseText;
			document.getElementById("replyErr").style.visibility= "visible";
			
			setTimeout(function() {
			$("#replyErr").fadeOut();}, 2000);
			}
	
		};

	 	var url="messageServer.php?receiver_ID="+receiver_ID+"&sender_ID="+sender_ID+"&sender_Name="+sender_Name+"&message="+message;

		xmlhttpp.open("POST", url,true);
		xmlhttpp.send();
	

}



</script>



<div id="menu">
	<div class="menu-container">
	<div id="logo">
				<a href="../homepage/homepage.php"><img src="../img/logo.png"></a>
	</div>
		<ul class="main-nav">
			<li><a class="cmncls link1" href="../homepage/homepage.php"><i class="fa fa-home" aria-hidden="true">&nbsp;&nbsp;Home</i></a></li>
			
			<li><a class="cmncls link2" href="../profile/profile.php"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp;&nbsp;Profile</i></a></li>
			<li><a class="cmncls link3" href="../HOME.html"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp;&nbsp;Club Details</i></a></li>
			
				
			<li class="dropdown1"><a class="cmncls" href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true">&nbsp;&nbsp;Go To The Clubs&nbsp;&nbsp;</i></a>

				<ul>
				<div class="dropdown_content1">
				<?php
					include '../timeFunction.php';

					$username = $_SESSION['username'];
					$clbID = $_SESSION['clubID'];

					include('../dbconnect.php');
					$query = "SELECT * FROM club_relation WHERE user_ID = '$username' AND club_ID <> '$clbID' AND status = 'Y'";
					$results = mysqli_query($db, $query);


				if (mysqli_num_rows($results) > 0) {
					while($row = mysqli_fetch_assoc($results)) {
			        echo '<li><a class="clblist" href="../frame/clubredirect.php?id='.$row['club_ID'].'"><i class="fa fa-link" aria-hidden="true"></i>
			        '.$row['club_Name'].'</a></li>';
					
					
					}
				}
				else{
					echo '<li><a>No clubs to go.</a></li>';
				}


				?>

	

	           </div>
				</ul>
			</li>
				
			<li class="logout1"><a href="../logout.php">Logout&nbsp;
			<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

		</ul>
	</div>
</div>


<style type="text/css">

.headbar{
	background-color:black;
}

.logout1:hover{
	background-color:black;
	color:white;
}
.headbar li:hover{
 background-color:black;
}
.main-nav:hover{
	background-color:black;
}
.clblist{
	border-bottom : 1px solid #fff;
}
{
	background-
}

.notifWrap{
	border: 2px groove #333;
	background-color: rgba(77, 77, 77,0.8);
	margin: 10px 5px;
	padding: 5px 5px;
	text-align: center;
}


.notificationTime{

	color: #a6a6a6;
	font-size: 13px;
}


#notif_wrap{
	visibility: hidden;
	margin-top: 67px;
	/*opacity: 0;*/
    position: absolute;
    background-color: rgba(13, 13, 13,0.9);
    width: 300px;
    height: 0px;
   /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0,0.2);
    */padding: 12px 0;
    z-index: 1;
    margin-left: 250px;
	padding-bottom: 20px;
	border: 5px groove #595959;
	overflow: auto;
	transition: all 200ms linear;
	border-radius: 10px;
}




#notif_wrap.notif_wrap_show{
	height: 500px;
	/*opacity: 1;*/
	visibility: visible;
}


.inbox_fill img{
	margin-left: 7px;
}


#spinner_reply_to{

	position: fixed;
	top: 35%;
	bottom: 35%;
	left: 73%;
	right: 73%;
}


#replyErr{
	
	visibility: hidden;
	top: 50%;
	color: #f2f2f2;
	background-color: rgba(38, 38, 38,0.7);
	border-radius: 20px;
	padding: 10px 10px;
	left: 73%;
	right: 73%;
	position: fixed;
	font-family: Tw Cen MT,ROBOTO,helvetica;
	font-size: 20px;
	width: 150px;
	text-align: center;
}



#inbox_wrap{
	visibility: hidden;
	margin-top: 67px;
	/*opacity: 0;*/
    position: absolute;
    background-color: rgba(242, 242, 242,0.9);
    width: 600px;
    height: 0px;
   /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0,0.2);
    */padding: 12px 0;
    z-index: 1;
    margin-left: 120px;
	padding-bottom: 20px;
	border: 5px groove #595959;
	overflow: auto;
	transition: all 200ms linear;
	border-radius: 10px;
}




#inbox_wrap.inbox_wrap_show{
	height: 550px;
	/*opacity: 1;*/
	visibility: visible;
}



#paper{
	color: #fff;
}



/*--------------------------------*/




/*.dlt_btn {

	font-family: Tw Cen MT,ROBOTO, 'Raleway', sans-serif;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 17px;
  line-height: 20px;
  height: 32px;
  background-color: #cc3300;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  padding: 0 3px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.dlt_btn:hover,
.dlt_btn:focus {
	cursor: pointer;
  background-color: #b32d00;
  color: #fff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}

.sender_name{
	font-weight: bold;
	text-align: left;
	color: #4d4d4d;
}


.inbox_fill{
	display: grid;
    grid-template-columns: 20% 62% 10%;
    border: 1px solid #333;
    width: 90%;
    height: auto;
    margin-left: 4.8%;
    margin-right: 5%;
    margin-top: 5%;
    padding: 20px 0;
 
}


.inboxMsgTime{
	margin-right: 5px;
	font-size: 13px;
	color: #959595;
	float: right;
	margin-top: auto;
	display: inline;
	padding-bottom: 5px;
	
}


.inbox_name{
	width: 100px;
	word-wrap: break-word;
	text-align: center;
	border: 1px solid #333;
	margin-left: 3px;
	background: rgba(17,17,17,1);
background: -moz-linear-gradient(top, rgba(17,17,17,1) 0%, rgba(19,19,19,1) 0%, rgba(19,19,19,1) 3%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 37%, rgba(71,71,71,1) 55%, rgba(89,89,89,1) 94%, rgba(102,102,102,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(17,17,17,1)), color-stop(0%, rgba(19,19,19,1)), color-stop(3%, rgba(19,19,19,1)), color-stop(9%, rgba(28,28,28,1)), color-stop(37%, rgba(43,43,43,1)), color-stop(55%, rgba(71,71,71,1)), color-stop(94%, rgba(89,89,89,1)), color-stop(100%, rgba(102,102,102,1)));
background: -webkit-linear-gradient(top, rgba(17,17,17,1) 0%, rgba(19,19,19,1) 0%, rgba(19,19,19,1) 3%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 37%, rgba(71,71,71,1) 55%, rgba(89,89,89,1) 94%, rgba(102,102,102,1) 100%);
background: -o-linear-gradient(top, rgba(17,17,17,1) 0%, rgba(19,19,19,1) 0%, rgba(19,19,19,1) 3%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 37%, rgba(71,71,71,1) 55%, rgba(89,89,89,1) 94%, rgba(102,102,102,1) 100%);
background: -ms-linear-gradient(top, rgba(17,17,17,1) 0%, rgba(19,19,19,1) 0%, rgba(19,19,19,1) 3%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 37%, rgba(71,71,71,1) 55%, rgba(89,89,89,1) 94%, rgba(102,102,102,1) 100%);
background: linear-gradient(to bottom, rgba(17,17,17,1) 0%, rgba(19,19,19,1) 0%, rgba(19,19,19,1) 3%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 37%, rgba(71,71,71,1) 55%, rgba(89,89,89,1) 94%, rgba(102,102,102,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#111111', endColorstr='#666666', GradientType=0 );
	color: #fff;
}


.inboxMsg{
	width: 100%;
	height: 280px;
	overflow-y: auto;
	overflow-x: hidden;
	word-wrap: break-word;
	background-color: #fff;
	border-radius: 5px;
	border: 2px groove #333;
  	margin-bottom:0px;
	
}

.inboxMsgTxt{
	
	overflow-x: hidden;
	padding-bottom: 10px;
	padding-left: 3px;
	display: block;
	
}



.msgbox{
	border-bottom: 2px solid #AAAEB4;
	width: 315px;
	margin-left: 3px;
}


.messageWrap{
	background-color: rgba(255, 153, 102,0.8);
	width: 285px;
	margin: 5px 5px;
	border-radius: 5px;
	padding: 5px 2px;
	word-wrap: break-word;
}





#replyMsg{
	width:95%;
	display: inline-block;
	vertical-align: middle;
	height: 100px;
	padding: 0 12px;
	margin-top: 3px;
	margin-left: 20px;
	margin-bottom: 10px;
	font-size: 15px;
	line-height: 20px;
	border: 2px solid #808080;
	background-color: rgba(255, 255, 255, 1);
	color: rgba(0, 0, 0, 0.7);
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border-radius: 5px;
	overflow: hidden;
}

.replyBtn{

  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  background-color: rgba(26, 26, 26,0.8);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 5px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  padding: 5px 20px;
  margin-left: 40%;
}

.replyBtn:hover,
.replyBtn:focus {
  background-color: rgba(26, 26, 26,1);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  cursor : pointer;
  
}

	/*.fa-bell{
		cursor: pointer;
		color: #d9d9da;
		transition: 0.3s;
	}

	.fa-bell:hover{
	
	color: #b2b2b3;

	}*/





</style>

