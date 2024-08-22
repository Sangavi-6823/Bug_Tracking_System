<?php
include 'db.php';
$id = explode("-",$_GET['id']);

if($id[1] == "complete")
{
$up = "update report set status2='complete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Developing complete');</script>";
echo "<meta http-equiv='refresh' content='0;url=1admin.php'>";
}
else
{
$up = "update report set status2='incomplete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Developing Incomplete');</script>";
echo "<meta http-equiv='refresh' content='0;url=1admin.php'>";
}

?>