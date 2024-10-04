<?php
class auth{

    public function bind_to_template($replacements, $template) {
        return preg_replace_callback('/{{(.+?)}}/', function($matches) use ($replacements) {
            return $replacements[$matches[1]];
        }, $template);
    }

    public function signup($conn, $ObjGlob, $ObjSendMail, $lang, $conf){
        if(isset($_POST["signup"])){

            $errors = array();

            $fullname = $_SESSION["fullname"] = $conn->escape_values(ucwords(strtolower($_POST["fullname"])));
            $email_address = $_SESSION["email_address"] = $conn->escape_values(strtolower($_POST["email_address"]));
            $username = $_SESSION["username"] = $conn->escape_values(strtolower($_POST["username"]));

            if(ctype_alpha(str_replace(" ", "", str_replace("\'", "", $fullname))) === FALSE){
                $errors['nameLetters_err'] = "Invalid name format: Full name must contain letters and spaces only etc " . $fullname;
            }
            
            // verify that the email has got the correct format
            if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
                $errors['email_format_err'] = 'Wrong email format';
            }