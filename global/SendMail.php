<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMail{

    //These must be at the top of your script, not inside a function
    public function SendMail($mailMsg){

        //Load Composer's autoloader
    require 'plugins/PHPMailer/vendor/autoload.php';
    