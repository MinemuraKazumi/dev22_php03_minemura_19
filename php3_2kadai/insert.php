<?php
//1. POSTデータ取得
$name   = $_POST['name'];
$lid  = $_POST['lid'];
$lpw    = $_POST['lpw'];
// $kanri_flg=0;
// $life_flg =0;
// 文字列 = (string) 数値;
$kanri_flg = (int) $_POST['kanri_flg'];
$life_flg = (int) $_POST['life_flg'];


require_once('funcs.php'); 
$pdo = db_conn();

//３．データ登録SQL作成
// INSERT INTO gs_user_table(id,  name, lid, lpw, kanri_flg, life_flg)VALUES(NULL,'あ','あ','あ',1,1)
$stmt = $pdo->prepare("INSERT INTO gs_user_table
                               (id,  name, lid, lpw, kanri_flg, life_flg)
                        VALUES(NULL,:name,:lid,:lpw,:kanri_flg,:life_flg)
                      ");

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    // header('Location: index.php');
    // exit();
    redirect('index.php');
}
