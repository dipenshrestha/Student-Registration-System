<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
</head>
<body>
    <?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="student_registration_sys";

    $con = mysqli_connect($host,$user,$password,$database);

    // creating student tables
    $sql = "CREATE TABLE Student
    (
        `StudentID` int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(StudentID),
        `FirstName` varchar(15) not null,
        `MiddleName` varchar(15),
        `LastName` varchar(15) not null,
        `DateOfBirth` date not null,
        `Gender` varchar(10) not null,
        `PhoneNumber` varchar(15) not null unique,
        `Email` nvarchar(255) not null unique,
        `PermanentAddress` varchar(40) not null,
        `TemporaryAddress` varchar(40) not null,
        `FatherName` varchar(70) not null,
        `MotherName` varchar(70) not null
    )";

    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }

    // creating qualification tables
    $sql = "CREATE TABLE Qualification
    (
        StudentID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(StudentID),
        Email nvarchar(255) not null unique,
        `Class-X percentage/grade` varchar(5) not null,
        `Class-X passing year` varchar(10) not null,
        `Class-Xii percentage/grade` varchar(5) not null,
        `Class-Xii passing year` varchar(10) not null
    )";

    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }
    mysqli_close($con);
    ?>
</body>
</html>