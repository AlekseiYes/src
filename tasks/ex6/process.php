<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
}
//connect to db
include 'db.php';

//write sql statement to insert data
$sql = "insert into studentsinfo(first_name, last_name, groupId, city)
    values ('$fname', '$lname', '$groupid', '$city')";



if ($conn->query($sql)===TRUE){
    echo "Your data was recorded.";
}
else {
    echo "Error :" .$sql . "<br>" . $conn->error;
}

//close the db connection

$conn->close();














?>