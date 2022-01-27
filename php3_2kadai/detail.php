<?php


$id = $_GET['id'];

// DBに接続
// 変数を使えるようにする！
require_once('funcs.php'); 
$pdo = db_conn();

// 2.データ登録sql作成　バインド変数(:id')を仮置きしてセキュリティ上の問題を回避
$stmt = $pdo->prepare('SELECT * FROM gs_user_table where id = :id');
$stmt ->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

// ３、データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    // データが取得できたら fetchでデータを取ってくる
    $view = $stmt->fetch();

    
}

// var_dump($view);

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <!-- 飛ばす場所はupdate -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <!-- <fieldset> -->

            <fieldset>
                <legend>ユーザー登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>ID：<input type="text" name="lid"></label><br>
                <label>PW：<input type="text" name="lpw"></label><br>
                <label>管理者：<input type="checkbox" name="kanri_flg[]" value=1 checked></label><br>
                <label>退職者：<input type="checkbox" name="life_flg[]"value=1 checked></label><br>

                <!-- <label>管理者：<input type="checkbox" name="kanri_flg"></label><br>
                <label>退職者：<input type="checkbox" name="life_flg"></label><br> -->
                <input type="submit" value="送信">
            </fieldset>
                
                <!-- <legend>詳細画面</legend>
                <label>名前：<input type="text" name="name" value=<?= $view['name']?>></label><br>
                <label>Email：<input type="text" name="email" value=<?= $view['email']?>></label><br>
                <label>年齢：<input type="text" name="age" value=<?= $view['age']?>></label><br>
                <label><textarea name="content" rows="4" cols="40" ><?= $view['content']?></textarea></label><br>
                <input type="hidden" name="id" value=<?= $view['id']?>><br> -->
                <!-- idを変えられる可能性があるため、hidden -->

                <!-- <input type="submit" value="送信">
            </fieldset> -->
            <!-- textareaはvalueに値をいれるのではなく直接記述する -->
        </div>
    </form>
</body>

</html>

