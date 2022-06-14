<?php
include 'connect.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
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
    <title>G8 Fitness Centre</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#020228">
  <a class="navbar-brand" href="#">G8 Fitness Club</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="member_after_login.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member_register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
    </ul>
  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ms-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="images/user2.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

    <table class="table table-bordered mb-5">
  <thead>
    <tr>
      <th>Sno</th>
      <th>Activity</th>
      <th>Trainer</th>
      <th>Slot</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql ="SELECT * FROM `fitness`";
    $result = mysqli_query($connection,$sql);
       if($result)
       {
           while( $row=mysqli_fetch_assoc($result))
           {
        $id = $row['id'];
        $activity = $row['activity'];
        $trainer = $row['shift'];
        $slot = $row['slot'];
        echo '<tr>
        <th>'.$id.'</th>
        <th>'.$activity.'</th>
        <th>'.$trainer.'</th>
        <th>'.$slot.'</th>
      </tr>';

           }

       }
?>

  </tbody>
</table>

    </div>

</body>
</html>