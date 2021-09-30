<?php
    session_start();
    include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 100px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #f2f2f2;
  color: black;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 100%;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #00ffff;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<link href="nav_buttons.css" type="text/css" rel="stylesheet"/>
<a href="admin_index.php" class=nav_button>Back</a>

</head>


<body>
  <h3 align= "center">
    <font face="Arial" size="8"><u>Movie Club</u></font>
     <img src="index_images/6.png" height="70" width="70"></img>
 </h3>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="addmovie.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Add Movies </h3>

            <label for="movie_name"><i class="fa fa-user"></i> Movie Name</label>
            <input type="text" id="name" name="movie_name" placeholder="Enter movie name">


            <label for="text"><i class="fa fa-envelope"></i> Movie Description</label>
            <input type="text" id="email" name="movie_desc" value="" placeholder="Enter movie description">


            <label for="lang"><i class="fa fa-address-card-o"></i> Movie Language</label>
            <input type="text" id="adr" name="movie_lang" value="">


            <label for="price"><i class="fa fa-address-card-o"></i> Movie Price</label>
            <input type="num" id="adr" name="movie_price" value="">
       
           
            </div>
          </div>

        <input type="submit" name="add" value="ADD" class="btn">
      </form>
      </div>
    </div>
</div>

</body>


<?php                
    if(isset($_POST['add'])){
       include("connection.php");

      if(!$con){
          die("Connection to this database failed due to".mysqli_connect_error());
      }   

      $m_name= ( $_POST['movie_name']) ;
      $m_desc= ( $_POST['movie_desc']) ;
      $m_lang= ( $_POST['movie_lang']) ;
      $m_price= ( $_POST['movie_price']) ;
                        

      $insert="insert into movie values('','$m_name','$m_desc','$m_lang','$m_price')" ;

      $ique= mysqli_query($con,$insert);

      if($ique){
          echo "<script> alert('Movie added Successfully');</script>";
      }
      else{
          echo "<script> alert('Couldnot add movie');</script>";
      }

    }
  
?>

</html>
