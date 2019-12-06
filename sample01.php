<?php

// 変数の定義
// randがランダムな数値を出す事ができる
$number0 = rand(1,5);
// echo $number;
// echo '変数の定義';

if ($number0 == 1) {
  echo "大吉";
} 
elseif ($number0 == 2) {
  echo "中吉";
}  
elseif ($number0 == 3) {
  echo "小吉";
} 
elseif ($number0 == 4) {
  echo "凶";
} 
elseif ($number0 == 5) {
  echo "大凶";
} 
else {
  echo "エラー";
}



// if($number==100){
// echo"値は100です！";
// }
// elseif($number==200){
//   echo"値は200です。";
// }
// else{
// echo"値は100ではありません！";
// }