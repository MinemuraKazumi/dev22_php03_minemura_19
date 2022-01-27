

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
            <fieldset>
                <legend>詳細画面</legend>
                <label>書籍名：<input type="text" name="name" value=<?= $view['name']?>></label><br>
                <label>書籍URL：<input type="text" name="url" value=<?= $view['url']?>></label><br>
                <label>書籍コメント：<input type="text" name="comment" value=<?= $view['comment']?>></label><br>
                <!-- <label><textarea name="content" rows="4" cols="40" ><?= $view['content']?></textarea></label><br> -->
                <input type="hidden" name="id" value=<?= $view['id']?>><br>
                <!-- idを変えられる可能性があるため、hidden -->

                <input type="submit" value="送信">
            </fieldset>
            <!-- textareaはvalueに値をいれるのではなく直接記述する -->
        </div>
    </form>
</body>

</html>