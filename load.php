<?php
session_start();

// Class Auto Load
function classAutoLoad($classname){

    $directories = ["contents", "layouts", "menus", "forms", "processes", "global"];
    