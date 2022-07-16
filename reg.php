<?php
require 'db/connect.php';
if(isset($_POST['btn-reg']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];   
    $pass = $_POST['pass'];
    if(!empty($name) && !empty($age) && !empty($mobile) && !empty($email) && !empty($pass))
    {
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `tbl_users` (`name` , `age` , `mobile` , `email` , `pass`) VALUES ('$name' , '$age' , '$mobile' , '$email' , '$pass')";

        if($conn->query($sql) === TRUE)
        {
            echo "Save successful";
        }
        else
        {
            echo "Fail {$sql}".$conn->error;
        }
    }
    else
    {
        echo " You need to enter all the information";
    }
}
?>