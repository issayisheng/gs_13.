<?php
session_start();

//1. データ取得
$id = $_GET["id"];

//２．データ登録SQL作成
include "funcs.php";
ckSsid();
$pdo = db_con();
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}

if($_SESSION["kanri_flg"]=="1"){
  $readonly = "";
}else{
  $readonly = "readonly";
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
<?php include("menu.php");?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：フリーアンケート</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"<?=$readonly?>></label><br>
     <label>ID：<input type="text" name="lid" value="<?=$row["lid"]?>"<?=$readonly?>></label><br>
     <label>PASS：<input type="text" name="lpw" value="<?=$row["lpw"]?>"<?=$readonly?>></label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <?php if($_SESSION["kanri_flg"]=="1"){?>
     <input type="submit" value="更新">
     <?php } ?>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
