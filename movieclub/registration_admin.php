<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }

    * {
      box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
      border-radius: 5px;
      padding: 16px;
      background-color: white;
    }

    /* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

    .txt_box{
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    .label{
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    /* Overwrite default styles of hr */
    hr{
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn{
      background-color: cyan;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover{
      opacity: 1;
    }

    /* Add a blue text color to links */
    a{
      color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin{
      background-color: #f1f1f1;
      text-align: center;
    }
  </style>

<link href="nav_buttons.css" type="text/css" rel="stylesheet"/>
</head>

<body>

  <form action="registration_admin.php" method="POST">
    <div class="container">
      <h1>Register Admin</h1>
      <p>Please fill in this form to create an account.</p>
      <hr />
    
         <label for="username"><b>Username</b></label>
         <input type="text" name="user" placeholder="User name" required="">

       
         <label for="email"><b>Email</b></label>
         <input type="text" name="email" placeholder="email here" required>

      <label for="mobile_num"><b>Mobile Number</b></label>
      <input type="text" name="mobile" placeholder="Mobile number" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" name="pass" placeholder="Password here" required="" class="fou">

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" name="cpass" placeholder="Confirm password" required="" class="fiv">
      

      <button type="submit" name="regi_admin" value="Register">Register</button>
      
      
    
      <hr />
      <p>
        By creating an account you agree to our
        <a href="#">Terms & Privacy</a>.
      </p>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="login_admin.php">Sign in</a>.</p>
    </div>
  </form>



<?php                
    if(isset($_POST['regi_admin'])){
       include("connection.php");

      if(!$con){
          die("Connection to this database failed due to".mysqli_connect_error());
      }   

      $username= ( $_POST['user']) ;
      $email= ( $_POST['email']) ;
      $mobile= ( $_POST['mobile']) ;
      $password= ( $_POST['pass']) ;
      $cpassword= ( $_POST['cpass']) ;
                        

      $insert="insert into registration_admin values('','$username','$email','$mobile','$password','$cpassword')" ;

      $ique= mysqli_query($con,$insert);

      if($ique){
          echo "<script> alert('Admin Registration Successful');</script>";
      }
      else{
          echo "<script> alert('Admin Registration Unsuccessful');</script>";
      }

    }
  
?>

</body>

</html>