<?php
include('connect.php');
if (isset($_POST['submit']))
{
    $activity = $_POST['activity'];
    $trainer = $_POST['trainer'];
    $slot = $_POST['slot'];
    $id=$_GET['updateid'];
    $sql="update `member_details` set id=$id,activity='$activity',trainer='$trainer',slot='$slot' where id=$id";


    $result = mysqli_query($connection,$sql);
        if($result)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('update Succesfull');
        window.location.href='fitness.php';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('update Fails');
        window.location.href='fitness.php';
        </script>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

 <section id="reg-form-section">
     <div class="container my-5">
                
        <form autocomplete="off"  class="form-center" method="POST">
                            <h5>  GYM Management System  </h5>
                        
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Activity</label>
                                <input type="text" class="form-control" autocomplete="false" placeholder="Enter your name" name="activity">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Trainer</label>
                                <input type="text" class="form-control" autocomplete="false" placeholder="Enter your name" name="trainer">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Slot</label>
                                <input type="text" class="form-control" autocomplete="false" placeholder="Enter your name" name="slot">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </form>
                        
        </div>
 </section>
</body>
</html>