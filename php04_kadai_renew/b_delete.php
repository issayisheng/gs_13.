<?php

$id = $_GET["id"];
include "b_funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id", $id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sqlError($stmt);
}else{
    redirect("b_select.php");
}

?>
