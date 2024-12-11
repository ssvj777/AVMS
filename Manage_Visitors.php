<?php
    $connection=mysqli_connect("localhost","root","",);
    $db=mysqli_select_db($connection,'AVMS');

    $query="select * from Visitors";
    $query_run=mysqli_query($connection,$query);
?>

<link rel="stylesheet" href="Stylesheets/Common_Stylesheet.css">
<link rel="stylesheet" href="Stylesheets/Manage_Visitors.css">
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
    
    <h1 class="head"><b>Manage Visitors</b></h1>
    <div class="box">
        <table >
            <tr>
                <th> Visitor Name </th>
                <th> Category </th>
                <th> Mobile Number </th>
                <th> Apartment Name </th>
                <th> Whom to Meet </th>
                <th> Action </th>
            </tr>

            <?php 
                if($query_run)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        $id = $row['id'];
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['VisitorName']; ?> </td>
                                <td><?php echo $row['Category']; ?> </td>
                                <td><?php echo $row['MobileNumber']; ?> </td>
                                <td><?php echo $row['ApartmentName']; ?> </td>
                                <td><?php echo $row['WhomtoMeet']; ?> </td>
                                <td>
                                    <form action="View_Details.php" method="GET" value="<?php echo $row['id'] ?>">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <button href='View_Details.php?id=$id' class="button">View Details</button>
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