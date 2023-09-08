<?php

session_start();
require("./conn.php");





function getDetails($userTable, $conn,$email)
{
    
  
 
  
    $sql = "SELECT * FROM `$userTable` WHERE `email` = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
    }

    return $row;
}

if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $amount = floatval($_POST['amount']);

    $query = "UPDATE `verifiedUser` SET `availableBalance` = ? WHERE `id` = ?";
    $result = $conn->prepare($query);
    $result->execute([$amount, $id]);

    if($result){
        header("Location: ../dashboard.php?suc= Successful");
    }
}


  

if(isset($_POST['profit'])) {
    $id = $_POST['profit'];
    
    $initialAmount = $_POST['pro'];
    $newAmount = floatval($_POST['amount']);
    
    $finalProfit =  $initialAmount + $newAmount ;
    
    // echo $finalProfit;
    // die();
    

    $query = "UPDATE `users` SET `profit` = ? WHERE `id` = ?";
    $result = $conn->prepare($query);
    $result->execute([$finalProfit, $id]);

    if($result){
        header("Location: ../dashboard.php?suc= Successful");
    }
    else{
        
         echo "Error: " . $sql . "<br>" . $conn->error;
        // header("Location: ../dashboard.php?msg= Failed");
    }
}





if(isset($_GET["approve"])) {
    $id = $_GET["approve"];
     $status = "approved";
     $action = $_GET['action'];

     $query = "UPDATE `$action` SET `status` = 'approved' WHERE id  = '$id'";
     $result = mysqli_query($conn, $query);

    if($result) {
        header("Location: ../pages/reports/pending_requests.php?suc= Successful");
    }
    else{
          header("Location: ../pages/reports/pending_requests.php?err= Failed");
    }

}

if(isset($_GET["decline"])) {
    $id = $_GET["decline"];
    $status = "declined";
    $action = $_GET['action'];

    $query = "UPDATE `$action` SET `status` = 'declined' WHERE id  = '$id'";
     $result = mysqli_query($conn, $query);


    if($result) {
        header("Location: ../pages/reports/pending_requests.php");
    }

}


if(isset($_POST["perform"])) {
    echo $status = $_POST["action"];
    echo $id = $_POST["user"];

    $query = "UPDATE `users` SET `status` = '$status' WHERE registration_id = $id";
    echo $result = mysqli_query($conn, $query);
    if($result) {
       header("Location: ../dashboard.php?msg= Successful");
    }

}


if(isset($_POST['depositUser'])) {
    
      
   
        $amount = ($_POST['amount']);
        
        $email = $_POST['userId'];
        
        $name = getDetails("users", $conn,$email)['fname'];
       
       
        
        //   echo "working";
        //   echo $id;
        //   echo $amount;
        
        
        $number = "0123456789asdfgASDFG";
        $number2 = "01234567890";

        //$password = substr(str_shuffle($number),0,4);

        $ran = substr(str_shuffle($number2),0,9);
        
        $transaction_id = "Admin".$ran;
        $trxtyp = "deposit";
        $status = "approved";
    
        $coin = "Usdt";
        $network = "Trc20";
        $date = date("Y/m/d");
        
               $sql = "INSERT INTO `Transactions`(`name`, `transaction_id`, `trxType`, `trxStatus`, `trxDate`, `Amount`, `coin`, `network`,`email`) VALUES  ('$name','$transaction_id','$trxtyp','$status','$date','$amount','$coin','$network',' $email')";


        $result = mysqli_query($conn,$sql);
            
                header("Location: ../dashboard.php?msg= Successful");
        
}





 if(isset($_POST['add_profit'])) {
    
      
   
        $amount = ($_POST['amount']) ;
        
        $id = $_POST['userId'];
        
        echo $id;
         
    $sql = "SELECT * FROM `users` WHERE `email` = '$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
    }

    $profit = floatval($row["profit"]) +  floatval($amount) ;
        
        
        
        
        
        
       
        
           $sql = "UPDATE `users` SET `profit` = '$profit' WHERE email = '$id' ";

           $result = mysqli_query($conn,$sql);
           
           if($result){
            header("Location: ../dashboard.php?msg= Successful");
           }else{
               header("Location: ../dashboard.php?msg= failed");
           }
               
           
        
}

 if(isset($_POST['minus_profit'])) {
    
      
   
        $amount = ($_POST['amount']) ;
        
        $id = $_POST['userId'];
        
        echo $id;
        
       
    try{     
    $sql = "SELECT * FROM `users` WHERE `email` = '$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
    }

    $profit = floatval($row["profit"]) -  floatval($amount) ;
        
        
        
        
        
        
       
        
           $sql = "UPDATE `users` SET `profit` = '$profit' WHERE email = '$id' ";

           $result = mysqli_query($conn,$sql);
           
           if($result){
            header("Location: ../dashboard.php?msg= Successful");
           }else{
               header("Location: ../dashboard.php?msg= failed");
           }
       }catch(Exception $e){
           echo 'Message: ' .$e->getMessage();
       }
               
           
        
}

 if(isset($_POST['KycVerify'])) {
    
      
   
       
        
        $id = $_POST['userId'];
        
        echo $id;
        
       
    try{     
    $sql = "SELECT * FROM `users` WHERE `email` = '$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
    }

    $status = $_POST['kycAction'];
        
        
        
        
        
        
       
        
           $sql = "UPDATE `users` SET `kycstatus` = '$status' WHERE email = '$id' ";

           $result = mysqli_query($conn,$sql);
           
           if($result){
            header("Location: ../dashboard.php?msg= Successful");
           }else{
               header("Location: ../dashboard.php?msg= failed");
           }
       }catch(Exception $e){
           echo 'Message: ' .$e->getMessage();
       }
               
           
        
}


 if(isset($_POST['updatePackage'])){
    
      
   
        $package = $_POST['package'];
        
        echo $package;
    
        
        $id = $_POST['userId'];
        
      
   

        
        
        
        
        
        
       
        
    $sql = "UPDATE `users` SET `package` = '$package' WHERE email = '$id' ";

    $result = mysqli_query($conn,$sql);
           
           if($result){
            header("Location: ../dashboard.php?msg= Successful");
           }else{
               header("Location: ../dashboard.php?msg= failed");
           }
           
}


