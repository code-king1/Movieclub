<?php                
    if(isset($_POST['check'])){
       include("connection.php");

      if(!$con){
          die("Connection to this database failed due to".mysqli_connect_error());
      }   

      $fullname= ( $_POST['fullname']) ;
      $email= ( $_POST['email']) ;
      $movie_name= ( $_POST['movie_name']) ;
      $name_on_card= ( $_POST['cardname']) ;
      $card_num= ( $_POST['cardnumber']) ;
      $exp_mon= ( $_POST['expmonth']) ;
      $exp_year= ( $_POST['expyear']) ;
      $cvv= ( $_POST['cvv']);
      $name_on_card= ( $_POST['cardname']) ;

      $insert="insert into transaction values('','$fullname','$email','$movie_name','$name_on_card','$card_num','$exp_mon','$exp_year','$cvv')" ;

      $ique= mysqli_query($con,$insert);

      if($ique){
          echo "<script> alert('Movie Booking Successful');</script>";
          header("Location: customer_index.php?msg=done");

      }
      else{
          echo "<script> alert('Movie Booking Unsuccessful');</script>";
          header("Location: movies.php?msg=undone");
      }
      

    }
  
?>

