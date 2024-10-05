<?php

class user_details{
    var $fname;
    public $username;
    var $yob;
    protected $email_address;
    private $password;

    public function computer_user($fname){
        return $fname;
    }