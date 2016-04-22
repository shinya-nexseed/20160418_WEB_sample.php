<!-- HTMLコード -->

<?php
    // PHPコード
    // echo 'Hello world!';
    // localhost/sample.php
    // echo文
    // その後に指定したデータをブラウザ上に表示する命令文
    // シングルクォートで囲われた範囲は、文字列型のデータとして処理される
    
    // 変数定義
    // $name = 'Shinya Hirai';
    // echo $name; // echo文は変数などのデータも出力することができる

    // 条件分岐文
    // ()内にある条件を満たしていれば、{}内の処理をする
    
    // 文法
    // if (条件) {
    //    処理
    // }

    // $_GETとは
    // formタグのmethod部分にgetと指定されていた場合、
    // PHPの内部でformから送信されたデータを$_GET変数を作成して
    // 値を代入する。
    if ($_GET['nick_name'] != '') {
        $nick_name = $_GET['nick_name'];
    }
?>

<!-- HTMLコード -->
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1><?php echo $nick_name; ?></h1>

  <form action="sample.php" method="get">
    <input type="text" name="nick_name">
    <input type="submit" value="送信">
  </form>
</body>
</html>




