<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="bm_list_view.php">データ一覧</a>
      <a class="navbar-brand" href="login.php">ログイン</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>本のタイトル：<input type="text" name="title"></label><br>
     <label>url：<input type="text" name="url"></label><br>
     <label>感想：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" id="button" value="送信">
    </fieldset>
  </div>
  
  <a href="javascript:history.back();">戻る</a>
</form>


</body>
</html>