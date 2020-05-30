<?php
    include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";
    include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php";


    $rno = $_POST['rno']; 
    $sql = mq("select * from reply where idx='".$rno."'");//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
    $reply = $sql->fetch_array();

    $bno = $_POST['b_no'];
    $sql2 = mq("select * from board where idx='".$bno."'");//board테이블에서 idx가 bno변수에 저장된 값을 찾음
    $board = $sql2->fetch_array();

    $username = $_SESSION['id'];
    $namecheck = "SELECT * FROM member WHERE id = '$username'";
    $nameresult = mq($namecheck);
    $row=$nameresult->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    
    $fullname = $row['name'];
    $writer = $row['name'];
    echo "$writer";
    echo "$fullname";



    // $pwk = $_POST['pw'];
    // $bpw = $reply['pw'];


?>