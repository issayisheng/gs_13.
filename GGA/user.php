<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sessChk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/user-signin.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<!-- <header>
    <?php echo $_SESSION["name"]; ?>さん　
    <?php include("menu.php"); ?>
</header> -->
<header>
<div class="container">
    <p>SIGN-UP</p> 
</div>
</header>

<!-- Head[End] -->

<!-- Main[Start] -->

<div class="mainwrap">
<div class="container">
    <form action="user_insert.php" method="post">
        <p>NAME<br>
        <input type="text" name="name"></p>
        <p>ID<br>
        <input type="text" name="lid"></p>
        <p>PASS<br>
        <input type="password" name="lpw"></p>
        <p>NUMBER<br>
        <input type="text" name="number"></p>
        <p>E-MAIL<br>
        <input type="email" name="e-mail"></p>
        <p>Authorization<br></p>
        <div class="radioButton">
          <p>USER<input type="radio" name="kanri_flg" value="0"></p>
          <p>ADMIN<input type="radio" name="kanri_flg" value="0"></p>
        </div>
        <p>
        <input type="submit" value=" SIGN-UP " id="signup">
        </p>
    </form>
    <div class="loginlink">
    <a href="login.php">LOG-IN</a>
    </div>
</div>
</div>
<!-- Main[End] -->
<footer>
<div class="container">
    <p>COPYRIGHT</p>
</div>
</footer>


</body>
</html>
