<?php

$id = $_GET["id"];
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id", $id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
}

$row = $stmt->fetch();

//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>


<!-- //HTML -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新画面</legend>
     <label>Book Name<input type="text" name="bookname" value="<?=$row["bookname"]?>"></label><br>
     <label>URL<input type="text" name="bookurl" value="<?=$row["bookurl"]?>"></label><br>
     <label><textArea name="bookcomment" rows="4" cols="40"><?=$row["bookcomment"]?></textArea></label><br>
     <input type="submit" value="更新">
     <input type="hidden" name="id" value="<?=$row["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
