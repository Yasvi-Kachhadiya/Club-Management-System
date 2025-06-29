<div id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>ALL CLUB MEMBER DETAIL</h2>
    </div>
    <div class="modal-body">
      <fieldset>
        <legend align="center">Member Detail</legend>

        <div class="list_mem_all">
          <div class="mem_list">
            <div>AVATAR</div>
            <div>ID</div>
            <div>NAME</div>
            <div>CLUB</div>
            <div>DEPARTMENT</div>
            <div>SEMESTER</div>
            <div>GENDER</div>
            <div>DOB</div>
            <div>ADMSNYR</div>
            <div>PHONE</div>
            <div>EMAIL</div>
            <div style='margin-left: 100px; width: 100px;'>JOIN DATE</div>
            <div>STATE</div>
          </div><br>


        <?php
  
          include '../../dbconnect.php';

          $sql = "SELECT * FROM studentinfo WHERE is_active = 'Y'";
          $result = mysqli_query($db, $sql);



          if (mysqli_num_rows($result) > 0) {
          
              while($row = mysqli_fetch_assoc($result)) {

                echo "<div id='mem_list_val'> <div>
                        <img src='../../profile_images\\".$row["avatar"]."' alt='profile image' style='border-radius:80%;width:50px; height: 50px;'>
                        </div>
                        <div>". $row["username"]."</div>
                        <div>". $row["name"]."</div>
                        <div style='margin-left: 35px; width: 100px; height 100px; overflow: auto; border: 1px solid #333; border-radius: 4px; margin-bottom: 10px; background-color: #f2f2f2;'>";
                        

                  $sql_club = "SELECT * FROM club_relation WHERE user_ID = '".$row['username']."' AND status = 'Y'";
                  $result_club = mysqli_query($db, $sql_club);

                  
                     while($row_clb = mysqli_fetch_assoc($result_club)) {

                          echo "<p style='border-bottom: 1px solid #8c8c8c;'>".$row_clb["club_Name"]."</p>";

                       }

                  echo "</div>
                        <div>". $row["dept"]."</div>
                        <div>". $row["semester"]."</div>
                        <div>". $row["gender"]."</div>
                        <div>". $row["dob"]."</div>
                        <div>" . $row["admissionyear"]."</div>
                        <div>" . $row["phone"]."</div>
                        <div>" . $row["email"]."</div> 
                        <div style='margin-left: 100px; width: 100px;'>" . $row["dateTime"]."</div>
                        <div>" . $row["is_active"]."</div>
                        
                      </div>
                      <div style='border-bottom: 1px solid #333; width:190%;'></div>
                      ";


              }
          } else {
              echo "0 results";
          }

        ?>

        </div>
      </fieldset>
    </div>
    
  </div>

</div>

<script type="text/javascript">
var modal = document.getElementById('myModal');

var btn = document.getElementById("viewDetail");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>



<style>



.list_mem_all{
  height: 600px;
  overflow: auto;
  text-transform:uppercase;
}



#mem_list_val {
  display: grid;
  grid-template-columns: 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15%;
  margin: 10px 0 0 0;
  font-size: 17px;
  font-family: Tw Cen MT,ROBOTO,helvetica;

}
.mem_list{
  display: grid;
  grid-template-columns: 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15% 15%;
  font-weight: bold;
  text-decoration: underline;
}



/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    
    background-position: center;
    background-image: url('../../img/c1.png');
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
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

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #bfbfbf;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: rgba(58, 58, 58,1);
    color: white;
}

.modal-body {padding: 2px 16px;}


</style>

