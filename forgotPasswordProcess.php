<?php

    require "connection.php";

    require "SMTP.php";
    require "PHPMailer.php";
    require "Exception.php";

    use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){

    $email = $_GET["e"];

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."'");
    $n = $rs->num_rows;

    if($n == 1){

        $code = uniqid();

        Database::iud("UPDATE `user` SET `verification_code`='".$code."' WHERE
        `email`='".$email."'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'foodystoke.sl@gmail.com';
        $mail->Password = 'nimmlnlymtuzgqao';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('foodystoke.sl@gmail.com', 'Reset Password');
        $mail->addReplyTo('foodystoke.sl@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'eShop Forgot Password Verification Code';
        $bodyContent = '<div style="width: 800px; height: 400px; border:5px solid black; border-radius: 10px; text-align: center;">
        <h2 style="font-weight: bold;">F<span style="color: #0d6efd;">OO</span>DY</h2>
        <h3>Forgot Password</h3>
        <hr><br><br>
        <h1>Your Verification Code is <span style="color: red;"> '.$code.' </span></h1>

        <h6 style="margin-top: 100px;">&copy; 2022 Foody.lk || All Rights Reserved </h6>

    </div>';
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo 'Verification code sending failed';
        }else{
            echo 'Success';
        }
       
    }else{

    echo ("Invalid Email address");
    }

}

?>