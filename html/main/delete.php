<?php
    include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php";
	
	$bno = $_GET['idx'];
    $sql = mq("delete from board where idx='$bno';");
    
    if($sql){
            
        echo "<script language=javascript> alert('글이 삭제되었습니다..'); location.replace('/main/main.php'); </script>";  
    }  else{
        echo "<script>
        alert('삭제에 실패했습니다.');
        history.back();</script>"; } 
?>

