<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `specialisation` where id=$id";
$result=mysqli_query($connection, $sql); 
    if($result)    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deleted Succesfull');
        window.location.href='specialisation.php';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deletion Fails');
        window.location.href='specialisation.php';
        </script>");
    }

}

?>