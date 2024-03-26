<?php

    $connection= mysqli_connect("localhost","root","","AVMS");
    if(!empty($_POST['save']))
    {
        $op=$_POST['oldpass'];
        $np=$_POST['newpass'];
        $cnp=$_POST['cnewpass'];

        if($np==$cnp)
        {
            $query="select * from Admin where Password='$op' ";
            $result=mysqli_query($connection,$query);
            $count=mysqli_num_rows($result);
            if($count>0){
                $query="update Admin set Password='$np'";
                mysqli_query($connection,$query) ;

                echo "<script> alert('Password Changed Successfully');window.location='Admin_Password.php' </script>";
            }
            else
            {

                echo "<script> alert('Old Password does not match');window.location='Admin_Password.php' </script>";
            }
        }
        else
        {
            echo "<script> alert(' New Password & Confirm New Password does not match');window.location='Admin_Password.php' </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .head
        {
            font-size: 33px;
            margin-left: 7cm;   
            margin-top: 1.7cm;
        }
        label,span
        {
            padding: 1cm;
            font-size: 20px;
        }
        table
        {
            border-style: solid;   
            padding: 1.2cm;
            border-radius: 17px;
            font-size: 28px;
        }
        .p
        {
            padding-left: 1cm;
            padding-right: 1cm;
            padding-top: 1mm;
            padding-bottom: 1mm;
            font-size: 17px;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            background:rgba(0,0,0,.8);
            color: green;
            border-radius: 17px;
            background-image: visible;
            opacity: 100%;
            font-family: 'Times New Roman', Times, serif;
        }
        .box
        {
            font-size: 22px;
        }
        #box
        {
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            background:rgba(0,0,0,.8);
            color: white;
            width:fit-content;
            border-radius: 17px; 
            margin-left: 6cm;
            margin-top: 1cm;
        }
        .button
        {
            border: solid 1px white;
            width: 111px;
            height: 33px;
            color: white;
            background-color:#0097a7;
            font-size: 17px;
            border-radius: 17px;
            margin-left: 22cm;
            margin-top: 7mm;    
        }
        .button:hover
        {
            cursor: pointer;
            background:#069818 ;
        }
        body
        {
            background-image:url(Main_Image.jpg);
            background-size: cover;      
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
            margin-left: 5.4cm;
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
            margin-left: 4cm; 
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
        }
        .blue
        {
            background:rgba(240, 248, 255, 0.884);
            border-radius: 2px;
            border-color:rgba(240, 248, 255, 0.884);
        }
        
</style>
<body>

    <div class="list">
    <ul>
    <li><h1 class="hh">  <i> AVMS </i> </h1></li>
            <li><a href="Dashboard.php"><i class="bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="Visitors.HTML"><i class="bi-person-plus-fill"></i> New Visitor</a></li>
            <li><a href="Manage_Visitors.php"><i class="bi-people-fill"></i> Manage Visitors</a></li>
            <li><a href="Report_Page.HTML"><i class="bi-pencil-square"></i> Visitors B/w Dates</a></li>
            <li class="dropdown">
                <a class="dropbtn"> <i class="bi-person-lines-fill"></i>&emsp;Admin  <i class="bi-chevron-down"></i></a>
                <div class="dropdown-content">    
                    <a href="Admin_Profile.php"> <i class="bi-person-circle"></i> &emsp;Admin Profile</a>
                    <a href="Admin_Password.php"> <i class="bi-gear-fill"></i> &emsp;Change Password</a>
                    <a href="Index.HTML"> <i class="bi-power"></i> &emsp;Logout</a>
                </div>
            </li>
        </ul>
    </div>

    <form action="Search_Bar.php" method="post">
            <div class="search">
                <input type="text" class="s" name="search" size="28cm" placeholder="Search Visitor by name or mobile number ">
                <button type="submit" class="blue"><i class="bi-search"></i></button>
            </div>
    </form>


        <form action="" method="post">

        <h1 class="head"><b>Change Admin Password</b></h1>

    <div id="box">           
    <table>
       
        <tr>
            <td><label >Current Password</label></td>
            <td><input type="password"  name="oldpass" class="p" size="47cm" placeholder="Enter Current Password" ></td>
        </tr>

        <tr>
            <td><label >New Password</label></td>
            <td><input type="password"  name="newpass" class="p" size="47cm" placeholder="Enter New Password" ></td>
        </tr>

        <tr>
            <td><label >Confirm Password</label></td>
            <td><input type="password"  name="cnewpass" class="p" size="47cm" placeholder="Confirm New Password"></td>
        </tr>

    </table>
    </div> 

        <input type="submit" name=save class="button" value="CHANGE">
    </form>
</body>
</html>