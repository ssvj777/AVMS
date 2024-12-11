<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'AVMS');

if(isset($_POST['delete']))
{
    $id=$_POST['id'];

    $query= "DELETE FROM Visitors WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Visitor Deleted"); </script>';
        header("location:Manage_Visitors.php");
    }
    else
    {
        echo '<script> alert("Visitor not Deleted"); </script>';
    }
}
?>