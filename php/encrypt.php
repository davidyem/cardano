<?php
$stencil = array("2", "5", "11", "16", "3", "8", "10", "13", "1", "6", "12", "15", "4", "7", "9","14");
if(!empty($_POST['messagetoencrypt'])) {
    $message = str_split(trim($_POST["messagetoencrypt"]," "));
    if(count($message) < count($stencil)){
        $count = count($stencil) - count($message);
        for($i = 0; $i < $count; $i++){
            $message[] .= " ";
        }
    }
    $temp = array();
    foreach ($message as $index => $value){
        $temp[$index + 1] = $value;
    }
    foreach ($stencil as $key => $val){
        $result .= $temp[$val];
    }
    $resultencrypt = array('textencrypt' => $result);
    echo json_encode($resultencrypt);
}
?>