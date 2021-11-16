<?php
include 'dbcontext.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>