
<form method="post">
   <input type="number" name="number" >
    <input type="submit" value="check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
}
$arr = array(7,4,2,8,5);
if($number == "1"){
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    echo $sum;

}
//}
if($number == "2") {
    sort($arr);
    foreach ($arr as $val) {
        echo $val . "<br>";
    }
}
