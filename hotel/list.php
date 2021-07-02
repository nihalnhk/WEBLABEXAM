<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar__container">
        <a href="" id="navbar__logo">DISPLAY USERS</a>
        <div class="navbar_toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.php" class="navbar__links"> HOME </a>
          </li>
        </ul>
      </div>
    </nav>
    <center>
      <form action="#" method="POST" style="margin-top: 200px">
      <label> HOTEL NAME :</label>
        <input type="text" name="h_name" /><br /><br />
         
        <button type="submit" name="submit">SUBMIT</button>
      </form>
    </center>

  </body>
</html>
<?php
include('dbcon.php');




if(isset($_POST['submit']))

    {

        echo "<style>

        table,th,td
        {
            border: 1px solid black;
        }

        
        
        </style>";
        $h_name = $_POST["h_name"];

         echo"<br><br><br>";
         echo "<center><br>";
         echo "<h1 style = 'color:red';>BOOKING DETAILS</h1>";
         
         echo "<table style='border: 1px solid black;'>";
         echo "<tr style='border: 1px solid black;'>";
         echo "<td style='border: 1px solid black;' >Name</td>";
         echo "<td>Contact No</td>";
         echo "<td>Arrival date</td>";
         echo "<td>Room Type</td>";
         echo "<td>No Of Rooms Booked</td>";
         $q1 = "select u_name,u_no,type,date,no_rooms from user where h_name = '$h_name'";
         $res = mysqli_query($con,$q1);
        
         if(mysqli_num_rows($res) > 0)
 {
     while($row = mysqli_fetch_assoc($res))
     {
         
 
         
         echo "<tr><td>".$row["u_name"]."</td>"." "."<td>".$row["u_no"]."</td>"." "."<td>".$row["date"]."</td>"." "."<td>" .$row["type"]."</td>"." "."<td>".$row["no_rooms"]."</td></tr>"; 
         
 
 
     }
 }
 echo "</table>";
 echo "</center>";
            
    }

?>