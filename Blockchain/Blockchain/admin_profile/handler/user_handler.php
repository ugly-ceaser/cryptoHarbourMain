<?php

session_start();
require("./conn.php");

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


if(isset($_POST['deposit'])) {
    
      
   
        echo$amount = ($_POST['amount']);
        echo"<br>";
        echo$id = $_POST['user'];
        
        //   echo "working";
        //   echo $id;
        //   echo $amount;
        
        
        $number = "0123456789asdfgASDFG";
        $number2 = "01234567890";

        //$password = substr(str_shuffle($number),0,4);

        $ran = substr(str_shuffle($number2),0,9);
        
        $trxId = "Admin".$ran;
        $trxType = "deposit";
        $status = "approved";
        $walletName = "admin";
        $coin = "Usdt";
        $Cryptontwk = "Trc20";
        $date = date("Y/m/d");
        
            $sql = "INSERT INTO `$trxType` ( `transaction_id `, `amount`, `status`, `registration_id`, `coin`,`network`, `date`) 
            VALUES ( '$trxId', '$amount',  '$status', '$id', '$coin','$Cryptontwk', '$date');";

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


