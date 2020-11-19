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