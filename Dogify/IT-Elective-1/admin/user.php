<?php
session_start();
 
include "API/config.php";

$sql =  "SELECT * FROM user_table";
$user = mysqli_query($conn,$sql);


?>
<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogify's Admin Dashboard</title>
    <link rel = "stylesheet" href = "style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
     
          <div class="text_users">Users</div>
          <br>
          <center>
          <input id="myInput" style="width:80%;"  class="form-control" type="text" name="search" placeholder="Search" >
          <br>
          <table class="table table-striped" style="width:80%;">	
			  <thead lass="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Action</th>
                </tr>
              </thead>
              <?php 
                  	
                  $count = 0 ;
                  while($row=mysqli_fetch_Assoc($user)){ 
                    $count += 1;
                  ?>
              <tbody  id="myTable">
                 
                <tr>
                    <td><?=$count?></td>
                    <td><?php echo "<img style='width:50px;height:50px;' src='../../Uploads/".$row['user_image']."' >";  ?> </td>
                    <td><?=$row['user_fullname'];?></td>
                    <td><?=$row['user_address'];?></td>
                    <td><?=$row['user_email'];?></td>
                    <td><?=$row['user_cn'];?></td>
                    <td>
                        <div class="row" style="float:right">
                            <div class="col-md-12" >	
                                <div class="form-group">
                                    <button   class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal" >Update</button>	
                                    <a href="API/delete.php?id_user=<?=$row['user_id'];?>"><button  class="btn btn-outline-danger">Delete</button></a>
                                </div>	
                            </div>
                        </div>	
                    </td>
                </tr>
                </tbody>

                    <!-- MODAL show student-->            
                    <div class="modal fade" id="myModal">
                        
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Pet</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                                                            
                                        <div class="row" >
                                            <div class="col-md-12" >	
                                                <div class="form-group">
                                                        <form method="POST" action="API/Update.php">

                                                        <div class="row" >
                                                                <div class="col-md-12" >	
                                                                    <div class="form-group">
                                                                        <label style="float:left">First name:</label>
                                                                        <input class="form-control" type="text" name="fname" placeholder="Name" required>	
                                                                    </div>	
                                                                </div>	
                                                            </div>

                                                            <div class="row" >
                                                                <div class="col-md-12" >	
                                                                    <div class="form-group">
                                                                        <label style="float:left">LastName:</label>
                                                                        <input class="form-control" type="text" name="lname" placeholder="Name" required>	
                                                                    </div>	
                                                                </div>	
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12" >	
                                                                    <div class="form-group">
                                                                        <label style="float:left">Address:</label>
                                                                        <input class="form-control" type="text" name="adds" placeholder="Address" required>	
                                                                    </div>	
                                                                </div>	
                                                            </div>

                                                            <div class="row" >
                                                                <div class="col-md-12" >	
                                                                    <div class="form-group">
                                                                        <label style="float:left">Email: </label>
                                                                        <input class="form-control" name="email" placeholder="Email" required>	
                                                                    </div>	
                                                                </div>	
                                                            </div>

                                                            <div class="row" >
                                                                <div class="col-md-12" >	
                                                                    <div class="form-group">
                                                                        <label style="float:left">Contact No.: </label>
                                                                        <input class="form-control" type="number" name="cn" placeholder="+09123456789" required>	
                                                                    </div>	
                                                                </div>	
                                                            </div>

                                                            <input class="form-control" type="text" name="user_id" value="<?=$row['user_id']?>" hidden>	
                                                            <input class="form-control" type="text" name="pass" value="<?=$row['password']?>" hidden>	
                                                            <input class="form-control" type="text" name="image" value="<?=$row['user_image']?>" hidden>

                                                    <!-- Modal footer -->
                                                <div  +class="modal-footer">
                                                    <button type="submit" style="float:right;" name="user"  class="btn btn-success" >Save Changes</button>
                                                    </form>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
            
            <?php } ?>
           
             </table>    
             

         
       <script src="script.js"></script>
        <script src="Assets/js/jquery.min.js"></script>
		<script src="Assets/js/popper.min.js"></script>
		<script src="Assets/js/bootstrap.min.js"></script>
		<script src="search.js"></script>

    
</body>
</html>