<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `member_details` where id=$id";
$result=mysqli_query($connection, $sql); 
    if($result)    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deleted Succesfull');
        window.location.href='member_details.php';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('deletion Fails');
        window.location.href='member_details.php';
        </script>");
    }

}

?>