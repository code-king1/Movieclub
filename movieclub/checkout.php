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
<a href="movies.php" class=nav_button>Back</a>

</head>


<body>
  <h3 align= "center">
    <font face="Arial" size="8"><u>Movie Club</u></font>
     <img src="index_images/6.png" height="70" width="70"></img>
 </h3>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="insert_code.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing </h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="fullname" placeholder="Enter your name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php
                    $a = $_SESSION["login"];
                    $find= "select email from registration where sno='$a'";
                    $result = $con->query($find);
                    $row = $result->fetch_assoc();
                    echo $row["email"];
                    ?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Movie Name</label>
            <input type="text" id="adr" name="movie_name" value="<?php  
                $a = $_GET["a"];
                $query="select movie_name from movie where m_id='$a'";
                $result=$con->query($query);
                $row = $result->fetch_assoc();
                echo $row["movie_name"];
            ?>">
       
           
            </div>
          </div>
          <div class="row">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter name as appears on your card">
            <label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Enter Month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Enter Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter your CVV">
              </div>
            </div>
          </div>
        </div>
          
        </div>
        <!-- <input type="submit" name="regi" value="Register" class="reg"> -->
        <input type="submit" name="check" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</body>




</html>
