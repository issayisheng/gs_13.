<?php
session_start();

$id = $_GET["id"];
include "b_funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id", $id,PDO::PARAM_INT);
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
<?php include("menu.php");?>

</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="b_update.php">
  <div class="jumbotron">
    <fieldset>
    <legend>更新画面</legend>
     <label>Book Name:<input type="text" name="name" value="<?=$row["name"]?>"<?=$readonly?>></label><br>
     <label>URL:<input type="text" name="email" value="<?=$row["email"]?>"<?=$readonly?>></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"<?=$readonly?>><?=$row["naiyou"]?></textArea></label><br>
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
