<?php

session_start();

include "API/config.php";

//pet count
$sql_pet =  "SELECT * FROM pet_table ";
$result_pet = mysqli_query($conn,$sql_pet);
	
$total_pet_count = 0;

while($row=mysqli_fetch_Object($result_pet)){
    $total_pet_count += 1 ;
}

//user count
$sql_user =  "SELECT * FROM user_table ";
$result_user = mysqli_query($conn,$sql_user);
	
$total_user_count = 0;

while($row=mysqli_fetch_Object($result_user)){
    $total_user_count += 1 ;
}


//message count a day
$sql_message =  "SELECT * FROM message_table ";
$result_message = mysqli_query($conn,$sql_message);
	
$total_message_count = 0;
$today_date = date('Y-m-d');


while($row=mysqli_fetch_Object($result_message)){
    if($row->date_recieve == $today_date){
         $total_message_count += 1 ;
    }
}



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

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
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
      <section class="home-section">    <center>
           <div class="container">
                <div class="text_dashboard">Dashboard</div>
                    <br>
                    <br>
                    <div class="card" style="margin-left: 10%;width: 25%;float:left;">
                        <div class="card-header">Total Pet Registered</div>
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                     <h2 class="mb-4"><?=$total_pet_count;?> : <i class="fas fa-dog"></i></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-left: 3%;width: 25%;float:left;">
                        <div class="card-header">Total User </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                     <h2 class="mb-4"><?=$total_user_count;?> : <i class='bx bx-user' ></i></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-left: 3%;width: 25%;float:left;">
                        <div class="card-header">Total Message today </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                     <h2 class="mb-4"><?=$total_message_count;?> : <i class='bx bx-chat' ></i></h2>
                                </div>
                            </div>
                        </div>
                    </div>




                
                    <div class="container-fluid" style="margin-left: 9%;float:left;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card mt-4">
                                    <div class="card-header">Pie Chart</div>
                                    <div class="card-body">
                                        <div class="chart-container pie-chart">
                                            <canvas id="pie_chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card mt-4 mb-4">
                                    <div class="card-header">Bar Chart</div>
                                    <div class="card-body">
                                        <div class="chart-container pie-chart">
                                            <canvas id="bar_chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
     </section>

           

   

      <script src="script.js"></script>
      <script src="chart.js"></script>

</body>
<style>
        
    .container {
        height:700px;
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
        border-radius: 9px;   
        background-color: rgba(255, 255, 255, .15);
        backdrop-filter: blur(20px);
    }
    .card-header{
        background-color: #D4AC2B;  
    }
</style>
</html>

