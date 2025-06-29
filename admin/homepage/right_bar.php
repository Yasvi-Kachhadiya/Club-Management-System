
<td class="right_bar" >
		<div class="right_wrap">	
			<div class="create_club">
				<button id="createClb_button" class="create_club_btn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create Club</button>
			</div>

			<div class="create_club">
        <button id="moderator_button" class="create_club_btn"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Manage Moderators</button>
      </div>
		</div>

</td>

<script type="text/javascript">
  

  var old_count = 0;
  var i = 0;
  setInterval(function(){    
  $.ajax({
      type : "POST",
      url : "notify.php",
      success : function(data){
          if (data > old_count) { if (i == 0){old_count = data;} 
              else{
              alert('New Message!');
              old_count = data;}
          } i=1;
      }
  });
  },1000);


</script>




<?php include 'moderator.php'; ?>
<?php include 'create_club.php';  ?>





<style type="text/css">


@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');
.msg_btn {
cursor: pointer;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 17px;
 text-shadow: 2px 2px 4px #666666;
  height: 45px;
  width: 200px;
  background-color: #993366;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  font-family:'Montserrat',sans-serif;
}

.msg_btn:hover,
.msg_btn:focus {
  background-color: #862d59;
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.right_wrap{

	border: 1px solid #000;
	margin: 20px 20px;
	padding: 0px 0 60px 0;
	background-color :white;
	border: 3px solid white;
  box-shadow:2px 5px 20px rgba(119,119,119,0.5);
	border-radius: 10px;
}
	

.create_club{
margin-top: 20%;


}


.create_club_btn {
cursor: pointer;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 15px;
  height: 45px;
  width: 200px;
  background-image:linear-gradient(62deg, black 0%, #2e2d2d 100%);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 10px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  font-family:'Montserrat',sans-serif;
}

.create_club_btn:hover,
.create_club_btn:focus {
  background-image:linear-gradient(200deg, black 0%, #2e2d2d 100%);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}




</style>


