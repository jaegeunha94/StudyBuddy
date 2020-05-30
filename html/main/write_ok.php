<?php

    include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php";

       

    //각 변수에 write.php에서 input name값들을 저장한다
    // $username = $_POST['name'];
    // $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $username = $_SESSION['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d-h-i');

    $namecheck = "SELECT * FROM member WHERE id = '$username'";
    $nameresult = mq($namecheck);
    $row=$nameresult->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    $fullname = $row['name'];

    if($username && $title && $content){
        $query = "INSERT INTO board(id, title, content, date) VALUES('$fullname', '$title', '$content', '$date')";
        $writecheck = mq($query); 
        if($writecheck){
            echo "<script language=javascript> alert('글쓰기가 완료되었습니다..'); location.replace('/main/main.php'); </script>";  
        } else{
            echo "<script>
            alert('글쓰기에 실패했습니다.');
            history.back();</script>";
        }
        

    }else{
        echo "<script>
        alert('글쓰기에 실패했습니다.');
        history.back();</script>";
    }
?>

