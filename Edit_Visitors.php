<?php 
    $id =$_GET['id'];
    $connection=mysqli_connect("localhost","root","",);
    $db=mysqli_select_db($connection,'AVMS');

    $query="select * from Visitors where id=$id";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);

    $name=$row["VisitorName"];
    $cat=$row["Category"];
    $mob=$row["MobileNumber"];
    $add=$row["Address"];
    $apart=$row["ApartmentName"];
    $flr=$row["FloorNo"];
    $who=$row["WhomtoMeet"];
    $rtm=$row["ReasontoMeet"];
    $date=$row["Date_of_Visit"];
    $re=$row["Remark"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <link rel="stylesheet" href="Stylesheets/Common_Stylesheet.css">
    <link rel="stylesheet" href="Stylesheets/Edit_Page.css">
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

    <form action="Update_Visitors.php" method="post">
        <h1 class="head"><b>Update Visitors</b></h1>
        <div class="box">           
            <table>
                <tr>
                    <td><label for="un" >Visitor Name</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $name;?>" name="name" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="cat">Category</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $cat;?>" name="cat" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="mob" >Mobile Number</label></td>
                    <td><input type="text" name="mob" class="box-contents" value="<?php echo $mob;?>" required maxlength="10" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="add">Address</label></td>
                    <td><input type="text" name="add" class="box-contents" value="<?php echo $add;?>" size="52cm" ></td>
                </tr>

                <tr>
                    <td><label for="apn">Apartment No</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $apart;?>" name="apart" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="floor">Room Number</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $flr;?>" name="floor" size="52cm"></td>
                </tr>

                <tr>    
                    <td><label for="who">Whom to Meet</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $who;?>" name="meet" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="rsn">Reason to Meet</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $rtm;?>" name="reason" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="date">Enter Date</label></td>
                    <td><input type="date-time" readonly class="box-contents" value="<?php echo $date;?>" name="date" size="52cm"></td>
                </tr>

                <tr>
                    <td><label for="mark">Remark</label></td>
                    <td><input type="text" class="box-contents" value="<?php echo $re;?>" name="mark" size="52cm"></td>
                </tr>
            </table>
        </div>
        <input type="submit" name="update" value="UPDATE" class="button">
        <div class="false">
            <label for="id">ID</label>
            <input type="text" class="box-contents" value="<?php echo $id;?>" name="id" size="52cm">
        </div>
    </form>
</body>
</html>