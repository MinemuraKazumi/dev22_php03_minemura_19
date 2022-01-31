<?php


require_once('funcs.php'); 

//1. POSTデータ取得
$name   = $_POST['name'];
$url  = $_POST['url'];
$comment    = $_POST['comment'];
// $content = $_POST['content'];
$id = $_POST['id'];



$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE 
                        gs_bm_table 
                    SET
                       name = :name,
                       url = :url,
                       comment = :comment, 
                    --    content = :content,
                        indate = sysdate()
                    where
                        id = :id;
                    ');
// 最後のものには,をつけない
// sql文の最後は;をつける :id;

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
// $stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行
// PARAM_INT整数

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}