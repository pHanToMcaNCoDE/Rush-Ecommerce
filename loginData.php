<!-- <?php


// Login

// class Login{
//     // public $sql;
//     // public $email;
//     // public $pwd;

//     public function getLogin($uname, $pwd){
        
//         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

//         if($connection->connect_error){
//             die("Cannot connect to the database ".$connection->connect_error);
//         }else{
            
//             $sql = "SELECT `UserName`, `Email_Address`, `Password` FROM `Forms` WHERE `UserName` = '$uname' AND `Password` = '$pwd'";

//             $result = $connection->query($sql);
//             $count = $result->num_rows;
            
//             if($count == 1){
                
//                 $_SESSION['UNAME'] = $row['UserName'];
//                 $_SESSION['EMAIL'] = $row['Email_Address'];

//                 return true;
//                 $connection->close();
//             }
//         }
//     }
// }


?> -->