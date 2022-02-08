
<!-- <head>
  <title>Bootstrap Example</title>
    <link rel="stylesheet" href="css/mystyle.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     <div class="nav navbar-nav navbar-left">
     <span><img src="images/logo.png" style= "  height: 52px;
    width: 117px;
   
    margin-left: -22px;"></span>
   </div>
   

      <h1 class="navbar-bnd">Bed Availablity</h1>
        
    <ul class="nav navbar-nav">
      <li ><a href="#">Home</a></li>

      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="#" style="padding: 25px;"><span class="glyphicon glyphicon-user"></span> Contect</a></li>
      <li><a href="#" style="padding: 25px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  
</nav>
  
<div class="container">
  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>

</body>
</html> -->
<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

//.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: #555;
  height: 500px;
  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

 Simulate a smartphone / tablet 
<div class="mobile-container">

 Top Navigation Menu 

<div class="topnav">

  
     <span><img src="images/logo.png" style="height: 68px; width: 133px;"></span>
     <h1 class="navbar-bnd">Bed Availablity</h1>
 

  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>

<div style="padding-left:16px">
  <h3>Vertical Mobile Navbar</h3>
  <p>This example demonstrates how a navigation menu on a mobile/smart phone could look like.</p>
  <p>Click on the hamburger menu (three bars) in the top right corner, to toggle the menu.</p>
</div>
 End smartphone / tablet look 
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bed Availablity</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" 

      style="margin-right: -24px; margin-left: -37px; margin-top: -24px; background-color: #c2b1d7fa!important;">
   
   
        <div class="container-fluid">
            <span><img src="images/logo.png" style= "  height: 52px;
    width: 117px;
   
    margin-left: -22px;"></span>
            <h3 class="navbar-brand" style="margin-left: -26px;">Bed Availablity</h3>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Inbox</a>
                            <a href="#" class="dropdown-item">Sent</a>
                            <a href="#" class="dropdown-item">Drafts</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
     </div>
     
          <img  src="images/hsptl6.jpg" alt="First slide" style="width: 100%;
    margin-top: -24px;"><br><br>
    <br>
    <div class="search-container">
    <form action="index.php" method="POST">
      &nbsp;&nbsp;<strong>District Name:</strong>
      &nbsp;<input type="text" placeholder="serach..."  id="searchbar" name="search" >
      <button type="submit" ><i class="fa fa-search"></i></button>
    </form>

  </div>
  <br>
  <div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">

    <!--Table head-->
    
<?php
include_once 'db_connect.php';
if(isset($_POST['search']))
{
$val=$_POST["search"];
//$sql = "SELECT * FROM register WHERE district = ' + $val + '";
$result = mysqli_query($conn,"SELECT * FROM register WHERE district = '$val'");

?>
<?php
if (mysqli_num_rows($result)>0) {
  
?>
<table class='table table-bordered table-striped'>
<tr>
  <th>Hospital Code</th>
      <th>Hsptl Name</th>
      <th>Total Bads</th>
    
       <th>Normal Beds</th>

       <th>Oxygen Beds</th>
       <th>ICU Beds</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
  
?>
<tr>
<td><?php echo $row["sno"]; ?></td>
<td><?php echo $row["hsptlname"]; ?></td>
<td><?php echo $row["totalbed"]; ?></td>
<td><?php echo $row["normalbed"]; ?></td>
<td><?php echo $row["oxygenbed"]; ?></td>
<td><?php echo $row["icubed"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
}
else{
echo "";
}
?>
    <!--Table head-->

    <!--Table body-->
    <!--<tbody>
      <tr>
        <th scope="row">1</th>
         
      <td>Goverment Hospital</td>
      <td>1000</td>
      <td>500</td>
      <td>300</td>
      <td>200</td>

      </tr>
      <tr>
        <th scope="row">2</th>
         <td>JCB Hospital</td>
      <td>500</td>
      <td>300</td>
      <td>100</td>
      <td>100</td> 
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>City Hospital</td>
      <td>100</td>
      <td>70</td>
       <td>20</td>
       <td>10</td> 
      </tr>
    </tbody>-->
    <!--Table body-->
  </table> 
  <!--Table-->
</div>

  <!--Table-->
</div>
</tbody>
</table>
</form>
</div>
  










       
 

<!-- slide banners

 <div class="slide-by">
<div class="wrapper">
  <div id="carousel-slider"  class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000">
      
      <ol class="carousel-indicators" >
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        
        <li data-target="#carousel-slider" data-slide-to="2"></li>
        <li data-target="#carousel-slider" data-slide-to="3"></li>
      </ol>
     
     
      <div class="carousel-inner" role="listbox">
       
        <div class="carousel-item active" >
          <img class="d-block w-100" src="images/hsptl6.jpg" alt="First slide">
        </div>
     
     
           
     
        <div class="carousel-item">
          <img class="d-block w-100" src="images/bed3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/bed4.jpg" alt="Third slide">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="images/bed5.jpg" alt="fourth slide">
        </div>
      
      </div>
    </div>
</div>
</div> -->
<!-- <?php
include_once("db_connect.php");
$val=$_GET['search'];

$sql = "SELECT * FROM register WHERE district = ' + $val + '";
$page = 1;

$query =  $sql; 
$resultset = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$records = mysqli_fetch_assoc($resultset);
if(empty($_GET["searchbar"])) {
  $_GET["searchbar"] = mysqli_num_rows($resultset); 
}
$message = '';
if(!empty($records)) {
  $message .= '<input type="hidden" class="searchbar" value="' . $_GET["searchbar"] . '" />';
  while( $rows = mysqli_fetch_assoc($resultset) ) {
    $message .= '<div  class="well">' .$rows["district"] . '</div>';
  }
}
echo $message;
?> -->


</body>
</html>
