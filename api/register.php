<?php
/**
 * Created by PhpStorm.
 * User: langa
 * Date: 5/2/2018
 * Time: 9:22 AM
 */
include 'includes/DB.php';
include 'helpers/Response.php';
include 'helpers/ConfirmationCode.php';
include "helpers/AfricasTalkingGateway.php";
include 'helpers/fpdf/fpdf.php';



$IDNO=$_REQUEST['Idno'];
$branch=$_REQUEST['branch'];
$FirstName=$_REQUEST['username'];
$Phonenumber=$_REQUEST['phonenumber'];
//$email=$_REQUEST['Email'];
$password=$_REQUEST['password'];
$prepassword=$_REQUEST['prepassword'];





if($password==$prepassword){
    $password=md5($password);
    $sql="SELECT * FROM registration WHERE (`PhoneNumber`='$Phonenumber' or `IDNO_PASSNO`='$IDNO') and `Password`= '$password'";
    $result=DB::instance()->executeSQL($sql);
    $count=mysqli_num_rows($result);
    if($count>=1){
        $message = "User exists\\nTry again with different number or ID.";
        //echo "<script type='text/javascript'>alert('$message');document.location='https://revenuesure.ticketsoko.com'</script>";
        echo "<script type='text/javascript'>alert('$message');document.location='https://www.nouveta.tech/revenuesure'</script>";
    }else
    {
        $sql="INSERT INTO `registration`(`FirstName`,`branch`,`PhoneNumber`, `Password`, `IDNO_PASSNO`) 
     VALUES ('$FirstName','$branch','$Phonenumber','$password','$IDNO')";

        $result= DB::instance()->executeSQL($sql);
        if($result){
            $message = "REGISTERED SUCCESSFULL.\\nLOG IN.";
            echo "<script type='text/javascript'>alert('$message');document.location='https://www.nouveta.tech/revenuesure'</script>";
        }else{
            $message = "Try again.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');location='https://www.nouveta.tech/revenuesure</script>";;
        }
    }


}else
{
    echo "<script type='text/javascript'>alert('the password did not match');document.location='https://www.nouveta.tech'</script>";
}
