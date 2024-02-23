<?php 

$id =$_GET['id'];

$connection=mysqli_connect("localhost","root","",);
$db=mysqli_select_db($connection,'project');

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
    <title>View Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    
        body
        {
            background-image:url(city.jpg);
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
            margin-left: 1cm;
            margin-top: 3mm;    
        }
        .button2:hover
        {
            cursor: pointer;
            background:#0097a7;
        }
        .button3
        {
            border: solid 1px white;
            width: 147px;
            height: 35px;
            color: white;
            background-color:#069818;
            font-size: 17px;
            border-radius: 17px;
            margin-left: 9cm;
            margin-top: 3mm;    
        }
        .button3:hover
        {
            cursor: pointer;
            background: #e74c3c;
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
        .button1{
            background: blue;
            color:white;
            text-align: center;
            font-size: 17px;
            border-radius: 17px;
            border-color: blue;
            border-style: solid;
            margin-left: 8cm; 
            margin-top: 3mm;
            width: 167px; 
            height:35px;
        }
        .button1:hover{
            cursor: pointer;
            background: navy;
        }
        .flex{
            display: flex;
        }
        .flx{
            display: flex;
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

    <h1 class="head" align="center" ><b>Manage Visitors</b></h1>
    <div id="box">           
    <table>
        <div class="flx">
        <tr>
            <td><label for="un" >Visitor Name</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $name;?>" name="name" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="cat">Category</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $cat;?>" name="category" size="47cm"></td>
        </tr>
        </div>

        <tr>
            <td><label for="mob" >Mobile Number</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $mob;?>" name="number" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="add">Address</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $add;?>" name="address" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="apn">Apartment Name</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $apart;?>" name="apartment no" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="floor">Floor No</label></td>
            <td><input type="text" class="p"readonly value="<?php echo $flr;?>" name="floor" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="who">Whom to Meet</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $who;?>" name="meet" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="rsn">Reason to Meet</label></td>
            <td><input type="text" class="p" readonly value="<?php echo $rtm;?>" name="reason" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="date">Date of Visit</label></td>
            <td><input type="date-time" readonly class="p" value="<?php echo $date;?>" name="reason" size="47cm"></td>
        </tr>

        <tr>
            <td><label for="mark">Remark</label></td>
            <td><input type="text" readonly class="p" value="<?php echo $re;?>" name="mark" size="47cm"></td>
        </tr>

    </table>
    </div>
        <div class="flex">

           <button onclick="window.location.href='manage.php'" class="button1">Back to List</button>    
        
            <form action="del.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <button href='del.php?id=$id' class="button3" name="delete" onclick="return checkdelete()">  DELETE </button>
            </form>

            <form action="edit.php" method="GET" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <button href='edit.php?id=$id' class="button2">EDIT </button>
            </form>

        </div>
    
    </form>
    </div>

    <script>
        function checkdelete()
        {
            return confirm('Are you want to delete this Visitor')
        }
    </script>

</body>
</html>