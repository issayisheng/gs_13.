<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- <link rel="stylesheet" href="css/login.css" /> -->
<link rel="stylesheet" href="css/user-login.css" />
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<title>ログイン</title>
</head>
<body>

<header>
<div class="container">
<p>LOG-IN</p> 
</div>
</header>
<div class="mainwrap">
<div class="container">
    <form name="form1" action="login_act.php" method="post">
        <p>ID<br>
        <input type="text" name="lid"></p>
        <p>PASS<br>
        <input type="password" name="lpw"></p>
        <p>
        <input type="submit" value=" LOG IN " id="login">
        </p>
    </form>
    <div class="jumplink">
    <a href="">RESET PASS</a><br><br>
    <a href="user-signin.html">SIGN-UP</a>
    </div>
</div>
</div>
<footer>
<div class="container">
    <p>COPYRIGHT</p>
</div>

</body>
</html>