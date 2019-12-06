<?php
// ここにphpの処理を記述しよう
var_dump($_GET);
var_dump($_GET["task"]);
var_dump($_GET["deadline"]);
$task = $_GET["task"];
$deadline = $_GET["deadline"];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get送信結果表示</title>
</head>

<body>
    <h1>やることを明日までに完了させましょう！</h1>
    <h1><?= $task ?>を<?= $deadline?>までに完了させましょう！</h1>
</body>

</html>