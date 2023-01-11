<?php
function get_auth_user($email_users, $pw_users) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email_users` = '$email_users' AND `pw_users` = '$pw_users' AND `role` = 2");
    return $result;
}