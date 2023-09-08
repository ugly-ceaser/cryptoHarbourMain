<?php
session_start();

include './conn.php';





// to avoid sql injections
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//to generate Random numbers
function randomGen($min, $max, $quantity)
{
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}


function encrypt_decrypt($string, $action = 'encrypt')
{
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'AA74CDCCrferefesc2BBRT935136HH7B63C27'; // user define private key
    $secret_iv = '5fgf54645dsfdfsfc5HJ5g27'; // user define secret key
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


//registration

if (isset($_POST["register"])) {

    echo "register";
    // $registration_id = implode("", randomGen(0, 20, 10));


    // $referral_code = implode("", randomGen(0, 10, 10));

    $fname = test_input($_POST['fname']);

    $username = test_input($_POST['username']);

    $email = test_input($_POST['email']);

    $password = test_input($_POST['password']);

    $confirm_password = test_input($_POST['confirmPassword']);

    $referree_code = test_input($_POST['referalCode']);

    $package = test_input($_POST['package']);

    $terms = test_input($_POST['terms']);

    $registration_date = date('Y-m-d');



    $password_hash = encrypt_decrypt($password, 'encrypt');



    if ($password != $confirm_password) {

        header("location:../Register.php?msg=Password not matched");

        
    }else{

      
        $sql = "INSERT INTO `users`(`fname`, `email`, `username`, `password`, `package`, `registration_date`, `referral`,`phoneNumber`) VALUES ('$fname', '$email','$username', ' $password_hash', '$package', '$registration_date','$referree_code','$terms')";

  

        if ($conn->query($sql)) {
              
        
      
            // $from = "abitragelimited@gmail.com";
            // $to = $email;
             
            // $subject= "Congratulations ".$fullname;
            // $htmlContent = 'Hello '.$fullname. "
            // <html>
            // <head>
            // <title>Hello Support</title>
            
            // </head>
            // <body>
            // <p>Your registration with Arbitrage Limited.com has been successfully completed.</p>
            // <p> Please log in with the following credentials</p>
    
            // <strong>Username : </strong> <strong>" .$email . "</strong><br>
            
            // <br>
            //  <h4> And Your Password</h4>
          
            
            // <h4> Thank you</h4>
            
            // </body>
            // </html>";
            
            //set content-type
            
            
            
             
             
            $from = "support@capitalworldpro.com";
            $to = $email;
            
                 
            $subject= "Congratulations ".$name;
             
             $message = "
                Hello $fname 
                <html>
                <head>
                <title>Capital World Profits</title>
                
                </head>
                <body>
                <img src='https://capitalworldpro.com/userPage/dist/img/logo.png' alt='Capital World profit Logo Image'>
                <br>
                <p>Your registration with Capital World Profits has been successfully completed.</p>
                <p> Please log in with the following credentials</p>
        
                
                
                
              
                
                <h4> Thank you</h4>
                <small>Contact Us at support@capitalworldpro.com</small>
                
                </body>
                </html>";
             
             $header = "From:$from \r\n";
             $header .= "Cc:$from \r\n";
             $header .= "MIME-Version: 1.0\r\n";
             $header .= "Content-type: text/html\r\n";
             
             $retval = mail ($to,$subject,$message,$header);
             
             if( $retval == true ) {
                header("location:../login.php?msg=Welcome Please Login");
             }
            
            
            
             header("location:../login.php?msg=Registration Successfull, please Login");
            
        } else {
            
            //header("location:../signup.php?msg=Not Successfull, please try again");
            echo "Error: " . $sql . "<br>" . $conn->error;
            die();
            
        }


    }

   
}



//login

if (isset($_POST["login"])) {

    $username = test_input($_POST['username']);

    $password = test_input($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $userPassword =  encrypt_decrypt($row["password"], 'decrypt');



        if ($userPassword == $password) {

            $_SESSION["email"] = $row['email'];

            $_SESSION["name"] = $row['fname'];

            $_SESSION["balance"] = $row['balance'];

            echo $_SESSION["email"];

            header("location:../userPage/index.php");
        } else {
            header("location:../login.php?msg=Wrong password");
        }
    } else {
        header("location:../login.php?msg=Wrong Details");
    }
}
