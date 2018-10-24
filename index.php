<?php include('php/encrypt.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Шифр Кардано</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/main.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-center">
            <form id="ajax_form1" method="post" action="">
                <h4>ВВЕДІТЬ ПОВІДОМЛЕННЯ ДЛЯ ШИФРУВАННЯ</h4><br/>
                <input id="text1" type="text" name="messagetoencrypt"><br/>
                <button id="encrypt" name="submitencrypt">Зашифрувати</button>
            </form>
            <br/>
            <div id="resencrypt"></div>
        </div>
        <div class="col-lg-6 text-center">
            <? /*= $serialnum !== null ? var_dump($serialnum) : " ";*/ ?>
            <form id="ajax_form2" method="post" action="">
                <h4>ВВЕДІТЬ ПОВІДОМЛЕННЯ ДЛЯ ДЕШИФРУВАННЯ</h4><br/>
                <input id="text2" type="text" name="messagetodecrypt"><br/>
                <button id="decrypt" name="submitdecrypt">Розшифрувати</button>
            </form>
            <br/>
            <div id="resdecrypt"></div>
        </div>
    </div>
</div>
</body>
</html>
