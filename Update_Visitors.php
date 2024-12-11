
<?php

$connection= mysqli_connect("localhost","root","","AVMS");

if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $query = "UPDATE Visitors SET VisitorName='$_POST[name]',
                                          Category='$_POST[cat]',
                                          MobileNumber='$_POST[mob]',
                                          Address='$_POST[add]',
                                          ApartmentName='$_POST[apart]',
                                          FloorNo ='$_POST[floor]',
                                          WhomtoMeet='$_POST[meet]',
                                          ReasontoMeet='$_POST[reason]',
                                          Remark='$_POST[mark]',
                                          Date_of_Visit='$_POST[date]'
                                           WHERE id='$_POST[id]'";
            $query_run = mysqli_query($connection,$query);

            if($query_run)
            {
                echo "<script> alert('Visitor Details Updated Successfully');window.location='Manage_Visitors.php' </script>";
            }
            else{
                echo '<script type="text/javascript"> alert("Not Updated")</script>';
            }
        }
?>
</body>
</html>