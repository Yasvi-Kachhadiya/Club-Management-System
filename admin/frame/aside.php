
</script>

<aside>
	<div id="sidebar">

		<div class="toggle-btn" onclick="toggleSidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
			<div id="profileImage">
			
				<?php
				//for showing profile image
		
				echo'<div class="profile">'
						.'<img style="height:145px; width:145px; ;display: block;" src="../../profile_images\\admin.png" alt="profile image" />'.
					'</div>';
								 
				?>
				
				<h6 style="text-align: center; color: #fff;
				font-size: 13px;"><p>Member Type :</p> <p>Admin</p></h6>

				<span></span>
				<center><a href='#'><b style="font-size: 16px;"><?php echo  $_SESSION['admin_name'] ; ?></b></a>
				
				<span></span></center>
			</div>		
	</div>
</aside>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Anybody:wght@800&family=Montserrat:wght@100;500&family=Roboto:wght@100;300&display=swap');

	#profileImage p{
		text-align: center;
		color: #99cc00;
		font-size: 15px;
		font-family: 'Montserrat',sans-serif;
	}

</style>





<script type="text/javascript">
	function toggleSidebar(){
		document.getElementById("sidebar").classList.toggle('active');
		
	}
</script>