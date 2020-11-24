<!DOCTYPE html>
<html>
	<head>
		<title>Reports</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 14px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
			<header>
      <div class="inner-width">
        <i class="menu-toggle-btn fas fa-bars"></i>
         <nav class="navigation-menu">
          <a href="index.php"><i class="fas fa-home home"></i> Home</a>
          <a href="Registration.html"><i class="fas fa-align-left about"></i>Registration</a>
          <a href="display.php"><i class="fab fa-buffer works"></i>Online reports</a>
          <a href="About Us.html"><i class="fas fa-users team"></i>About</a>
          <a href="Contact us.html"><i class="fas fa-headset contact"></i>Contact Us</a>
        </nav>
      </div>
    </header>
    </head>
   <body>
     <?php
  		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_bus_registration_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql1 = "SELECT vehicle_regno, vehicle_name, capacity,Owner_ID,Driver_ID,Route_Name,Sacco_Name FROM vehicle_info";
        $result1 = $conn->query($sql1) or die($conn->error);
?>
         <table id="Confirms" border ="2" style="length:900px;width:350px;">
              <thead>
                <tr style= "background-color: #A4A4A4;">
                  <td>Vehicle Reg:</td>
                  <td>vehicle name:</td>
                  <td>capacity:</td>
                  <td>Owner ID:</td>
                  <td>Driver Id:</td>
                  <td>route name:</td>
                  <td>Sacco Name:</td>
                </tr>
              </thead>
            <tbody>
<?php
        while($row = $result1->fetch_assoc()!== null){
                    echo
                    "<tr>
                      <td>{$row['vehicle_regno']}</td>
                      <td>{$row['vehicle_name']}</td>
                      <td>{$row['capacity']}</td>
                      <td>{$row['Owner_ID']}</td>
                      <td>{$row['Driver_ID']}</td>
                      <td>{$row['Route_Name']}</td>
                      <td>{$row['Sacco_Name']}</td>
                    </tr>\n";
                  }
?>
 </tbody>
        </table>
<?php
        $sql2 = "SELECT drivers_ID, drivers_name, Phone_number,email_address FROM drivers_info";
        $result2 = $conn->query($sql2) or die($conn->error);
?>
         <table id="Confirms" border ="2" style="length:900px;width:350px;">
              <thead>
                <tr style= "background-color: #A4A4A4;">
                  <td>Driver's ID:</td>
                  <td>Driver name:</td>
                  <td>Phone Number:</td>
                  <td>Email address:</td>            
                  
                </tr>
              </thead>
            <tbody>
<?php
        while($row = $result2->fetch_assoc()!== null){
                    echo
                    "<tr>
                      <td>{$row['Driver_ID']}</td>
                      <td>{$row['drivers_name']}</td>
                      <td>{$row['Phone_number']}</td>
                      <td>{$row['email_address']}</td>
                    </tr>\n";
                  }
?>
 </tbody>
        </table>
        <?php
        $sql3 = "SELECT Owner_ID, Owner_name, Phone_number,email_address FROM owner_info";
        $result3 = $conn->query($sql2) or die($conn->error);
?>
         <table id="Confirms" border ="2" style="length:900px;width:350px;">
              <thead>
                <tr style= "background-color: #A4A4A4;">
                  <td>Owner's ID:</td>
                  <td>Owner name:</td>
                  <td>Phone Number:</td>
                  <td>Email address:</td>            
                  
                </tr>
              </thead>
            <tbody>
<?php
        while($row = $result2->fetch_assoc()!== null){
                    echo
                    "<tr>
                      <td>{$row['Owner_ID']}</td>
                      <td>{$row['Owner_name']}</td>
                      <td>{$row['Phone_number']}</td>
                      <td>{$row['email_address']}</td>
                    </tr>\n";
                  }
?>
 </tbody>
        </table>

 <?php
    $conn->close();
?>
</body>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="logo2.png" alt="" class="logo">
          <div class="social-media">
            <a href="https://www.facebook.com/collins.kandie.56"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/kandie_collins"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/kandie_official"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/account"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/in/collins-kandie-0929b81aa"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">© 2020 Created.</p>
        </div>

        <div class="right-col">
          <h1>Our Newsletter</h1>
          <div class="border"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
            <input type="submit" class="btn" value="submit">
          </form>
        </div>
      </div>
    </footer>   
</html>