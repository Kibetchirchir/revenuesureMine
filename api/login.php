<?php
/**
 * Created by PhpStorm.
 * User: langa
 * Date: 4/30/2018
 * Time: 2:33 PM
 */
include 'includes/DB.php';
include 'helpers/Response.php';
include 'helpers/ConfirmationCode.php';
include "helpers/AfricasTalkingGateway.php";
include 'helpers/fpdf/fpdf.php';


session_start();

$phonenumber= $_POST['phonenumber'];
$password = $_POST['password'];

$password= md5($password);



$sql="SELECT * FROM registration WHERE (`Email`= '$phonenumber' or `IDNO_PASSNO`='$phonenumber' or `PhoneNumber`='$phonenumber') and `Password`= '$password'";
$result=DB::instance()->executeSQL($sql);
$count=mysqli_num_rows($result);
if($count==1){
    while($row = mysqli_fetch_array($result)) {
        $phonenumber = $row['IDNO_PASSNO'];
        $branch=$row['branch'];
    }
    $_SESSION["PhoneNumber"] = $phonenumber;
    $_SESSION["branch"]= $branch;

    $cookie_name = "user";
    $cookie_value = $phonenumber;
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day);

    if(!isset($_COOKIE[$cookie_name])) {
        echo "<script type='text/javascript'>document.location='https://www.nouveta.tech/revenuesure/revenue'</script>";
        echo $_COOKIE[$cookie_name];
    } else {

        echo  "<script type='text/javascript'>document.location='https://www.nouveta.tech/revenuesure/revenue'</script>";
        echo $_COOKIE[$cookie_name];
    }
    //header("location:http://revenuesure.nouveta.co.ke/Portal/");
}
else{
    $message = "The password enter did not match .\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');document.location='https://www.nouveta.tech/revenuesure'</script>";

}