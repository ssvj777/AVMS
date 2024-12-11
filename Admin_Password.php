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

                echo "<script> alert('Password Successfully Changed');window.location='Admin_Password.php' </script>";
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
    <link rel="stylesheet" href="Stylesheets/Common_Stylesheet.css">
    <link rel="stylesheet" href="Stylesheets/Admin_Password.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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


    <form action="" method="post">
        <h1 class="head"><b>Change Admin Password</b></h1>
        <div class="box">           
            <table>
                <tr>
                    <td><label >Current Password</label></td>
                    <td><input type="password"  name="oldpass" class="box-contents" size="47cm" placeholder="Enter Current Password" ></td>
                </tr>

                <tr>
                    <td><label >New Password</label></td>
                    <td><input type="password"  name="newpass" class="box-contents" size="47cm" placeholder="Enter New Password" ></td>
                </tr>

                <tr>
                    <td><label >Confirm Password</label></td>
                    <td><input type="password"  name="cnewpass" class="box-contents" size="47cm" placeholder="Confirm New Password"></td>
                </tr>
            </table>
        </div> 
        <input type="submit" name=save class="button" value="CHANGE">
    </form>
</body>
</html>