<?php


function queryDb($sql)
{
    include 'dbcontext.php';
    
    $conn = OpenCon();

    $result = $conn->query($sql);

    CloseCon($conn);
    
    return $result;
}
   
?>