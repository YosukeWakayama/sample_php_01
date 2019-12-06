<?php
// ここにphpの処理を記述しよう
// $result = "大凶";
$number = rand(1, 5);

if ($number == 1) {
    $result = "大吉";
} elseif ($number == 2) {
    $result = "中吉";
} elseif ($number == 3) {
    $result = "小吉";
} elseif ($number == 4) {
    $result = "凶";
} elseif ($number == 5) {
    $result = "大凶";
} else {
    $result = "エラー";
}
var_dump($result);

$arr = ['javascript', 'php', 'Haskell', 'COBOL'];
echo $arr[2];
var_dump($arr);




?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPおみくじ</title>
</head>

<body>
    <h1>今日の運勢は<?= $result ?>です！</h1>
    <h1>今日の運勢は<?php echo $result ?>です！</h1>
    <!-- <h1>今日の運勢は<?= $number0 ?>です！</h1> -->
</body>

</html>