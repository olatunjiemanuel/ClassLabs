<?php

$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection, "LabTest");

// Assinging variable gotten from the front end to be used on the server side
//$user = $_POST['user'];
// $email = $_POST['email'];
// $password = $_POST['password'];

$query = "SELECT * FROM `marvelmovies`";
$result = mysqli_query($connection,$query);

while ($row = $result->fetch_array()) {

    echo "<p>" . $row['superheroName'] . "</p>";
}

exit;

// if(mysqli_num_rows($result) == 1) {
//     $row = mysqli_fetch_assoc($result);

//     $_SESSION['email'] = $row['email'];

//     echo "Login Succesful";

//     // $parent = "..";
//     // header("Location: $parent/UserFormPage/index.php");
//     exit;
// } else {
//     echo "Invalid UserName or Password";
// }

?>