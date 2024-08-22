<?php
include 'db.php';
$id = explode("-",$_GET['id']);

if($id[1] == "complete")
{
$up = "update report set status1='complete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Testing complete');</script>";
echo "<script type='text/javascript'> alert('Send to Client');</script>";

echo "<meta http-equiv='refresh' content='0;url=1tester.php'>";
}
else
{
$up = "update report set status1='incomplete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Testing Incomplete');</script>";
echo "<meta http-equiv='refresh' content='0;url=1tester.php'>";
}

?>