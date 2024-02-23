<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'Project');

if(isset($_POST['delete']))
{
    $id=$_POST['id'];

    $query= "DELETE FROM Visitors WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("deleted"); </script>';
        header("location:manage.php");
    }
    else
    {
        echo '<script> alert("not deleted"); </script>';
    }
}
?>