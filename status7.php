<?php
include 'db.php';
$id = explode("-",$_GET['id']);

if($id[1] == "complete")
{
$up = "update assign set status7='complete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Developing complete');</script>";
echo "<meta http-equiv='refresh' content='0;url=fns.php'>";
}
else
{
$up = "update assign set status7='incomplete' where id='$id[0]'";
mysqli_query($con,$up);
echo "<script type='text/javascript'> alert('Developing Incomplete');</script>";
echo "<meta http-equiv='refresh' content='0;url=fns.php'>";
}

?>