
<?php 



$connection=mysqli_connect("localhost","root","",);
$db=mysqli_select_db($connection,'AVMS');

$query="select * from Admin";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$an = $row['AdminName'];
$mob = $row['MobileNumber'];
$mail = $row['Email'];
$date = $row['RegisterDate'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Profile</title>
    <link rel="stylesheet" href="Stylesheets/Common_Stylesheet.css">
    <link rel="stylesheet" href="Stylesheets/Admin_Profile.css">
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
    
    <form action="Update_Profile.php" method="post">
        <h1 class="head"><b>Update Admin Profile</b></h1>
        <div class="box">      
            <table>
                <tr>
                    <td><label for="name" >Admin Name</label></td>
                    <td><input type="text" id="name" name="name" class="box-contents" value="<?php echo $an;?>" size="47cm"></td>
                </tr>

                <tr>
                    <td><label for="phn" >Phone Number</label></td>
                    <td><input type="phone number" id="phn" class="box-contents" required maxlength="10" size="47cm" value="<?php echo $mob;?>" name="number"></td>
                </tr>

                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email" name="email" class="box-contents" size="47cm" value="<?php echo $mail;?>"></td>
                </tr>

                <tr>
                    <td><label for="date">Registration Date</label></td>
                    <td><input type="datetime" id="date" readonly value="<?php echo $date;?>" name="date" class="box-contents" size="47"></td>
                </tr>
            </table>
        </div>
        <button type="submit" name="update" class="button">UPDATE</button>

        <div class="id">
            <input type="text" value="<?php echo $id;?>" name="id">
        </div>
    </form>   
</body>
</html>