<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>

.submit
{
    color:red;
    border-radius : 5px;
}
      </style>
  <body>
    <nav class="navbar">
      <div class="navbar__container">
        <a href="" id="navbar__logo">OWNERS PORTAL</a>
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
        <label>Hotel Name :</label>
        <input type="text" name="name" /><br /><br />

        <label>Location :</label>
        <input type="text" name="loc" /><br /><br />
        <label>Type of rooms :</label>

        <input type="radio" name="type" value="non-ac" />Non-Ac

        <input type="radio" name="type" value="ac" />Ac<br /><br />
        <label>No of rooms :</label>
        <input type="text" name="no" /><br /><br>   
        <button type="submit" name="submit" class='submit'>SUBMIT</button>
      </form>
    </center>
  </body>
  </html>

<?php
include('dbcon.php');

if(isset($_POST['submit']))

    {
        $name = $_POST["name"];
$loc = $_POST["loc"];
$type = $_POST["type"];
$no = $_POST["no"];

        $query = "insert into hotelowner values ('$name','$loc','$type','$no')";
        if(mysqli_query($con , $query))
        {
            echo "<script>alert('Added Successfully')</script>";
        }
    }

?>

