<?php

//getting UserName & PassWord from Login Page using POST Method
$UserName = $_POST['UserName'];
$PassWord = $_POST['PassWord'];

//connecting with MySQL DataBase
$ConnectDataBase = new mysqli("localhost", "root", "", "AVMS");

//SQL Query for selecting Table
$SQL_Query = 'select * from Admin';
$table = $ConnectDataBase->query($SQL_Query);

if ($table->num_rows>0) {
    $tmp = 0;
    
    while ($row = $table->fetch_assoc())
    {
        $tableUserName = $row ["AdminName"];
        $tablePassWord = $row ["Password"];
        if ($UserName === $tableUserName and $PassWord === $tablePassWord)
        {
            echo "<script type = 'text/javascript'> document.location = 'Dashboard.php'; </script>";
            $tmp++;
        }
    }

    if($tmp == 0)
    {
        echo "<script type='text/javascript'> document.location='Invalid_Login.html'; </script>";
    }
}

$ConnectDatabase->close();

?>