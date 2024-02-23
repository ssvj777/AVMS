<?php
    
    
    $connection= mysqli_connect("localhost","root","","Project");


        if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $query = "UPDATE Admin SET AdminName='$_POST[name]',
                                       MobileNumber='$_POST[number]',
                                       Email='$_POST[email]',
                                       RegisterDate='$_POST[date]'  WHERE id='$_POST[id]'";
            $query_run = mysqli_query($connection,$query);

            if($query_run)
            {
                echo "<script> alert('profile updated');window.location='profile.php'</script>";
                
            }
            else{
                echo '<script type="text/javascript"> alert("data  not updated")</script>';
            }
        }
    ?>