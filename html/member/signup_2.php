<?php

include $_SERVER["DOCUMENT_ROOT"]."/login/db.php";
include $_SERVER["DOCUMENT_ROOT"]."/login/password.php";

$id=($_POST['userid']);
$pw=($_POST['password']);
$pwc=($_POST['password2']);
// $pw=password_hash($_POST['password'],PASSWORD_DEFAULT);
// $pwc=password_hash($_POST['password2'],PASSWORD_DEFAULT);
$fullname=$_POST['fullname'];
$location=$_POST['location'];
 


if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{
    echo "<script language=javascript> alert('입력한 비밀번호가 서로 다릅니다.'); history.back(-2); </script>";  
    exit();
}


if($id==NULL || $pw==NULL || $fullname==NULL || $location==NULL) //
{
    echo "<script language=javascript> alert('빈칸을 모두 채워주세요.'); history.back(-2); </script>";  
    exit();
}

// $con=mysqli_connect("localhost","root","qlalfqjsgh$","study");

// //연결확인
// if(!$con)
//         {
//             die('Could not connect: ' . mysql_error());
//         }
// else
//         {
//             echo "Connection established!";
//         }

$idCheck="SELECT * FROM member WHERE id='$id'";
// $idResult= mysqli_query($db, $idCheck);
$idResult = mq($idCheck);

if($idResult->num_rows==1)
{
    echo "<script language=javascript> alert('중복된 아이디입니다.'); history.back(-2); </script>";  
    exit();
}

$nameCheck="SELECT * FROM member WHERE name='$fullname'";
// $nameResult= mysqli_query($db, $nameCheck);
$nameResult = mq($nameCheck);


if($nameResult->num_rows==1)
{
    echo "<script language=javascript> alert('중복된 닉네임입니다.'); history.back(-2); </script>";  
    exit();
}


$pwh=password_hash($_POST['password'],PASSWORD_DEFAULT);


$query = "INSERT INTO member(id, pass, name, location) VALUES('$id', '$pwh', '$fullname', '$location')";
$signup = mq($query);

// $signup=mysqli_query($mysqli,"INSERT INTO member (id, pass, name, location) VALUES ('$id','$pw','$fullname','$location')");
if($signup){
    echo "<script language=javascript> alert('회원가입 되었습니다.'); location.replace('/index.php'); </script>";  
}
 
?>