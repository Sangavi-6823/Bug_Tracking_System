<?php
include 'db.php';
$id = explode("-",$_GET['id']);

if($id[1] == "complete")
{
$up = "update report set status='complete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Request Accepted');</script>";
echo "<meta http-equiv='refresh' content='0;url=1dev.php'>";
}
else
{
$up = "update report set status='Reject' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Request Reject');</script>";
echo "<meta http-equiv='refresh' content='0;url=1dev.php'>";
}

?>