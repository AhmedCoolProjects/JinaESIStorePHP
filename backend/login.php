<?php

$useremail = $_POST['useremail'];
$userpassword = $_POST['userpassword'];
$user_info = [
    "email" => $useremail,
    "password" => $userpassword
];

// read data file for users
$data_json_file = "./users.json";
$json_data = file_get_contents($data_json_file);
$users_data = json_decode($json_data, true);
$is_logged = false;

if (in_array($user_info, $users_data)) {
    session_start();
    $_SESSION["user_info"] = $user_info;
    header("Location:../pages/dashboard.php");
} else {

?>

    <head>
        <!-- google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body style="display: flex;flex-direction:column;align-items:center;">
        <h2 style="color: red;">Invalid User Informations</h2>
        <h4>Please click reset password to get your user informations</h4>
        <a href="../pages/login.php">
            <span class="material-icons">
                arrow_back
            </span>
        </a>
    </body>
<?php
}
