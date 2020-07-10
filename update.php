<?php

require_once 'connection.php';

//make sure that is an input data
if (isset($_GET['direction'])) {
    
    //reading the received data and store it in a variable 'input'
    $input = $_GET['direction'];
    
    //decide what values will store in table 'manual' deppending on the received data
    if ($input == 'S') {
        $query = "INSERT INTO manual VALUES('S',null,null,null,null)";
    } else if ($input == 'F') {
        $query = "INSERT INTO manual VALUES(null,'F',null,null,null)";
    } else if ($input == 'B') {
        $query = "INSERT INTO manual VALUES(null,null,'B',null,null)";
    } else if ($input == 'R') {
        $query = "INSERT INTO manual VALUES(null,null,null,'R',null)";
    } else if ($input == 'L') {
        $query = "INSERT INTO manual VALUES(null,null,null,null,'L')";
    }
    
    //clear the table 'manual' (delete its content)
    $del = "TRUNCATE TABLE manual";
    mysqli_query($con, $del);
    
    //store values in table and go back to index.html page
    if (mysqli_query($con, $query)) {

        header('location:index.html');
    } else {

        echo "Error: " . mysqli_error($con);
    }
}
?>