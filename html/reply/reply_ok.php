<?php
    include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php";

    $bno = $_GET['idx'];
    // $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    
    $username = $_SESSION['id'];
    $content = $_POST['content'];

    $namecheck = "SELECT * FROM member WHERE id = '$username'";
    $nameresult = mq($namecheck);
    $row=$nameresult->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    $fullname = $row['name'];
    $date = date('Y-m-d-h-i');
    


    // if($bno && $fullname && $_POST['content'] && $date){
    //     $sql = mq("insert into reply(con_num,name,pw,content) values('".$bno."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."')");
    //     echo "<script>alert('댓글이 작성되었습니다.'); 
    //     location.href='/page/board/read.php?idx=$bno';</script>";
    // }else{
    //     echo "<script>alert('댓글 작성에 실패했습니다.'); 
    //     history.back();</script>";
    // }

    if($bno && $fullname && $content && $date){
        $query = "INSERT INTO reply(con_num, name, content, date) VALUES('$bno', '$fullname', '$content', '$date')";
        $writecheck = mq($query); 
        echo "$query";
        if($writecheck){
            echo "<script language=javascript> alert('덧글이 작성되었습니다.'); location.href='/main/read.php?idx=$bno'; </script>";  
        } 
        else{
            echo "<script>
            alert('덧글 작성에 실패했습니다.');
            history.back();</script>";
        }
        

    }else{
        echo "<script>
        alert('덧글 작성에 실패했습니다.');
        history.back();</script>";
    }
	
?>
