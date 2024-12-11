<?php

$x=$_POST['uname'];
$y=$_POST['pw'];

$c=new mysqli("localhost","root","","AVMS");
$sql='select * from Admin';
$table=$c->query($sql);
if ($table->num_rows>0) {
    $tmp=0;
    while($r=$table->fetch_assoc())
    {
        $tx=$r["AdminName"];
        $ty=$r["Password"];
        if($x==$tx and $y==$ty)
        {
            echo "<script type='text/javascript'> document.location='Dashboard.php'; </script>";
            $tmp++;
        }
    }
    if($tmp==0)

    {
        echo "<script type='text/javascript'> document.location='Invalid_Login.html'; </script>";
    }
}
$c->close();

?>