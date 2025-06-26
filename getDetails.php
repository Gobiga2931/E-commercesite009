<?php
$conn=new mysqli("localhost","root","","json");
$sql="select * from mobile";
$res=$conn->query($sql);
$mobile=array();
while($row=$res->fetch_assoc())
{
    $mobile[]=$row;
}
echo json_encode($mobile);
?>