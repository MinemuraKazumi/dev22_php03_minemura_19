<?php


require_once('funcs.php'); 
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .=  '<p>';

        $view .= '<table align="center">';    
        $view .= '<td>'.h($result['id']) . '</td>'. '<td>'. h($result['name']) . '</td>' . '<td>'. h($result['url']). '</td>'  .'<td>'. h($result['comment']).  '</td>' . '<td>'.h($result['indate']);
        // $view .= '</table>';

        // $view .= '<a href="detail.php?id='.$result['id'] .'">';
        // $view .= $result['indate'] . $result['name']. $result['url'].$result['comment'];
        // $view .= '</a>';

        $view .= '<td>'.'<a href="detail.php?id='.$result['id'] .'">';
        $view .= '[更新]';
        $view .= '</a>' .'</td>';

        $view .= '<td>'.'<a href="delete.php?id='.$result['id'] .'">';
        $view .= '[削除]';
        $view .= '</a>'.'</td>';

        $view .= '</p>';
        $view .= '</table>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style> -->
    <style>
    table,tr,td,th{
        border: solid 1px black; border-collapse: collapse;
    }
    tr,td,th{
        width: 300px;
        max-width: 300px;
        height: 300px;
        word-wrap: break-word
    }
    th{
        background: silver;
    }
    p{
        text-align: center;
    }
</style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>