<?php


class Signup{
    private $connect;
    
    public function getSignupDetails($uname, $email, $pwd){
        $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if(!$connect){
            die('Cannot connect to the database '.$connect->connect_error );
        }else{
            $query = "INSERT INTO `Signup`(`UserName`,`EmailAddress`,`Password`) VALUES('".$uname."','".$email."', '".$pwd."')";

            $run = $connect->query($query);

            if($run){
                return true;
            }else{
                return false;
            }
        }
    }
}


?>