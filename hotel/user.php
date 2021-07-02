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
        <a href="" id="navbar__logo">NHK HOTELS</a>
        <div class="navbar_toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="" class="navbar__links"> HOME </a>
          </li>
        </ul>
      </div>
    </nav>
    <center>
      <form action="#" method="POST" style="margin-top: 200px">
      <label> Name :</label>
        <input type="text" name="u_name" /><br /><br />
        <label>Contact No :</label>
        <input type="text" name="u_no" /><br /><br />
        <label>Hotel Name :</label>
        <input type="text" name="name" /><br /><br />
        <label>Arrival Date :</label>
        <input type="date" name="date" /><br /><br />
        <label>Type of room :</label>

        <input type="radio" name="type" value="non-ac" />Non-Ac

        <input type="radio" name="type" value="ac" />Ac<br /><br />
        <label>No of rooms :</label>
        <input type="text" name="no" /><br /><br>   
        <button type="submit" name="submit">SUBMIT</button>
      </form>
    </center>

  </body>
</html>
<?php
include('dbcon.php');
echo "<style>

        table,th,td
        {
            border: 1px solid black;
        }

        h1
        {
            color:red;
        }
        
        
        </style>";


if(isset($_POST['submit']))

    {
        $u_name = $_POST["u_name"];
        $u_no = $_POST["u_no"];
        $h_name = $_POST["name"];
        $date = $_POST["date"];
        $type = $_POST["type"];
        $no = $_POST["no"];
       

        $query = "insert into user values ('$u_name',' $u_no','$h_name','$date','$type','$no')";
        if(mysqli_query($con , $query))
        {
            echo "<script>alert('Booked Successfully')</script>";
        }
    }



        
        echo"<br><br><br>";
        echo "<center><br>";
        echo "<h1>HOTELS AVAILABLE</h1>";
        
        echo "<table style='border: 1px solid black;'>";
        echo "<tr>";
        echo "<td >Name</td>";
        echo "<td>Location</td>";
        echo "<td>room type</td>";
        echo "<td>No of rooms</td>";
       


        $query = "select * from hotelowner";
        $result = mysqli_query($con , $query);
        if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        

        
        echo "<tr><td>".$row["h_n"]."</td>"." "."<td>".$row["location"]."</td>"." "."<td>" .$row["room_type"]."</td>"." "."<td>".$row["no_of_room"]."</td></tr>"; 
        


    }
}
echo "</table>";
echo "</center>";
           
        


?>
