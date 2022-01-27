<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

// htmlspecialcharsの関数化
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

// gs_book_dbへの接続関数化
function db_conn()
{
    try {
        $pdo = new PDO('mysql:dbname=gs_book_db;charset=utf8;host=localhost','root','root');
        return $pdo;
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }
}

function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
}


//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}