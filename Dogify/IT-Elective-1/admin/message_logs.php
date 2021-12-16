<?php
session_start();
 
include "API/config.php";

$sql =  "SELECT * FROM message_table INNER JOIN user_table ON message_table.sender = user_table.user_id ORDER BY message_table.date_recieve ASC";
$message_logs = mysqli_query($conn,$sql);

?>
<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogify's Admin Dashboard</title>
    <link rel = "stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body id = "boody">
    <div class="sidebar" style = "padding-left: 0;">
        <div class="logo-details">
            <i class='bx bxl-heart-square icon'></i>
            <div class="logo_name">
                <a href = "/admin/" style = "text-decoration: none; color: #fff;">Dogify</a>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list" style = "padding-left: 15px;">
          
          <li>
          <a href="dashboard.php">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
          </a>
              <span class="tooltip">Dashboard</span>
          </li>
          <li>
              <a href="user.php">
                  <i class='bx bx-user' ></i>
                  <span class="links_name">User</span>
              </a>
              <span class="tooltip">User</span>
          </li>
          <li>
              <a href="pet.php">
                  <i class="fas fa-dog"></i>
                  <span class="links_name">Pet</span>
              </a>
              <span class="tooltip">Pet</span>
          </li>
          <li>
          <a href="message_logs.php">
              <i class='bx bx-chat' ></i>
              <span class="links_name">Message Logs</span>
          </a>
          <span class="tooltip">Message Logs</span>
          </li>
          <a href = "/">
              <li class="profile">
              
                  <div class = "text_logout">Log-Out</div>
                  <i class='bx bx-log-out' id="log_out" ></i>
              </li>
          </a>
      </ul>
      </div>
      <!-- front end header indicator -->
      <section class="home-section">
          <div class="text_forums">Message logs</div>
          <br><center>
          <table class="table table-striped" style="width:80%;">	
			  <thead lass="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Date recieved</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  
                  $count = 0 ;
                  while($row=mysqli_fetch_array($message_logs)){ 
                    $count += 1;
                    $receiver = $row['receiver'];
                    $sender = $row['sender'];
                  ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$row['date_recieve']?></td>
                    <td>
                        <?php 
                                $sql2 =  "SELECT * FROM user_table WHERE user_id = $sender ";
                                $to = mysqli_query($conn,$sql2);
                                
                                while($rows=mysqli_fetch_array($to)){ 
                                    echo $rows['user_fullname'];
                                } 
                            ?>
                    </td>
                    <td>
                        <?php 
                                $sql2 =  "SELECT * FROM user_table WHERE user_id = $receiver ";
                                $to = mysqli_query($conn,$sql2);
                                
                                while($rows=mysqli_fetch_array($to)){ 
                                    echo $rows['user_fullname'];
                                } 
                            ?>
                    </td>
                    <td><?=$row['message_status']?></td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
      </section>
    
      <script src="script.js"></script>
    
</body>
</html>