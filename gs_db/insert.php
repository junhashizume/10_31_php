<?php

$title = $_POST['title'];
$url = $_POST['url'];
$comment = $_POST['comment'];


try{
    $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch(PDOException $e){
    exit('DbConnectError:' . $e->getMessage());
}

$sql="INSERT INTO gs_bm_table( id, title, url, comment, indate)
    VALUES( NULL, :title, :url, :comment, sysdate())";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

    $flag = $stmt->execute();

    if($flag == false){
        $error = $stmt->errorInfo();
        exit("ErrorMessage:".$error[2]);
    }else{
        header('Location: index.php');
        exit();
    }
?>
<!-- <html>
<body>
  <!-- <a href="index.php">戻る</a> -->
</body>
</html> -->
