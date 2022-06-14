<?php
include('connect.php');
if (isset($_POST['submit']))
{
    $name = $_POST['rname'];
    $shift = $_POST['shift'];
   
$sql = "INSERT INTO `shift` (`name`, `shift`) VALUES ('$name', ' $shift')";
$result = mysqli_query($connection,$sql);
        if($result)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration Succesfull');
        window.location.href='#';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration Fails');
        window.location.href='#';
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
    <title>gym</title>
</head>
<body>
 <section id="reg-form-section">
     <div class="container my-5">
                
        <form autocomplete="off" action="add_shift.php" class="form-center" method="POST">
                            <h5>  GYM Management System  </h5>
                        
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" autocomplete="false" placeholder="Enter your name" name="rname">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Shift</label>
                                <input type="text" class="form-control" autocomplete="false" placeholder="Enter Shift" name="shift">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                        
        </div>
 </section>
 
</body>
</html>