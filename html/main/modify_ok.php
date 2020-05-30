<?php

    include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php";

    $bno = $_GET['idx'];
    $username = $_SESSION['id'];
    // $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];

    $namecheck = "SELECT * FROM member WHERE id = '$username'";
    $nameresult = mq($namecheck);
    $row=$nameresult->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    $fullname = $row['name'];
    echo "$fullname";

    if($username && $title && $content){
        $query = "UPDATE board SET id = '$fullname', title='$title', content='$content' where idx = '$bno'";
        $writecheck = mq($query); 
        if($writecheck){
            
            echo "<script language=javascript> alert('글 수정이 완료되었습니다..'); location.replace('/main/read.php?idx=$bno'); </script>";  
        }  else{
            echo "<script>
            alert('글쓰기에 실패했습니다.');
            history.back();</script>"; } 
    }else{
        echo "<script>
        alert('글쓰기에 실패했습니다.');
        history.back();</script>";
    }

?>