<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G8 Fitness Club</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>

   <div style="position:absolute; left:0px; top:0px; width: 100%; height: 20em">

    
<nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center" style="background-color:#020228">
  <a class="navbar-brand nav-link" href="#">
 <img src="images/icon5.png" style="width: 40px;  height: 29px;"> G8 Fitness Club
    <!--<img src="icon3.jpg" width="40" height="40" alt="">-->
   </a>
</nav>
   <!--
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid  d-flex justify-content-center">
          <a class="navbar-brand" href="#">G8 Fitness And Training centre</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav> 
      
    -->
   

   </div>

                <div class="container">                 

                  <div class="card">
                   <div class="face face1">
                     <div class="content">                       
                       <h3><i>Gym memebers please click here to login</i></h3>
                       <a href="member_login.php" class="stretched-link"></a>
                     </div>
                   </div>

                   <div class="face face2">
                     <h2>Members</h2>
                   </div>
                 </div>

                 <div class="card">
                   <div class="face face1">
                     <div class="content">                      
                       <h3><i>Gym trainers please click here to login</i></h3>
                       <a href="trainer_login.php" class="stretched-link"></a>
                     </div>
                   </div>
                   <div class="face face2">
                     <h2>Trainers</h2>
                   </div>
                 </div>

                </div>           
               
  </body>


<style>
@import url('http://fonts.googleapis.com/css?family=Poppins');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Poppins',sans-serif;
}
body{
    display: flex ;
    background-image: url(images/bkgrnd.webp) ;
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
}
.container{
    width:1100px;
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap:15px;
    margin:0 auto;
} 
.container .card{
    position: relative;
    width:300px;
    height:400px;
    margin:0 auto;
    background:#fff;
    transition: 0.5s;
   
} 
.container .card:hover{
    box-shadow: 0 30px 50px rgba(0,0,0,.2);
}
.container .card .face{
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container .card .face.face1{
    box-sizing: border-box;
    padding:20px;
    text-align: center;
    background:#fff;
    color:#c3073f
}
.container .card .face.face1 h2{
    margin-top:60px;
}
.container .card .face.face1 a{
  display: inline-block;
  padding:5px 10px;
    margin-top:20px;
    text-decoration: none;
    color:#c3073f;
    border:2px solid #c3073f;
    transition:0.5s
}
.container .card .face.face1 a:hover{
    color:#fff;
    background:#c3073f;
}
.container .card .face.face2{
    background-image: url(https://c4.wallpaperflare.com/wallpaper/707/220/899/gradient-blue-pink-abstract-art-wallpaper-preview.jpg);    background-color: #c3073f;
    transition:0.5s;
}
.container .card:hover .face.face2{
    height:80px;
    width:80px;
    border-radius: 50%;
    top:40px;
    left:50%;
    transform: translateX(-50%);
    background:transparent;
}
.container .card .face.face2 h2{
    margin:0;
    padding:0;
    font-size: 3em;
    color:#fff;
    transition:0.5s;
}
.container .card:hover .face.face2 h2{
    color:#c3073f;
    font-size: 2em;
}

  

  </style>
  
  
</html>