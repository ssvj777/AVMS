<?php
$connection= mysqli_connect("localhost","root","","project");

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body
        {
            background-image:url(city.jpg);
            background-size: cover;
            background-repeat: no-repeat;  
        }
        ul
        {
            list-style-type: none;
            margin:0;
            padding:0;
            overflow:hidden;
            background-color:blue;
            font-style: italic;
        }
        li{
            float:left;
        }
        li a, .dropbtn{
            display:inline-block;
            color:white;
            text-align:center;
            text-decoration: none;
            padding:28px;
            font-size:20px;
            font-weight: bolder;     
        }
        .dropbtn
        {
            margin-left: 5cm;
        }
        li a:hover,.dropdown:hover .dropbtn
        {
            background-color:darkblue;
        }
        .dropdown-content
        {
            display:none;
            position:absolute;
            z-index:1;
        }
        .dropdown-content a
        {
            color:black;
            text-decoration: none;
            display:block;
            text-align: left;
            padding:05mm; 
            margin-left: 3.8cm;  
        }
        .dropdown-content a
        {
            background-color: white;
        }
        .dropdown-content a:hover
        {
            background-color: darkblue;
        }
        .dropdown:hover .dropdown-content
        {
            display:block;
        }
        .hh
        {
            padding-left: 1cm;
            padding-right: 1cm;
            color:black;
        }
        .h2
        {
            font-size:1.2cm;
        }
        .dashboard
        {
            display: flex;
            flex-wrap: wrap;
            margin-left:3cm;
        }
        .widget 
        {
            border: 1px solid #cccccc;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: 17px;
            padding: 17px;
            width: 300px;
            color: #ffffff;
            border-radius:17px;
        }
        .widget-1 
        {
            background-color: #3498db;
        }
        .widget-2 
        {
            background-color: #2ecc71;
        }
        .widget-3
        {
            background-color: #9b59b6;
        }
        .widget-4 
        {
            background-color: #F67280;
        }
        .widget-5 
        {
            background-color: #1abc9c;
        }
        .widget h3 
        {
            font-size: 47px;
            margin-bottom: 7px;
            margin-top:5mm;
        }
        .widget h1 
        {
            font-size: 17px;
            line-height: 3;
            color:black; 
            margin-bottom:0;
            font-weight:bolder;
        }
        .s
        {
            padding-left: 1cm;
            padding-right: 1cm;
            padding-top: 1mm;
            padding-bottom: 1mm;
            font-size: 17px;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            background:rgba(0,0,0,.8);
            color: green;
            border-radius: 3px;
            background-image: visible;
            opacity: 100%;
            font-family: 'Times New Roman', Times, serif;
           
        }
        .search
        {
            display:flex;
            margin-top:3mm;
            margin-bottom
        }
        .blue
        {
            background:rgba(240, 248, 255, 0.884);
            border-radius: 2px;
            border-color:rgba(240, 248, 255, 0.884);
        }

    </style>        
</head>
<body>   
    <div class="list">
        <ul>
            <li><h1 class="hh">  <i> AVMS </i> </h1></li>
            <li><a href="Dash.php"><i class="bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="Visitor.HTML"><i class="bi-person-plus-fill"></i> New Visitor</a></li>
            <li><a href="manage.php"><i class="bi-people-fill"></i> Manage Visitors</a></li>
            <li><a href="report.HTML"><i class="bi-pencil-square"></i> Visitors B/w Dates</a></li>
            <li class="dropdown">
                <a class="dropbtn"> <i class="bi-person-lines-fill"></i>&emsp;Admin  <i class="bi-chevron-down"></i></a>
                <div class="dropdown-content">    
                    <a href="profile.php"> <i class="bi-person-circle"></i> &emsp;Admin Profile</a>
                    <a href="Password.php"> <i class="bi-gear-fill"></i> &emsp;Change Password</a>
                    <a href="Index.HTML"> <i class="bi-power"></i> &emsp;Logout</a>
                </div>
            </li>
        </ul>
    </div>

        <form action="search.php" method="post">
            <div class="search">
                <input type="text" class="s" name="search" size="28cm" placeholder="Search Visitor by name or mobile number ">
                <button type="submit" class="blue"><i class="bi-search"></i></button>
            </div>
        </form>


        <h1 class="h2" align="center">Welcome <?php echo $name;?>!</h1>
        <div class="dashboard">

            <div class="widget widget-5">
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
            <div class="widget widget-1">
                <?php 
                    $query3=mysqli_query($connection,"select id from visitors where date(Date_of_Visit)>=(DATE(NOW()) - INTERVAL 30 DAY);");
                    $count_30days_visitors=mysqli_num_rows($query3);
                ?>
                <h3><i class="bi-people-fill"></i></h3>
                <h1> Last 30 Days Visitors:  <?php echo $count_30days_visitors?></h1>
            </div>

            <div class="widget widget-4">
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
