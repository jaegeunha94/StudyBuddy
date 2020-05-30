
<?php
include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";

$id=$_POST['userid'];
$pw=$_POST['password'];
 
$check="SELECT * FROM member WHERE id='$id'";
$result=mq($check); 
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    $hash_pw = $row['pass'];
    if(password_verify($pw, $hash_pw)){  //MYSQLI_ASSOC 필드명으로 첨자 가능
        $_SESSION['id']=$id;           //로그인 성공 시 세션 변수 만들기
        if(isset($_SESSION['id']))    //세션 변수가 참일 때
        {

            header('Location: /main/main.php');   //로그인 성공 시 페이지 이동
        }
        else{
            echo "세션 저장 실패";
        }            
    }
    else{
        echo "<script language=javascript> alert('아이디나 비밀번호가 틀렸습니다.'); history.back(-2); </script>";  


    }
}
else{
    echo "<script language=javascript> alert('아이디나 비밀번호가 틀렸습니다.'); history.back(-2); </script>";  


}
?>
