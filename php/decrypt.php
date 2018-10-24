<?php
$stencil = array("2", "5", "11", "16", "3", "8", "10", "13", "1", "6", "12", "15", "4", "7", "9","14");
if(!empty($_POST['messagetodecrypt'])) {
    $message = str_split($_POST['messagetodecrypt']);
    $result = array_combine($stencil, $message);
    ksort($result);
    reset($result);
    foreach ($result as $value){
        $res .= $value;
    }
    $resultdecrypt = array('textdecrypt' => $res);
    echo json_encode($resultdecrypt);
}
?>