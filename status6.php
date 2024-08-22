<?php
include 'db.php';
$id = explode("-",$_GET['id']);

if($id[1] == "complete")
{
$up = "update assign set status6='complete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Developing complete');</script>";
echo "<meta http-equiv='refresh' content='0;url=bug2.php'>";
}
else
{
$up = "update assign set status6='Reject' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('File Reject');</script>";
echo "<meta http-equiv='refresh' content='0;url=bug2.php'>";
}

?>