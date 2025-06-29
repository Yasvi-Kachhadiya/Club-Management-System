<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>


<!DOCTYPE html>
<html>
<?php  if (isset($_SESSION['username'])) : ?>

<?php include '../frame/head.php'; ?>
<?php include 'server.php'; ?>

<?php include 'top-bar.php'; ?>
<?php include '../frame/header.php'; ?>
<?php include '../frame/aside.php'; ?>

<?php include 'slider.php'; ?>


<?php include '../frame/messageBox.php'; ?>
<?php include 'container.php'; ?>

<?php endif ?>

</body>


<script>

   let sliderImages = document.querySelectorAll('.slide'),
   arrowLeft = document.querySelector('#arrow-left'),
   arrowRight = document.querySelector('#arrow-right'),
   current = 0;

   function reset(){
   	for(let i = 0; i < sliderImages.length; i++){
   		sliderImages[i].style.display = 'none';
   	}
   }

   function startSlide(){
   	reset();
   	sliderImages[0].style.display = 'block';
   }

	function slideLeft(){
		reset();
		sliderImages[current - 1].style.display = 'block';
		current--;
	}


	function slideRight(){
		reset();
		sliderImages[current+1].style.display = 'block';
		current++;
	}


	arrowLeft.addEventListener('click', function(){
		if(current === 0){
		current = sliderImages.length;
		}
		slideLeft();
	});

	arrowRight.addEventListener('click', function(){
		if(current === sliderImages.length - 1){
		current = -1;
		}
		slideRight();
	});

   startSlide();


</script>

</html>

