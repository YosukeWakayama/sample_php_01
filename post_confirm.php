<?php
// ここにphpの処理を記述しよう
var_dump($_POST);
var_dump($_POST["task"]);
var_dump($_POST["deadline"]);

$task = $_POST["task"];
$deadline = $_POST["deadline"];


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post送信結果表示</title>
</head>

<body>
    <h1><?= $task ?>を<?= $deadline ?>までに完了させましょう！</h1>
</body>

</html>