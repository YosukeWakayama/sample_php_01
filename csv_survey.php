<?php

use function PHPSTORM_META\elementType;

$number = rand(1, 5);
$name = "test";

if ($number == 1) {
  $resurt = "大吉です";
} elseif ($number == 2) {
  $resurt = "中吉です";
} elseif ($number == 3) {
  $resurt = "小吉です";
} elseif ($number == 4) {
  $resurt = "凶です";
} elseif ($number == 5) {
  $resurt = "大凶です";
} else {
  $resurt = "エラーです";
}

// var_dump($resurt);

// echo $name;
echo $resurt;

// var_dump($_POST);
// var_dump($_POST["name"]);
// var_dump($_POST["comment"]);

// データ受け取り
$name = ($_POST["name"]);
$comment = ($_POST["comment"]);
// 受け取ったデータを結合
$str = $name . "," . $comment . "," . $resurt;

$file = fopen("data/data.csv", "a");
// "a"でファイルを開く指示 
// データの書き込み指示
flock($file, LOCK_EX);
fwrite($file, $str . "\n");
flock($file, LOCK_UN);
fclose($file);

// 読み込みの指示
$str = "";
$file = fopen("data/data.csv", "r");
flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) {
    $str .= "<p>" . $line . "</P>";
  }
}
flock($file, LOCK_UN);
fclose($file);



// $$str = $name . "," . $created_at . "," . $comment;

// $file = fopen('data/data.txt', 'a');
// flock($file, LOCK_EX);
// fwrite($file, $str . "\n");
// flock($file, LOCK_UN);
// fclose($file);



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <!-- データ送信 -->
  <form action="csv_survey.php" method="POST">
    名前<input type="text" name="name">
    コメント<input type="text_area" name="comment">
    <button type="submit">送信</button>
  </form>
  <!-- 送信データ表示 -->
  <ul>
    <li>
      <a href="csv_survey.php"></a>
    </li>
  </ul>
  <?= $str ?>

</body>

</html>