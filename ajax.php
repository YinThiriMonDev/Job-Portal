<?php
ob_start();
$action = $_GET['action'];
include 'receive_message.php';
$crud = new Action();

if ($action == 'userLogIn') {
    $send_message = $crud->send_message();
    if ($send_message) {
        echo $send_message;
    }
}
?>