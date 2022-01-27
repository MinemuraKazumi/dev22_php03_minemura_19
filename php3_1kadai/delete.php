


<?php
// updateからベースをコピー
require_once('funcs.php'); 

//1. POSTデータ取得
$id = $_GET['id'];

// 2,DBに接続
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_bm_table WHERE id = :id');
// id = :idがないと全削除になってしまう

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行
// PARAM_INT整数

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}