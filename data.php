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


// Login

class Login{
    
    public function getLogin($email, $pwd){
        
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connection->connect_error){
            die("Cannot connect to the database ".$connection->connect_error);
        }else{
            
            $sql = "SELECT * FROM `Registration`(`UserName`, `Email_Address`, `Password`) WHERE `Email_Address` = '$email' AND `Password` = '$pwd';";

            $result = $connection->query($sql);
            
            
            if($row = $result->fetch_assoc()){
                
                $_SESSION['UNAME'] = $row['UserName'];
                $_SESSION['EMAIL'] = $row['Email_Address'];
            }
        }
        $connection->close();
    }
}

?>