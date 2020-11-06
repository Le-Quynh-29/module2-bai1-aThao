<?php
$age = array("May tinh"=>array("Dell","Lenovo"), "Dien thoai"=>array("ios","ardroil"), "Giay"=>array("adidas","nike"));
foreach($age as $x => $x_value) {
    echo $x."<br>";
    foreach ($x_value as $y => $y_value){
        echo $y_value."<br>";
    }
}
?>