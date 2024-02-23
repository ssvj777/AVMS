
<?php 



$connection=mysqli_connect("localhost","root","",);
$db=mysqli_select_db($connection,'Project');

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
            padding: 1cm;
            border-radius: 17px;
            font-size: 28px;
        }
        .p
        {
            padding-left: 1cm;
            padding-right: 1cm;
            padding-top: 1mm;
            padding-bottom: 1mm;
            font-size: 18px;
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
            margin-left: 6.2cm;
            margin-top: 08mm;
        }
        .button
        {
            border: solid 1px white;
            width: 111px;
            height: 33px;
            color: white;
            background-color:#0097a7;
            font-size: 15px;
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
            background-image:url(city.jpg);
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
            margin-left: 3.7cm; 
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
        .id
        {
        visibility: hidden;
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
    
    <form action="profile2.php" method="post">

        <h1 class="head"><b>Update Admin Profile</b></h1>

    <div id="box">           
    <table>
       
        <tr>
            <td><label for="name" >Admin Name</label></td>
            <td><input type="text" id="name" name="name" class="p" value="<?php echo $an;?>" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="phn" >Phone Number</label></td>
            <td><input type="phone number" id="phn" class="p" required maxlength="10" size="47cm" value="<?php echo $mob;?>" name="number"></td>
        </tr>

        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" id="email" name="email" class="p" size="47cm" value="<?php echo $mail;?>"></td>
        </tr>

        <tr>
            <td><label for="date">Registration Date</label></td>
            <td><input type="datetime" id="date" readonly value="<?php echo $date;?>" name="date" class="p" size="47"></td>
        </tr>

    </table>
    </div>
            <button type="submit" name="update" class="button">Update</button>

            <div class="id">
                <input type="text" value="<?php echo $id;?>" name="id">
            </div>

    </form>   
</body>
</html>