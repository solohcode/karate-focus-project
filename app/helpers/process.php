<?php

    require_once "../controllers/admin/Auth.php";
    $mainpage = "/auth/login.php";




    if (!isset($_POST["email"]) && !isset($_POST["password"]))
    {
        return Auth::loginFailed($mainpage);
    } 
    else
    {
        echo "I am workign";
        return new Auth();
    }