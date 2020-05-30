<?php
	if(isset($_SESSION['id'])){
		// echo "<script language=javascript> location.replace('/main/main.php'); </script>";  
        // echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
	?>

	<?php 
		}else{
		echo "<script>alert('로그인 후 사용하실 수 있습니다.'); history.back();</script>";
	} 
?>