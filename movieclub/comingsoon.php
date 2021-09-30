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
            <a href="index.php" class=nav_button>Home</a>
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
             <p>Bell Bottom is a 2021 Indian Hindi-language action thriller film directed by Ranjit M Tewari. ... Bell Bottom is inspired from real life hijacking events in India by Khalistani separatists during the 1980s, such as the Indian Airlines Flight 423, 405 and 421 hijackings</p>
             <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_2.jpg" alt="movie1" style= "width:100%" >
            <h3>Tiger Zinda Hai</h3>
            <p>Tiger Zinda Hai is a 2017 Indian action thriller espionage film directed by Ali Abbas Zafar and co-written with Neelesh Misra. ... In Tiger Zinda Hai, Tiger (Khan) and Zoya (Kaif) are forced to come out of hiding to save a group of hostages held by a militant terrorist organization in Iraq.</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_3.jpg" alt="movie1" style= "width:100%" >
            <h3>Robinhood</h3>
            <p>Robin Hood is a 2018 American action-adventure film directed by Otto Bathurst and written by Ben Chandler and David James Kelly, from a story by Chandler. It is a quasi-contemporary retelling of the Robin Hood legend, and follows his training by John to steal from the Sheriff of Nottingham.</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_4.jpg" alt="movie1" style= "width:100%" >
            <h3>Suraj Pe Mangal Bhari</h3>
            <p>Suraj Pe Mangal Bhari is a 2020 Indian Hindi-language satirical comedy-drama film directed by Abhishek Sharma and produced by Zee Studios. The film stars Manoj Bajpayee, Diljit Dosanjh and Fatima Sana Shaikh in leading roles.</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>

        <div class="boxed"><img src="movies_images/2_5.jpg" alt="movie1" style= "width:100%" >
            <h3>Radhe</h3>
            <p>Radhe: Your Most Wanted Bhai is a 2021 Indian Hindi-language action thriller film directed by Prabhu Deva and produced by Salman Khan, Sohail Khan, Atul Agnihotri and Zee Studios. The core plot of the film is based on the 2017 Korean film The Outlaws. The film stars Khan, Disha Patani, Randeep Hooda and Jackie Shroff.</p>
            <a href="#" class=nav_button>Trailer</a>
        </div>
    </div>
    

</body>
</html>

