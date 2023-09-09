<?php
$servername = "localhost";
$username = "hkfrxrqsah_admin";
$password = "marti08139110216";
$dbname = "hkfrxrqsah_Data";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }










  
  
  if(isset($_POST['accountUpdate'])){
      
      function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  };

  $coin = test_input($_POST["coin"]);
  $Address = test_input($_POST['walletAddress']);
  $name = test_input($_POST["walletName"]);
  

  
  
    // Check if file was uploaded without errors
    if(isset($_FILES["barcode"]) && $_FILES["barcode"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["barcode"]["name"];
        $filetype = $_FILES["barcode"]["type"];
        $filesize = $_FILES["barcode"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["barcode"]["tmp_name"], "./uploads/" . $filename);
               if($coin == "btc"){
                
                $sql = "UPDATE `admin` SET `btcAddress`='$Address',`btcImg`='$filename'";

                
            }else if ($coin == "eth"){
                 $sql = "UPDATE `admin` SET `ethAddress`='$Address',`ethImg`='$filename'";
                
            }else if ($coin == "usdt"){
                 $sql = "UPDATE `admin` SET `usdtAddress`='$Address',`usdtImg`='$filename'";
                
            }
             
            $stmt = $conn->prepare($sql);
              // execute the query
          $stmt->execute();

          // echo a message to say the UPDATE succeeded
          
            echo $stmt->rowCount();
            
            echo "Your file was uploaded successfully.";
            
           
          header('Location:../dashboard.php?suc= Successful');
            } 
        } else{
            header("Location:../dashboard.php?msg=failed to upload");
        }
    } else{
        echo "Error: " . $_FILES["barcode"]["error"];
    }
}
  






function getUsers($conn)
{
    $query = "SELECT * FROM users";
    $result = $conn->prepare($query);
    $result->execute();

    return $result->fetchAll();
}








function getUser($conn,$id){
  $query = "SELECT * FROM users WHERE `users`.registration_id   = $id";
  $result = $conn -> prepare($query); 
  $result->execute();

  $user = $result->fetchAll();
  return $user;
}


function pendingTransact($conn,$tableName)
{
    $query = "SELECT * FROM $tableName WHERE  `status` = ?";
    $result = $conn->prepare($query);
    $result->execute(["pending"]);

    return $result->fetchAll();
}




function allTransact($conn, $type)
{
    $query = "SELECT * FROM GeneralAccount ";
    $result = $conn->prepare($query);
    

    return $result->fetchAll();
}






if(isset($_POST['detailUpdate'])){


    function test_input($data) {

      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;

     }


                $username = test_input($_POST["username"]);
                $password = test_input($_POST["password"]);
                
                
                
                
                
                $sql = "UPDATE `admin` SET `Username`='$username',`password`='$password'";
                
               if($stmt = $conn->prepare($sql)){
                    $stmt->execute();
                    
                     header("Location:../dashboard.php?msg=updated");
                    

               }else{
                   
                   header("Location:../dashboard.php?msg=failed");
               }
                   
               

          


                    // execute the query
                



  
};

function getUsersentMessage ($conn, $userId) {
  $query = "SELECT * FROM messages WHERE senderId = ?";
  $result = $conn->prepare($query);
  $result->execute([$userId]);
  
  return $result->fetchAll();
  }


  function getUserMessage ($conn, $userId) {
  
    $query = "SELECT * FROM messages WHERE recieverId = ?";
    $result = $conn->prepare($query);
    $result->execute([$userId]);
    
    return $result->fetchAll();
    }
    
    
    if(isset($_POST["DepositApproved"])) {
        
  $transaction_id = $_POST["transact_id"];

  $user_id = $_POST["user"];

  echo $transaction_id;

  echo $user_id;
  

   $status = "approved";
   

   $query = "UPDATE `Transactions` SET `trxStatus` = '$status' WHERE `transaction_id`  = '$transaction_id' AND `email` = '$user_id' AND `trxType` = 'deposit'";


      
              $from = "capitalworldpro.com";
            $to =  $transaction_id;
            $from = "capitalworldpro.com";
                 
            $subject= "Deposit Approval ";


   $message = "
            <html>
            <head>
            <title>Your Deposit Request Has Been Approved</title>
            
            </head>
            <body>
            <img src='https://capitalworldpro.com/userPage/dist/img/logo.png' alt='capital world pro logo'>
            <br>
            <h1>Hello $name</h1>
            
            <p>Your Deposit request  has been Approved.</p>
            <p></p>
        
            <br>
             
           <h4> Thank you</h4>
                <small>Contact Us at support@capitalworldpro.com</small>
                
                </body>
                </html>
         ";
         
         
         $header = "From:$from \r\n";
         $header .= "Cc:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);


    $stmt = $conn->prepare($query);

          


          


  if($stmt->execute()) {
      header("Location: ../dashboard.php?msg= Successful");
  }
  else{
        header("Location: ../dashboard.php?msg= Failed");
  }

}

