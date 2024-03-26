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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    
        body
        {
            background-image:url(Main_Image.jpg);
            background-size: cover;
            background-repeat: no-repeat;  
        }
        .dropbtn
        {
            margin-left: 5cm;
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
        li
        {
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
            margin-left:3.7cm;   
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
        .button2
        {
            border: solid 1px white;
            width: 147px;
            height: 35px;
            color: white;
            background-color:#069818;
            font-size: 17px;
            border-radius: 17px;
            margin-left: 25cm;
            margin-top: 3mm;    
        }
        .button2:hover
        {
            cursor: pointer;
            background:#0097a7;
        }
        label
        {
            padding: 5mm;
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
            padding-left: 1.7cm;
            padding-right: 1cm;
            padding-top: 1mm;
            padding-bottom: 1mm;
            font-size: 20px;
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
            margin-left: 7cm;
        }
        .flex
        {
            display: flex;
        }
        .id
        {
            visibility:hidden;
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

    <h1 class="head" align="center" ><b>Update Visitors</b></h1>
    <form action="Update_Visitors.php" method="post">

    <div id="box">           
    <table>

        <tr>
            <td><label for="un" >Visitor Name</label></td>
            <td><input type="text" class="p" value="<?php echo $name;?>" name="name" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="cat">Category</label></td>
            <td><input type="text" class="p" value="<?php echo $cat;?>" name="cat" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="mob" >Mobile Number</label></td>
            <td><input type="text" name="mob" class="p" value="<?php echo $mob;?>" required maxlength="10" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="add">Address</label></td>
            <td><input type="text" name="add" class="p" value="<?php echo $add;?>" size="47" ></td>
        </tr>

        <tr>
            <td><label for="apn">Apartment No</label></td>
            <td><input type="text" class="p" value="<?php echo $apart;?>" name="apart" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="floor">Floor</label></td>
            <td><input type="text" class="p" value="<?php echo $flr;?>" name="floor" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="who">Whom to Meet</label></td>
            <td><input type="text" class="p" value="<?php echo $who;?>" name="meet" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="rsn">Reason to Meet</label></td>
            <td><input type="text" class="p" value="<?php echo $rtm;?>" name="reason" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="date">Enter Date</label></td>
            <td><input type="date-time" readonly class="p" value="<?php echo $date;?>" name="date" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="mark">Remark</label></td>
            <td><input type="text" class="p" value="<?php echo $re;?>" name="mark" size="47cm"></td>
        </tr>

    </table>
    </div>

        <input type="submit" name="update" value="UPDATE" class="button2">
            
        <div class="id">
        
            <label for="id">ID</label>
            <input type="text" class="p" value="<?php echo $id;?>" name="id" size="47cm">
    
        </div>
            
</form>
</div>

   

</body>
</html>