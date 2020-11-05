<?php
//１．PHP
//select.phpのPHPコードをマルっとコピーしてきます。
//※SQLとデータ取得の箇所を修正します。
$id = $_GET['id'];
// var_dump($id);
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
require_once("funcs.php");
$pdo = db_conn();
//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id =" . $id);
$status = $stmt->execute();
//３．データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();

    // while ($result = $stmt->fetch()) { 
    //     //GETデータ送信リンク作成
    //     // <a>で囲う。
    //     $view .= '<p>';
    //     // <a href="detail.php?id=XXX">
    //     $view .= '<a href="detail.php?id=' . $result["id"] . '">';
    //     $view .= $result["indate"] . "：" . $result["name"];
    //     $view .= '</a>';
    //     $view .= '</p>';
    // }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ブックマーク表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
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

    <!-- Main[End] -->

<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
理由：入力項目は「登録/更新」はほぼ同じになるからです。
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>本のタイトル：<input type="text" name="title" value=<?= $result['title'] ?>></label><br>
     <label>url：<input type="text" name="url" value=<?= $result['url'] ?>></label><br>
     <label>感想：<textArea name="comment" rows="4" cols="40"><?= $result['comment'] ?></textArea></label><br>
     <input type="hidden" name="id" value=<?= $result['id'] ?>>
     <input type="submit" value="送信">
    </fieldset>
  </div>
  <div id="return"></div>
  <a href="bm_list_view.php">ブックリスト確認</a>
</form>

</body>
</html>
