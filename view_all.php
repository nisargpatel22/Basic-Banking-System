<html>

<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<head>
    <title>View all Users</title>
  <link rel="stylesheet" href="css/tm.css">
</head>

<body>
<header>
        <div class="topnav">
            <div class="topnav-left">
                <a href="#">Basic Banking.com</a>
            </div>
            <a href="about.html">About</a>
            <a class="active" href="view_all.php">View all User</a>
            <a href="index.html">Home</a>
        </div>
        </div>
    </header>

<div class="container">
        <h1>All Current Users</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         

         <div id="footer-container">
        <div id="footer-header"> Copyright © 2022 Nisarg. All Right Reserved <br>
            Basic Banking System
        </div>
    </div>


</body>
</html>
