<?php


class Registration{
    
    public function getRegistration($uname, $email, $pwd){
        
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connection->connect_error){
            die("Cannot connect to the database ".$connection->connect_error);
        }else{
            
            $sql = "INSERT INTO `Registration`(`UserName`, `Email_Address`, `Password`) VALUES ('".$uname."','".$email."','".$pwd."');";


            if($connection->query($sql)){
                return true;
            }else{
                return false;
            }
        }
        $connection->close();
    }
}



?>