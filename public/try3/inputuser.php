<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
$indata = true;

if(empty($_GET['username'])){
  echo("名前を入力してください。<br>");
  $indata = false;
}
if(empty($_GET['useraddress'])){
  echo("住所を入力してください。<br>");
  $indata = false;
}
if(empty($_GET['usermail'])){
  echo("メールアドレスを入力してください。");
  $indata = false;
}
if($indata == false){
  die;
}

$username = filter_input(INPUT_GET, 'username');
$useraddress = filter_input(INPUT_GET,'useraddress');
$usermail = filter_input(INPUT_GET,'usermail');

if(mb_ereg('^[a-zA-Zぁ-んァ-ヶ一-龠々]+$',$username) == false){
  echo("名前を正しく入力してください。<br>"); 
  $indata = false; 
}
if(mb_ereg('^[ぁ-んァ-ヶ一-龠々]+[0-9]+$',$useraddress) == false){
  echo("住所を正しく入力してください。<br>");
  $indata = false;
}
if(mb_ereg('^[a-zA-Z0-9]+@+[a-zA-Z]',$usermail)==false){
  echo("メールアドレスを正しく入力してください。");
  $indata = false;
}
if($indata == false){
  die;
}

echo "あなたが入力した値<br>";
echo "名前：" . $username . "<br>";
echo "住所：" . $useraddress. "<br>";
echo "メールアドレス：" . $usermail;
?>
    </h2>
    </div>
  </body>
</html>
