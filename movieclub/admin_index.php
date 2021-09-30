<?php
    session_start();
    include("connection.php");
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    MOVIE CLUB
  </title>
  
</head>
<body background="index_images/2.jpg" >
   
   <h3 align= "center">
       <font face="Arial" size="8"><u>Movie Club</u></font>
        <img src="index_images/6.png" height="70" width="70"></img>
    </h3> 

    <h2 align= "right">
        <font face="calibri" size="6">
              <a href='movies_admin.php'>Movies</a> &nbsp;&nbsp;
              <a href='addmovie.php'>Add Movies  </a> &nbsp;&nbsp;
              <a href='#'>  Coming Soon  </a> &nbsp;&nbsp;
              <a href='#'>  Offers  </a> &nbsp;&nbsp;
              <a href='About.php'>  About  </a> &nbsp;&nbsp;
              <a href="#">
                <?php
                    $a=$_SESSION["login"];
                    $find = "select * from registration_admin where sno='$a'";
                    $result=$con->query($find);
                    $row=$result->fetch_assoc();
                    echo "profile:".$row["username"];
                ?>
              </a> &nbsp;&nbsp;
              <a href='logout.php'>  Logout  </a> &nbsp;&nbsp;
         </font>
    </h2> 
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;

<img src="index_images/3.gif" height="200" width="300"></img>

 &nbsp;&nbsp; &nbsp;&nbsp;

<img src="index_images/4.gif" height="200" width="300"></img>
<br /> <br />
<h1 align="right">
<img src ="index_images/7.gif"></img>
</h1>
<br /> <br /><br /> <br /><br /> <br /><br />
 <br /><br /><br /><br />
<h1 align="right">
<img src ="index_images/8.jpg"></img>
</h1>

 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<img src ="index_images/10.gif"></img>
<br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
<br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
<br /> <br /><br /><br />
<h1 align="right">
<img src ="index_images/9.jpg"></img>
</h1>



</body>
</html>


