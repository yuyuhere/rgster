<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'registrationilp');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $program = $_POST['program'];

    $query = "INSERT INTO `studreg` (`name`, `email`, `phone`,`address`, `program`) VALUES ('$name', '$email', '$phone','$address', '$program')";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script  type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
        echo '<script  type="text/javascript"> alert ("Data Not Saved") </script>';
    }

}
?>