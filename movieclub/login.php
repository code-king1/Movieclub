<?php
    session_start();
    include("connection.php");
?>

<!DOCTYPE html>  
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
        font-family: Calibri, Helvetica, sans-serif;  
        background-color: white;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: white;
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid cyan;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    } 
    .signup{
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px; 
    }  
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>
  
</head>    
<body>    
    <center> <h1> User Login </h1> </center>   
    <form action="login.php" method="POST"> 
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>
            <input type="checkbox" checked="unchecked"> Remember me
            <a href="#">Forgot password</a>
            <input type="submit" name="sub" class=cancelbtn value="login">
            </br>   
               

            <a href="index.php"><button type="button" class="cancelbtn" > Cancel</button></a>
            
            
            <button type="button" class="signup"> <a href="registration.php">Sign Up</a></button>
        </div>   
    </form>
        
</body>


<?php
    include("connection.php");
?>

<?php
    if(isset($_POST['sub'])) {
        $username = ( $_POST['username']) ;
        $password = ( $_POST['password']) ;


        $find = "select * from registration where username='$username'";

        $result = $con->query($find);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($password == $row['pass']){
                echo "<script> alert('Welome my friend');</script>";
                $_SESSION["login"] = $row["sno"];
                header("Location: customer_index.php?msg=undone");
            }
            else{
                echo "<script> alert('Incorrect Password');</script>";
            }
        }
        else{
            echo "<script> alert('User Doesnt Exist');</script>";
        }
    }
?>

</html>