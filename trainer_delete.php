<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `trainer_details` where id=$id";
$result=mysqli_query($connection, $sql); 
    if($result)    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deleted Succesfull');
        window.location.href='trainer_details.php';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deletion Fails');
        window.location.href='trainer_details.php';
        </script>");
    }

}

?>