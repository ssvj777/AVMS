<?php
$connection= mysqli_connect("localhost","root","","AVMS");

$query="select * from admin";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);

$name = $row['AdminName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Stylesheets/Common_Stylesheet.css">
    <link rel="stylesheet" href="Stylesheets/Dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
           
</head>
<body>   
    <div class="list">
        <ul>
            <li><h1>  <i> AVMS </i> </h1></li>
            <li><a href="Dashboard.php" class="items"><i class="bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="Visitors.HTML" class="items"><i class="bi-person-plus-fill"></i> New Visitor</a></li>
            <li><a href="Manage_Visitors.php" class="items"><i class="bi-people-fill"></i> Manage Visitors</a></li>
            <li><a href="Report_Page.HTML" class="items"><i class="bi-pencil-square"></i> Visitors B/w Dates</a></li>
            <li class="admin-content" >
                <a class="admin"> <i class="bi-person-lines-fill"></i>&emsp;Admin  <i class="bi-chevron-down"></i></a>
                <div class="admin-list">    
                    <a href="Admin_Profile.php"> <i class="bi-person-circle"></i> &emsp;Admin Profile</a>
                    <a href="Admin_Password.php"> <i class="bi-gear-fill"></i> &emsp;Change Password</a>
                    <a href="Index.HTML"> <i class="bi-power"></i> &emsp;Logout</a>
                </div>
            </li>
        </ul>
    </div>

    <form action="Search_Bar.php" method="post">
        <div class="search">
            <input type="text" class="search-box" name="search" size="32cm" placeholder="Search Visitor by Name or Phone Number ">
            <button type="submit" class="icon"><i class="bi-search"></i></button>
        </div>
    </form>


        <h1 class="head">Welcome <?php echo $name;?>!</h1>
        <div class="dashboard">
            <div class="widget widget-1">
                <?php 
                    $result = mysqli_query($connection,"SELECT COUNT(*) AS total FROM Visitors WHERE DATE(Date_of_Visit) = DATE(Now())");
                    $row= mysqli_fetch_assoc($result);
                    $total_Visitors = $row['total'];
                ?>
                <h3><i class="bi-people-fill"></i></h3>
                <h1> Today's Visitors: <?php echo $total_Visitors; ?></h1>
            </div>

            <div class="widget widget-2">
                <?php 
                    $query1=mysqli_query($connection,"select id from visitors where date(Date_of_Visit)=CURDATE()-1;");
                    $count_yesterday_visitors=mysqli_num_rows($query1);
                ?>
                <h3><i class="bi-people-fill"></i></h3>
                <h1> Yesterday's Visitors:  <?php echo $count_yesterday_visitors?></h1>
            </div>

            <div class="widget widget-3">
            <?php 
                    $query2=mysqli_query($connection,"select id from visitors where date(Date_of_Visit)>=(DATE(NOW()) - INTERVAL 7 DAY);");
                    $count_lastsevendays_visitors=mysqli_num_rows($query2);
                ?>
                <h3><i class="bi-people-fill"></i></h3>
                <h1> Last 7 Days Visitors:  <?php echo $count_lastsevendays_visitors?></h1>
            </div> 
        </div>
            
        <div class="dashboard">
            <div class="widget widget-4">
                <?php 
                    $query3=mysqli_query($connection,"select id from visitors where date(Date_of_Visit)>=(DATE(NOW()) - INTERVAL 30 DAY);");
                    $count_30days_visitors=mysqli_num_rows($query3);
                ?>
                <h3><i class="bi-people-fill"></i></h3>
                <h1> Last 30 Days Visitors:  <?php echo $count_30days_visitors?></h1>
            </div>

            <div class="widget widget-5">
                <?php 
                    $dash_Visitors_query="select * from Visitors";
                    $dash_Visitors_query_run= mysqli_query($connection,$dash_Visitors_query);
    
                    if($Visitors_total = mysqli_num_rows($dash_Visitors_query_run))
                    {
                        echo '<h3><i class="bi-people-fill"></i></h3>
                        <h1>Total Visitors Till Date:  '.$Visitors_total.'</h1>';
                    }
                ?>        
            </div>
        </div>
</body>
</html>
