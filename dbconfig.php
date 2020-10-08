<!--Quiz configuration and connection 
Akshay. "How to Create Simple Quiz using PHP and MySQL". technopoints.co.in. 
https://technopoints.co.in/create-simple-quiz-using-php-mysql/ (accessed Oct. 3 & 4, 2020).
-->
<?php
$con = mysqli_connect("localhost", "root", "quiz");

// Check Connection
if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>