<?php

require_once 'Car.php';
$auto = new Car(20, true);

try
{
echo $auto -> start();

} catch (Exception $e){

    echo $e;
    $auto->setHasParkBrake(false);
    echo $auto -> start();
    
}finally {
    echo "<br><br>Ma voiture roule comme un donut 🚗";
}
//echo $auto -> start();


