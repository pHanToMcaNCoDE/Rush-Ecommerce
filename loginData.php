<?php


// Login

class Login{
    // public $sql;
    // public $email;
    // public $pwd;

    public function getLogin($email, $pwd){
        
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connection->connect_error){
            die("Cannot connect to the database ".$connection->connect_error);
        }else{
            
            $sql = "SELECT `UserName`, `Email_Address`, `Password` FROM `Registration` WHERE `Email_Address` = '".$email."'";

            $result = $connection->query($sql);
            $count = $result->num_rows;
            
            if($count == 1){
                
                $_SESSION['UNAME'] = $row['UserName'];
                $_SESSION['EMAIL'] = $row['Email_Address'];

                return true;
                $connection->close();
            }
        }
    }
}


?>