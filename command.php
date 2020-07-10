<?php

require_once 'connection.php';

$query = "SELECT * FROM manual";
$res = mysqli_query($con, $query);
$rows = mysqli_num_rows($res);

if ($rows != 0) {
    
    //reading the single ligne in the table
    $row = mysqli_fetch_assoc($res);
    
    //print all the stored value
    //all will be 'nuul' except only one it will appear in the page
    echo $row['S'];
    echo $row['F'];
    echo $row['B'];
    echo $row['R'];
    echo $row['L'];
}
?>