if(isset($_POST["DepositDeclined"])) {
  $transaction_id = $_POST["transact_id"];

  $user_id = $_POST["user"];

  echo $transaction_id;

  echo $user_id;

  
  

   $status = "declined";
   

   $query = "UPDATE `Transactions` SET `trxStatus` = '$status' WHERE `transaction_id`  = '$transaction_id' AND `email` = '$user_id' AND `trxType` = 'deposit'";

  

    $stmt = $conn->prepare($query);
    
             $from = "capitalworldpro.com";
            $to =  $transaction_id;
            $from = "capitalworldpro.com";
                 
            $subject= "Deposit Approval ";


   $message = "
            <html>
            <head>
            <title>Your Deposit Request Has Been Declined</title>
            
            </head>
            <body>
            <img src='https://capitalworldpro.com/userPage/dist/img/logo.png' alt='fidelityProfits'>
            <br>
            <h1>Hello $name</h1>
            
            <p>Your Deposit request  has been <span style='colo:red;'>DECLINED</span>.</p>
            <p>Please Contact Admin @ support@capitalworldpro.com for more Info </p>
        
            <br>
             
           <h4> Thank you</h4>
                <small>Contact Us at support@capitalworldpro.com</small>
                
                </body>
                </html>
         ";
         
         
         $header = "From:$from \r\n";
         $header .= "Cc:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);

          


          


  if($stmt->execute()) {
      header("Location: ../dashboard.php?suc= Successful");
  }
  else{
        header("Location: ../dashboard.php?err= Failed");
  }

}





if(isset($_POST["WithdrawalApproved"])) {
  $transaction_id = $_POST["transact_id"];

  $user_id = $_POST["user"];

  echo $transaction_id;

  echo $user_id;
  
  

   $status = "approved";
   

   $query = "UPDATE `Transactions` SET `trxStatus` = '$status' WHERE `transaction_id`  = '$transaction_id' AND `email` = '$user_id' AND `trxType` = 'withdraw'";

  

    $stmt = $conn->prepare($query);
    
           $from = "capitalworldpro.com";
            $to =  $transaction_id;
            $from = "capitalworldpro.com";
                 
            $subject= "Deposit Approval ";


   $message = "
            <html>
            <head>
            <title>Your Withdrawal Request Has Been Approved</title>
            
            </head>
            <body>
            <img src='https://capitalworldpro.com/userPage/dist/img/logo.png' alt='capital world Pro'>
            <br>
            <h1>Hello $name</h1>
            
            <p>Your Withdrawal request  has been Approved.</p>
            <p></p>
        
            <br>
             
           <h4> Thank you</h4>
                <small>Contact Us at support@capitalworldpro.com</small>
                
                </body>
                </html>
         ";
         
         
         $header = "From:$from \r\n";
         $header .= "Cc:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);


          


          


  if($stmt->execute()) {
      header("Location: ../dashboard.php?suc= Successful");
  }
  else{
        header("Location: ../dashboard.php?err= Failed");
  }

}

if(isset($_POST["WithdrawalDeclined"])) {
  $transaction_id = $_POST["transact_id"];

  $user_id = $_POST["user"];

  echo $transaction_id;

  echo $user_id;

  

  
  

   $status = "declined";
   

    $query = "UPDATE `Transactions` SET `trxStatus` = '$status' WHERE `transaction_id`  = '$transaction_id' AND `email` = '$user_id' AND `trxType` = 'withdraw'";

  

    $stmt = $conn->prepare($query);
    
            $to =  $transaction_id;
            $from = "Support@capitalworldpro.com";
                 
            $subject= "Deposit Approval ";


   $message = "
            <html>
            <head>
            <title>Your Withdrawal Request Has Been Declined</title>
            
            </head>
            <body>
            <img src='https://FidelityProfits.org/landing/icon.png' alt='fidelityProfits'>
            <br>
            <h1>Hello $name</h1>
            
            <p>Your Withdrawal request  has been <span style='colo:red;'>DECLINED</span>.</p>
            <p>Please Contact Admin @ support@capitalworldpro.com for more Info </p>
        
            <br>
             
           <h4> Thank you</h4>
                <small>Contact Us at support@capitalworldpro.com</small>
                
                </body>
                </html>
         ";
         
         
         $header = "From:$from \r\n";
         $header .= "Cc:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);

          


          


  if($stmt->execute()) {
      header("Location: ../dashboard.php?suc= Successful");
  }
  else{
        header("Location: ../dashboard.php?err= Failed");
  }

}

function calculateTotalAmount($pdo, $trxType, $trxStatus) {
    // SQL query to calculate the total of the "Amount" column where the "trxType" column matches $trxType and the "trxStatus" column matches $trxStatus
    $sql = "SELECT SUM(Amount) AS total FROM Transactions WHERE trxType=:trxType AND trxStatus=:trxStatus";

    // Prepare the query
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':trxType', $trxType);
    $stmt->bindParam(':trxStatus', $trxStatus);

    // Execute the query
    $stmt->execute();

    // Check if the query returned any rows
    if ($stmt->rowCount() > 0) {
        // Fetch the result and return the total
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row["total"];
    } else {
        // If the query did not return any rows, return 0
        return 0;
    }
}








    
    
    

