<?php
session_start();
if (isset($_SESSION['loginname'])){
    unset($_SESSION['loginname']);
    header('Location: login.php');
}