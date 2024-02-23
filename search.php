
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
        table th,td
        {
            border: 2px solid black;   
            padding: 5mm;
            border-radius: 1px;
            font-size: 5mm;
            text-align: center;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            background:rgba(0,0,0,.8);  
        }
        table th
        {
            color:green;
            background:black;
        }
        table td
        {
            color: white;
            text-align: center;
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
        body
        {
            background-image:url(city.jpg);
            background-size: cover;      
        }
        .head
        {
            font-size: 33px;
        }
        #box
        {
            width:fit-content;
            margin-left: 5.4cm;
        }
        .button
        {
            border: solid 1px white;
            width: 117px;
            height: 36px;
            color: white;
            background:blue;
            font-size: 17px;
            border-radius: 12px;
            margin-top:3mm;
            text-align: center;
            border-color: blue;
            border-style: solid;
        }
        .button:hover
        {
            cursor: pointer;
            background:navy;
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

        <h1 class="head" align="center" ><b>Manage Visitors</b></h1>
    </body>

    <div id="box">
    <table >
        <tr>
            <th> Visitor Name </th>
            <th> Category </th>
            <th> Mobile Number </th>
            <th> Apartment No </th>
            <th> Whom to Meet </th>
            <th> Action </th>
        </tr>

        <?php
        $search = $_POST['search'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "Project";
            $conn = new mysqli($servername, $username, $password, $db);
            $sql = "select * from Visitors where VisitorName like '%$search%' OR  MobileNumber like '%$search%'";
            $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc() ){
                       
                        ?>
                <tbody>

                    <tr>
                        <td><?php echo $row['VisitorName']; ?> </td>
                        <td><?php echo $row['Category']; ?> </td>
                        <td><?php echo $row['MobileNumber']; ?> </td>
                        <td><?php echo $row['ApartmentName']; ?> </td>
                        <td><?php echo $row['WhomtoMeet']; ?> </td>

                        <td>
                            <form action="details.php" method="GET" value="<?php echo $row['id'] ?>">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <button href='details.php?id=$id' class="button">View Details</button>
                            </form>
                        </td>

                    </tr>
                </tbody>
                <?php
            }
        }
        else
        {
          
        }
    ?>
    </table>
    </div>
</body>