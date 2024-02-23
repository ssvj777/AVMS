
<?php

$connection= mysqli_connect("localhost","root","","Project");

if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $query = "UPDATE Visitors SET VisitorName='$_POST[name]',
                                          Category='$_POST[cat]',
                                          MobileNumber='$_POST[mob]',
                                          VisitorAddress='$_POST[add]',
                                          ApartmentNo='$_POST[apart]',
                                          Floor ='$_POST[floor]',
                                          WhomtoMeet='$_POST[meet]',
                                          ReasontoMeet='$_POST[reason]',
                                          EnterDate='$_POST[date]',
                                          remark='$_POST[mark]'
                                           WHERE id='$_POST[id]'";
            $query_run = mysqli_query($connection,$query);

            if($query_run)
            {
                echo "<script> alert('Update Successfully');window.location='manage.php' </script>";
            }
            else{
                echo '<script type="text/javascript"> alert("data  not updated")</script>';
            }
        }
?>
</body>
</html>