<?php
    session_start();
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="nav_buttons.css" type="text/css" rel="stylesheet"/>


<style>


.boxed {
  border: 1px solid green ;
  padding: 20px; 
  width: 300px;
  font-family:cursive;
  font-size:xx-large;
  text-align: center;
  resize: both;
  overflow: auto;
  object-fit: cover;
}

.grid-container {
    column-width: 10px;
    justify-content: space-evenly;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 1px;
    justify-content: space-around;
}
</style>

</head>
<body>
    <h3 align= "center">
        <div align="left">
            <a href="customer_index.php?msg=undone" class=nav_button>Home</a>
        </div>
        <font face="Arial" size="8"><u>Movie Club</u></font>
         <img src="index_images/6.png" height="70" width="70"></img>
     </h3>


     <h2 align= "center">
        <font face="calibri" size="6">
              Movies will be available next month
         </font>
    </h2>

<br>
<br>

    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 

    <div class="grid-container">
        <div class="boxed"><img src="movies_images/2_1.jpg" alt="movie1" style= "width:100%">
             <h3>Bell Bottom</h3>
             <!-- <p class="price">Rs.350</p> -->
             <p>About movie description</p>
             <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_2.jpg" alt="movie1" style= "width:100%" >
            <h3>Tiger Zinda Hai</h3>
            <!-- <p class="price">Rs.350</p> -->
            <p>About movie description</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_3.jpg" alt="movie1" style= "width:100%" >
            <h3>Robinhood</h3>
            <!-- <p class="price">Rs.350</p> -->
            <p>About movie description</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_4.jpg" alt="movie1" style= "width:100%" >
            <h3>Suraj Pe Mangal Bhari</h3>
            <!-- <p class="price">Rs.350</p> -->
            <p>About movie description</p>
            <a href="#" class=nav_button>trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_5.jpg" alt="movie1" style= "width:100%" >
            <h3>Radhe</h3>
            <!-- <p class="price">Rs.350</p> -->
            <p>About movie description</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>
    </div>
    

</body>
</html>

