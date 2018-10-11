<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/9/18
 * Time: 9:37 AM
 */
$numbers = array(90,20,50,59,50,27,70,54);
$length = count($numbers);
sort($numbers);
for ($x = 0; $x <$length; $x++){
    echo $numbers[$x];
    echo "<br>";
}














?>