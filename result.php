<?php

//1. POSTデータ取得
$name   = $_POST['name'];
$quiz1  = $_POST['quiz1'];
$quiz2    = $_POST['quiz2'];
$quiz3 = $_POST['quiz3'];
$quiz4 = $_POST['quiz4'];
$quiz5 = $_POST['quiz5'];


//2. DB接続します
//*** function化する！  *****************

require_once('funcs.php');
$pdo=db_con();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/result.css">
    

</head>
<body>

    <div class="title">
        <h1>クイズ結果</h1>
    </div>

    <div class="result">
        <table>
            <th></th>
            <td></td>
            <td>あなたの回答</td>
            <td>模範解答</td>
        </table>
        <table>
            <th>Q1</th>
            <td>〇</td>
            <td><?= $quiz1 ?></td>
            <td>きゅうり</td>
        </table>
        <table>
            <th>Q2</th>
            <td>〇</td>
            <td></td>
            <td>東京ヤクルトスワローズ</td>
        </table>
        <table>
            <th>Q3</th>
            <td>〇</td>
            <td></td>
            <td>NMB48</td>
        </table>
        <table>
            <th>Q4</th>
            <td>〇</td>
            <td></td>
            <td>青森県</td>
        </table>
        <table>
            <th>Q5</th>
            <td>〇</td>
            <td></td>
            <td>O型</td>
        </table>
    </div>


        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/result.js"></script>
</body>
</html>