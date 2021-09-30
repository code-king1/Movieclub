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
    
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    
    </style>


</head>
<body>
    <h3 align= "center">
        <div align="left">
            <a href="admin_index.php" class=nav_button>Home</a>
        </div>
        <font face="Arial" size="8"><u>Movie Club</u></font>
         <img src="index_images/6.png" height="70" width="70"></img>
     </h3>


     <h2 align= "center">
        <font face="calibri" size="6">
              Movies available to watch
         </font>
    </h2>

<br>
<br>

</body>

<?php
                $query="select * from movie";
                $result=$con->query($query);
                if(!$result) echo "Querying failed";
                
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>ID</th><th>Movie_Name</th><th>Description</th><th>Language</th><th>Price</th></tr>";
                    while($row = $result->fetch_assoc()) {
                        $a = $row["m_id"];
                        echo "<tr><td>".$row["m_id"]."</td><td>".$row["movie_name"]."</td><td>".$row["movie_desc"]."</td><td>".$row["movie_lang"]."<td>".$row["movie_price"]."</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "No Data";
                }
  ?>

</html>

