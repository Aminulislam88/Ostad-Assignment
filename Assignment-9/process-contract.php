<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo 'Error';
        } else {
            echo 'Message Sent Succuessfully';
        }
    }
}
?>